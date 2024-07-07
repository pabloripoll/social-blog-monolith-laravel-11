<?php

use Illuminate\Support\Facades\Route;
use App\Http\Router\Api\ApiAuthRouter;

/*
|-----------------------------------------------------------------------  /
| Auth
|----------------------------------------------------------------------- */
Route::post('/auth/register', [ApiAuthRouter::class, 'register']);