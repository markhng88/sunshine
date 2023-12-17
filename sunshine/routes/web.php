<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);
route::get('/appointment',[UserController::class,'appointmentview']);
route::get('/add_babysitter_view',[AdminController::class,'addview']);
route::post('/upload_babysitter',[AdminController::class,'upload']);
route::post('/pappointment',[HomeController::class,'pappointment']);
route::get('/myappointment',[HomeController::class,'myappointment']);
route::get('/cancel_appointment/{id}',[HomeController::class,'cancel_appointment']);
route::get('/showappointment',[AdminController::class,'showappointment']);
route::get('/approve/{id}',[AdminController::class,'approve']);
route::get('/cancel/{id}',[AdminController::class,'cancel']);