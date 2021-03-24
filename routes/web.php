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

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return redirect()->route('articles.index');
// });


Route::group(['prefix' => 'dashboard'],function() {

    Route::resource('articles', 'Dashboard\ArticleController')->only([
        'index', 'create', 'edit', 'store', 'update', 'destroy'
    ]);

    Route::resource('events', 'Dashboard\EventController')->only([
        'index', 'create', 'edit', 'store', 'update', 'destroy'
    ]);

    Route::resource('mediation', 'Dashboard\MediationCenterController')->only([
        'index', 'show'
    ]);

    Route::resource('contact_us', 'Dashboard\ContactUsController')->only([
        'index', 'show'
    ]);

    Route::resource('application_forms', 'Dashboard\ApplicationFormController')->only([
        'index', 'show'
    ]);
    Route::get('/test',function(){
        if(auth()->guard('web')->check())
        dd("hello");
        else
        dd("fuck u");
    })->name('test');

    Route::resource('admins', 'Dashboard\AdminController')->only([
        'index', 'create', 'edit', 'store', 'update', 'destroy'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
