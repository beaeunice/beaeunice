<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::view('dashboard', 'dashboard',
[
    'title' => 'Main dashboard'
]);


Route::view('/', 'Authentication/login', [
    'title'=>'Login'
]);
Route::view('register', 'Authentication/register', [
        'title'=>'Register'
]);

Route::view('forgot-password', 'Authentication.forgot-password', [
    'title'=>'Forgot password'
]);

Route::get('testMail', function(){
    Mail::to('beaeunicecarpio@gmail.com')->send(new SendVerificationMailer);
    return response('mail sent!');
});

//start of authentication
Route::post('perform-register', [AuthController::class, 'performRegister']);
Route::post('perform-login', [AuthController::class, 'performLogin']);
Route::post('forgot-password', [AuthController::class, 'showNewPass']);
Route::post('change-pass', [AuthController::class, 'changePass']);
//end of authentication