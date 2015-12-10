<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Particular routes
 */
Route::get('/', function () {
    return view('welcome');
});

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);


Route::get('student/{id}.json', 'StudentController@toJson');
Route::get('group/{id}.json', 'GroupController@toJson');
Route::get('tutor/{nombre}.json', 'TutorController@toJson');
Route::get('inscription/{id}/print', 'InscriptionController@printdoc');
/**
 * Model routing
 */

Route::model('group', 'Group');

Route::bind('group', function($value, $route) {
  return App\Group::findOrFail($value);
});

/**
 * Resources controllers
 */
Route::group(['middleware' => 'auth'], function()
{
  Route::resource('school', 'SchoolController');
  Route::resource('schoolyear', 'SchoolyearController');
  Route::resource('subject', 'SubjectController');
  Route::resource('partial', 'PartialController');
  Route::resource('student','StudentController');
  Route::resource('group','GroupController');
  Route::resource('inscription','InscriptionController');
});