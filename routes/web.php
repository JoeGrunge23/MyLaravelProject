<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoResourceController;

// use App\Http\Controllers\PhotoController;

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

Route::resource('/todo', TodoController::class);


// Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');
// Route::get('/todos/create', [TodoController::class, 'create']);
// Route::post('/todos/create', [TodoController::class, 'store']);
// Route::get('/todos/{todo}/edit', [TodoController::class, 'edit']);
// Route::patch('/todos/{todo}/update', [TodoController::class, 'update'])->name('todo.update');
// Route::delete('/todos/{todo}/delete', [TodoController::class, 'delete'])->name('todo.delete');

Route::put('/todos/{todo}/complete', [TodoController::class, 'complete'])->name('todo.complete');
Route::delete('/todos/{todo}/incomplete', [TodoController::class, 'incomplete'])->name('todo.incomplete');




Route::get('/', function () {
    return view('welcome');

});



Route::get('/user', [UserController::class, 'index']);

Route::get('/upload', [UserController::class, 'uploadAvatar']);



// Route::get('/user', 'UserController@index');


// Route::post('/upload', function (Request $request) {
//     // $request->image->store('images'); <-- this will redirect to storage/app/images
//     // This will store teh  in storage/app/public/images
//     $request->image->store('images','public');

//     return 'uploaded';
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
