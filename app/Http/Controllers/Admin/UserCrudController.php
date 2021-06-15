<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Operations\ApprouveOperation;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Notifications\UserCreatedNotification;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use ApprouveOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'name'
        ]);

        $this->crud->addColumn([
            'name' => 'email'
        ]);

        $this->crud->addColumn([
            'name' => 'active',
            'type' => 'check'
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        $this->crud->setValidation(UserRequest::class);

        $this->crud->addField([
            'name' => 'name'
        ]);

        $this->crud->addField([
            'name' => 'email'
        ]);

        $this->crud->addField([
            'name' => 'password',
            'type' => 'password'
        ]);

    }

    public function store(UserRequest $request)
    {
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->save();

        Notification::send($user, new UserCreatedNotification($user, $request->password));

        return redirect()->to($request->get('http_referrer', '/admin'));
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

}
