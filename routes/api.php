<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tasks', 'TaskController@getAllTasks');
Route::get('tasks/{id}', 'TaskController@getTask');
// Route::post('tasks', 'TaskController@createTask');
Route::post('tasks', [TaskController::class, 'createTask']);
Route::put('tasks/{id}', 'TaskController@updateTask');
Route::delete('tasks/{id}', 'TaskController@deleteTask');
