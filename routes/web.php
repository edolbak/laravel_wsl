<?php

use App\Http\Controllers\Fake\FakeUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->controller(UserController::class)->group(function (){
    Route::get('/','index');
    Route::get('/test1','test1');
});

Route::prefix('fake/user')->controller(FakeUserController::class)->group(function (){
    Route::get('/','index');
    Route::get('/test1','test1');
});



//Route::controller(FakeUserController::class)->group(function () {
//    Route::get('/user/fake', 'index');
//    Route::get('/user/test1/fake', 'test1');
//});


//Route::prefix('fake/user')->group(function () {
//    Route::get('/',  [FakeUserController::class, 'index']);
//    Route::get('/test1',  [FakeUserController::class, 'test1']);
//});
