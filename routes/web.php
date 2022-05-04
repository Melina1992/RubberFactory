<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//****************** Routes for Permission Module **********************//

Route::resource('permissions', 'Admin\PermissionsController');

//Route for search Permission
Route::get('/searchPermission', 'Admin\PermissionsController@search');

//********************************** End *********************************//

//****************** Routes for Permission Module **********************//

Route::resource('roles', 'Admin\RolesController');

//Route for search Permission
Route::get('/searchRoles', 'Admin\RolesController@search');

//********************************** End *********************************//

//****************** Routes for UsersController **********************//

Route::resource('users', 'Admin\UsersController');

Route::get('/searchUsers', 'Admin\UsersController@search');

//********************************** End *********************************//

//****************** Routes for EmployeesController **********************//

Route::resource('employees', 'EmployeeController');

//****************** Routes for ProductsController**********************//

Route::resource('products', 'ProductController');







