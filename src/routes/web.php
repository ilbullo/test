<?php
use Illuminate\Support\Facades\Route;
use Ilbullo\Test\Http\Controllers\ContactController;

Route::get('/test',function() {
    return view('test::test');
});

Route::group(['namespace' => 'Ilbullo\Test\Http\Controllers'], function() {
    Route::get('contact',[ContactController::class,'index']);
});
