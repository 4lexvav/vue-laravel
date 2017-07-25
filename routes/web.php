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

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


// Authentication routes...
Auth::routes();

/**
 * Display default home page.
 */
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Display All Tasks.
 */
Route::get('/', 'Task\IndexController@execute');

/**
 * Add a New Task.
 */
Route::post('/task', 'Task\StoreController@execute');

/**
 * Delete an Existing Task.
 */
Route::delete('/task/{task}', 'Task\DestroyController@execute');
