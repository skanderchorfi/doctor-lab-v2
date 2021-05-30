<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

use App\Http\Controllers\Admin\DashboardController;

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::get('dashboard', [DashboardController::class, 'dashboard']);
    Route::crud('user', 'UserCrudController');
    Route::crud('produit', 'ProduitCrudController');
    Route::get('charts/new-entries', 'Charts\NewEntriesChartController@response')
        ->name('charts.new-entries');
    Route::get('charts/weekly-users', 'Charts\WeeklyUsersChartController@response')->name('charts.weekly-users.index');
    Route::get('charts/article-partition', 'Charts\ArticlePartitionChartController@response')->name('charts.article-partition.index');
}); // this should be the absolute last line of this file