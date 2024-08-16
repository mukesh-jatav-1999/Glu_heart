<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::post('/send-message', [MessageController::class, 'sendMessage']);


Route::get('/', function () {
    return view('send_message');
});
Route::view('test','send_message');

