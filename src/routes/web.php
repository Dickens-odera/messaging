<?php
use Illuminate\Support\Facades\Route;
use Dickens\Message\app\Http\Controllers\MessageController;

Route::group(['prefix' => 'message','as' => 'message.'], function()
{
    Route::get('/',[MessageController::class,'index'])->name('index');
    Route::post('/',[MessageController::class,'message'])->name('send');
});
