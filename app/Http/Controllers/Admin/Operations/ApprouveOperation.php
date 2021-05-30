<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\User;
use Illuminate\Support\Facades\Route;

trait ApprouveOperation
{
    /**
     * Define which routes are needed for this operation.
     *
     * @param string $segment    Name of the current entity (singular). Used as first URL segment.
     * @param string $routeName  Prefix of the route name.
     * @param string $controller Name of the current CrudController.
     */
    protected function setupApprouveRoutes($segment, $routeName, $controller)
    {
        Route::get($segment.'/{id}/approuve', [
            'as'        => $routeName.'.approuve',
            'uses'      => $controller.'@approuve',
            'operation' => 'approuve',
        ]);
    }

    /**
     * Add the default settings, buttons, etc that this operation needs.
     */
    protected function setupApprouveDefaults()
    {
        $this->crud->allowAccess('approuve');

        $this->crud->operation('approuve', function () {
            $this->crud->loadDefaultOperationSettingsFromConfig();
        });

        $this->crud->operation('list', function () {
            // $this->crud->addButton('top', 'approuve', 'view', 'crud::buttons.approuve');
            $this->crud->addButton('line', 'approuve', 'view', 'crud::buttons.approuve');
        });
    }

    /**
     * Show the view for performing the operation.
     *
     * @param int $id
     * @return Response|\Illuminate\Http\RedirectResponse
     */
    public function approuve(int $id)
    {
        User::find($id)->update([
            'active' => true
        ]);

        return redirect()->to('/admin/user');
    }
}
