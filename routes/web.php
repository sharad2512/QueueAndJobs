<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


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
Route::get('send-mail',[DemoController::class,'sendMailFunction']);
// {
//     $userMail = 'shnarute95@gmail.com';
//     dispatch(new App\Jobs\sendTestMail($userMail));
//     dd('send mail successfully');
// });
