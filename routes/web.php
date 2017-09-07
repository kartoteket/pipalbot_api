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

Route::get('/tasks', function () {

	$tasks = DB::table('pb_dev_tasks')->get();

    return view('tasks', compact('tasks'));
});


Route::get('/tasks/{id}', function ($id) {


	$task = DB::table('pb_dev_tasks')->find($id);

	dd($task);
 //    return view('tasks', compact('tasks'));
});