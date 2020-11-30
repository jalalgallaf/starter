<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\customers;
use App\Http\Controllers\Front\AdminusersController;
use App\Http\Controllers\Front\newscontroller;


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



//Route::namespace('Front')->group(function(){
//
//    Route::get('/',[AdminusersController::class,'show']);
//
//});







//Route::group(['prefix'=>'user'],function(){
//
//    Route::get('/',function (){
//
//
//
//        $obj = new \stdClass();
//
//        $obj->name ='jalal';
//        $obj->id=1;
//
//
//
//
//
//
//
//
//       return view('Front\welcome',compact('obj'));
//    });
//    Route::get('/app',function (){
//        return'app work level 2';
//    })->middleware('auth');
//
//
//});


//Route::resource('news',newscontroller::class);
//
//Route::Group(['Prefix'=>'news'],function () {
//
//    Route::get('/',[customers::class,'index']);
//
//});

Route::get('home',function (){


    return view('index');

});
Route::get('/',function (){


    return view('welcome');

});




Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
