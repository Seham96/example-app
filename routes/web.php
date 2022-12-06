<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\postdir\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvisionServer;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/vtest', function () {
//     return view('test', ['name'=>"Ahmad",'Major'=>"IT"]);
// });

// Route::get('/',function(){
//     $name="Sara";
//     $age=20;
//     $marks=array(90,98,80);
//         return view('test',compact('name','age','marks')) ;
// });

// Route::get('/','App\Http\Controllers\Controller@show');

// Route::get('/cont','App\Http\Controllers\postdir\PostController@show');

// Route::get('/con','App\Http\Controllers\postdir\PostController@create');

// Route::get('/{id}',[PostController::class,'show2']);

// Route::get('/server', ProvisionServer::class);*****

Route::resource('photos', PhotoController::class);

Route::get('/v', function () {
    return view('layout.master');
});

Route::get('/vc', function () {
    return view('contact');
});
