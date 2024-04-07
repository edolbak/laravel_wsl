<?php

use App\Http\Controllers\Fake\FakeUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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

require __DIR__.'/auth.php';


