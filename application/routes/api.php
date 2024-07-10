<?php

use Illuminate\Support\Facades\Route;
use App\Http\Router\Api\Auth\ApiAuthAdminRouter;
use App\Http\Router\Api\Auth\ApiAuthMemberRouter;

/*
|-----------------------------------------------------------------------  /
| Public V1
|----------------------------------------------------------------------- */

Route::group(['prefix' => '/v1'], function () {
    Route::get('/blog/wall', [ApiBlogAdminRouter::class, 'indexContent']);
    Route::get('/blog/posts', [ApiBlogAdminRouter::class, 'indexContent']);
    Route::get('/blog/profile', [ApiBlogAdminRouter::class, 'exampleContent']);
});

/*
|-----------------------------------------------------------------------  /
| Members V1
|----------------------------------------------------------------------- */

Route::group(['prefix' => '/v1'], function () {
    Route::post('/auth/login', [ApiAuthMemberRouter::class, 'login']);
    Route::post('/auth/register', [ApiAuthMemberRouter::class, 'register']);
    Route::post('/auth/terminate', [ApiAuthMemberRouter::class, 'terminate']);
});

Route::group(['prefix' => '/member/v1'], function () {
    Route::get('/blog/wall', [ApiBlogAdminRouter::class, 'indexContent']);
    Route::get('/blog/posts', [ApiBlogAdminRouter::class, 'indexContent']);
    Route::get('/blog/profile', [ApiBlogAdminRouter::class, 'exampleContent']);
});//->middleware();

/*
|-----------------------------------------------------------------------  /
| Admins V1
|----------------------------------------------------------------------- */

Route::group(['prefix' => '/admin/v1'], function () {
    Route::get('/auth/login', [ApiAuthAdminRouter::class, 'login']);
    Route::get('/auth/register', [ApiAuthAdminRouter::class, 'register']);
    Route::get('/auth/terminate', [ApiAuthAdminRouter::class, 'terminate']);
});

Route::group(['prefix' => '/admin/v1'], function () {
    Route::get('/blog/wall', [ApiBlogAdminRouter::class, 'indexContent']);
    Route::get('/blog/posts', [ApiBlogAdminRouter::class, 'indexContent']);
    Route::get('/blog/profile', [ApiBlogAdminRouter::class, 'exampleContent']);
});//->middleware();

/*
|-----------------------------------------------------------------------  /
| Vault
|----------------------------------------------------------------------- */
/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */