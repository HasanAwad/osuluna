<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/user/register', 'UserAuthController@register');
Route::post('/user/login', 'UserAuthController@login');
Route::post('/user/logout', 'UserAuthController@logout');

//admin login
Route::post('/admin/login', 'AdminAuthController@login');

//-------------------------------------------------------------------
//articles for anyone
Route::get('/articles','ArticleController@index');
Route::get('/article/{id}','ArticleController@show');
//-------------------------------------------------------------------
//contact for anyone
Route::post('/contact','ContactController@store');
//-------------------------------------------------------------------
//events for anyone

Route::get('/events','EventController@index');
Route::get('/event/{id}','EventController@show');

//-------------------------------------------------------------------
//Forms

Route::get('/businessGeneration','BusinessGenerationController@index');
Route::get('/businessSector','BusinessSectorController@index');
Route::get('/businessLegal','BusinessLegalFormController@index');
Route::get('/industry','TypeOfIndustryController@index');
Route::post('/form','FormController@store');
Route::post('/mediation','MediationCenterController@store');
//-------------------------------------------------------------------
//check if admin and his role
Route::get('/check', 'AdminAuthController@adminCheck');

//-------------------------------------------------------------------
// admin group
Route::group(['prefix' => 'admin', 'middleware' => ['assign.guard:admins','jwt.auth']],function ()
{
    Route::post('/article','ArticleController@store');
    Route::put('/article/{id}','ArticleController@update');
    Route::delete('/article/{id}','ArticleController@destroy');
    //contacts for admin
    Route::get('/contacts','ContactController@index');
    //Events for admin
    Route::post('/event','EventController@store');
    Route::delete('/event/{id}','EventController@destroy');
    Route::put('/event/{id}','EventController@update');
    Route::post('/logout', 'AdminAuthController@logout');
    Route::post('/register', 'AdminAuthController@register');

    //Route::get('/demo','AdminController@demo');
});
//-------------------------------------------------------------------

// User group

Route::group(['prefix' => 'user', 'middleware' => ['assign.guard:api','jwt.auth']],function ()
{
    //Route::get('/demo','UserController@demo');
});
//-------------------------------------------------------------------
Route::get('test', function (){
    return hasPermission('run_test');
});
//-------------------------------------------------------------------
