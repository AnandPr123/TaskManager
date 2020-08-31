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
Route::post('/teams','TeamController@index');
Route::get('/teams/{id}','TeamController@getTeam');
Route::post('/teams/{id}/member','MembersController@addMember');
Route::delete('/teams/{id}/members/{id2}','MembersController@deleteMember');
Route::get('/teams/​{id}/tasks','TasksController@getTasks');
Route::post('/teams/​{id}/tasks','TasksController@addTask');
Route::get('/teams/​{id1}/tasks/{id2}','TasksController@getTask');
Route::patch('/teams/​{id1}/tasks/{id2}','TasksController@patchTask');
Route::get('/teams/​{id1}/members/{id2}/tasks/','TasksController@memberTasks');


// Route::get('/','TeamController@index');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
