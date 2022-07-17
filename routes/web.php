<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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
    return redirect('/email');
});
Route::get('/email', [MailController::class, 'emailCreate']);
Route::post('/email/send', [MailController::class, 'sendMail']);
Route::get('/email/sent', [MailController::class, 'emailSent']);
