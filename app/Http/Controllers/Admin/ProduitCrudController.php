<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProduitRequest;
use App\Models\Produit;
use App\Models\User;
use App\Notifications\ProduitCreatedNotification;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Notification;

/**
 * Class ProduitCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProduitCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     * @throws \Exception
     */
    public function setup()
    {
        $this->crud->setModel(\App\Models\Produit::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/produit');
        $this->crud->setEntityNameStrings('produit', 'produits');
        $this->crud->enableExportButtons();
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('nom');
        CRUD::column('description');
        CRUD::column('image');
        CRUD::column('type');
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ProduitRequest::class);

        $this->crud->addField([
            'name' => 'nom'
        ]);

        $this->crud->addField([
            'name' => 'description'
        ]);

        $this->crud->addField([
            'name' => 'image',
            'type' => 'upload',
            'upload' => true
        ]);

        $this->crud->addField([
            'name' => 'type',
            'type'        => 'select_from_array',
            'options'     => Produit::FORM_TYPES,
            'allows_null' => false,
        ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function store(ProduitRequest $request)
    {
        $data = $request->all();

        // stockage sur disque dur
        if ($request->hasFile('image'))
        {
            $filename = uniqid() . '-'. $request->file('image')->getClientOriginalName();

            $request->file('image')->storeAs('public/produit/', $filename);
        }

        $produit = new Produit([
            'nom' => $data['nom'],
            'description' => $data['description'],
            'type' => $data['type'],
            'image' => $filename
        ]);

        $produit->save();

        Notification::send(User::all(), new ProduitCreatedNotification($produit));

        return redirect()->to($request->get('http_referrer', '/admin'));
    }
}
