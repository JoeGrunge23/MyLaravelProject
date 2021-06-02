<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

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
    // This will return the key ses key  in config/services.php  
    // return config('services.ses.key'); 
    // return View::make('welcome');
});

// Route::get('/user', [UserController::class, 'index']); 

Route::get('/user', 'UserController@index'); 



Route::post('/upload', [UserController::class, 'uploadAvatar']); 


// Route::post('/upload', function (Request $request) {
//     // $request->image->store('images'); <-- this will redirect to storage/app/images
//     // This will store teh 
//     $request->image->store('images','public');
    
//     return 'uploaded';
// });






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
