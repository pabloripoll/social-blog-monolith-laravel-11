<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Template;

Route::get('/', function () {
    return view('website/home');
});

/*
|-----------------------------------------------------------------------  /
| Template
|----------------------------------------------------------------------- */
Route::group(['prefix' => 'template'], function () {
    Route::get('', [Template::class, 'indexContent']);
    Route::get('/{module?}/{page?}', [Template::class, 'exampleContent']);
});