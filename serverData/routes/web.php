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

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get("/logout", "Auth\LoginController@logout");


Route::get('change-password', function() {return view('change-password'); });
Route::post('change-password', 'Auth\UpdatePasswordController@update');


Route::get("/pdf/{pdf}", "PdfController@show");


// All routes in the group are protected, only authed user are allowed to access them
Route::group(['middleware' => 'auth'], function () {
 
    Route::resource('/itemCRUD', 'ItemCRUDController');

    Route::resource('/driverCRUD', 'DriverCRUDController');

    Route::resource("/pdf", "PdfController");
  //  Route::get('restaurants/admins/{id}', 'RestaurantsController@admins');
});



// Admin routes
Route::post("/admin/login", "Auth\LoginController@login");
Route::get('/admin', 'Admin\AdminController@showAdminLoginForm');
Route::post('/admin', 'Auth\LoginController@login');
Route::get('/admin/logout', 'Admin\AdminController@logout');
Route::get("admin/home", 'Admin\HomeController@index');//

//admin user role
Route::resource('admin/roles', 'Admin\RoleController');
Route::get('admin/roles/delete/{id}', 'Admin\RoleController@destroy');

Route::resource('admin/users', 'Admin\UserController');
Route::get('admin/users/delete/{id}', 'Admin\UserController@destroy');
Route::post('admin/users/setactive', 'Admin\UserController@setactive');

Route::resource('admin/customers', 'Admin\CustomerController');
Route::get('admin/customers/delete/{id}', 'Admin\CustomerController@destroy');

Route::resource('admin/drivers', 'Admin\DriverController');
Route::get('admin/drivers/delete/{id}', 'Admin\DriverController@destroy');
Route::post('admin/drivers/setactive', 'Admin\DriverController@setactive');


Route::resource('admin/details', 'Admin\DetailController');
Route::get('admin/details/delete/{id}', 'Admin\DetailController@destroy');


Route::get('admin/reports','Admin\ReportController@index');


Route::post("mailsend", "MailController@send");



Route::get('/{pageUrl}', 'HomeController@gotoTarget');
