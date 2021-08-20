<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('/profil', function () {
    if (session('status')) {
        return redirect()->route('user.profil')->with('status', session('status'));
    }

    return redirect()->route('user.profil');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    //User
    Route::resource('users', 'UserController');

    //Employee
    Route::resource('employees', 'EmployeeController');

    //Company
    Route::resource('companies', 'CompanyController');
});

Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@indexUser')->name('profil');

    //User
    Route::resource('users', 'UserController');

    //Employee
    Route::resource('employees', 'EmployeeController');

    //Company
    Route::resource('companies', 'CompanyController');
});
