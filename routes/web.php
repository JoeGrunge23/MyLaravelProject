<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;

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


Route::get('/todos', [TodoController::class, 'index']);
Route::get('/todos/create', [TodoController::class, 'create']);
Route::post('/todos/create', [TodoController::class, 'store']);

Route::get('/todos/{id}/edit', [TodoController::class, 'edit']);
 

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
