<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\BorangAController;
use App\Http\Controllers\Pegawai\PegawaiController;
use App\Http\Controllers\Dean\DeanController;
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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','dashboard.user.home')->name('home');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          Route::get('/add-new',[UserController::class,'add'])->name('add');

          //UTK BORANG A
         Route::view('/borangA','dashboard.user.borangA')->name('borangA');
         //Route::get('/',[borangAController::class,'borangA']); //->name('isiA');  //get == 
        //Route::post('/create',function(){
        Route::post('/store',[BorangAController::class,'store'])->name('store'); //post == fill value then save to database

        //borang B
        Route::view('/borangB','dashboard.user.borangB')->name('borangB');

    });

});

Route::prefix('pegawai')->name('pegawai.')->group(function(){
       
    Route::middleware(['guest:pegawai','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.pegawai.login')->name('login');
          Route::post('/check',[PegawaiController::class,'check'])->name('check');
    });

    Route::middleware(['auth:pegawai','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.pegawai.home')->name('home');
        Route::post('/logout',[PegawaiController::class,'logout'])->name('logout');
    });

});

Route::prefix('dean')->name('dean.')->group(function(){

       Route::middleware(['guest:dean','PreventBackHistory'])->group(function(){
            Route::view('/login','dashboard.dean.login')->name('login');
            Route::view('/register','dashboard.dean.register')->name('register');
            Route::post('/create',[DeanController::class,'create'])->name('create');
            Route::post('/check',[DeanController::class,'check'])->name('check');
       });

       Route::middleware(['auth:dean','PreventBackHistory'])->group(function(){
            Route::view('/home','dashboard.dean.home')->name('home');
            Route::post('logout',[DeanController::class,'logout'])->name('logout');
       });

});