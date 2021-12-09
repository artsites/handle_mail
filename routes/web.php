<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'handle-mail'], function(){
    Route::post('/send', 'Artsites\HandleMail\Http\Controllers\User\HandleMailController@post')->name('handle-mail.send');
});

