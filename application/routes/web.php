<?php

use App\Http\Router\Bootstrap;
use Illuminate\Support\Facades\Route;
use App\Http\Router\Web\WebPublicRouter;
use App\Http\Router\Web\WebAdminRouter;
use App\Http\Router\Web\WebMemberRouter;
use App\Http\Middleware\AdminWebServerSession;
use App\Http\Middleware\MemberWebServerSession;

/*
|-----------------------------------------------------------------------  /
| Bootstrap Template Examples
|----------------------------------------------------------------------- */
Route::group(['prefix' => 'bootstrap'], function () {
    Route::get('/', [Bootstrap::class, 'indexContent']);
    Route::get('/{module?}/{page?}', [Bootstrap::class, 'exampleContent']);
});

/*
|-----------------------------------------------------------------------  /
| Public
|----------------------------------------------------------------------- */
Route::redirect('/', '/posts.html');

Route::get('/exit', [WebPublicRouter::class, 'exit']);
Route::get('/sign-in{extension}', [WebPublicRouter::class, 'signInLayout'])->where('extension', '(?:.html)?');
Route::get('/sign-up{extension}', [WebPublicRouter::class, 'signUpLayout'])->where('extension', '(?:.html)?');

Route::get('/home{extension}', [WebPublicRouter::class, 'postsContent'])->where('extension', '(?:.html)?');
Route::get('/posts{extension}', [WebPublicRouter::class, 'postsContent'])->where('extension', '(?:.html)?');
Route::get('/home/{category?}/{page?}', [WebPublicRouter::class, 'postsContent']);
Route::get('/posts/{category?}/{page?}', [WebPublicRouter::class, 'postsContent']);

Route::get('/post/{pid}/{slug}{extension}', [WebPublicRouter::class, 'postContent'])->where('extension', '(?:.html)?');

Route::get('/wall{extension}', [WebPublicRouter::class, 'wallContent'])->where('extension', '(?:.html)?');

Route::get('/profiles/{pid?}', [WebPublicRouter::class, 'profileContent']);
Route::get('/profiles/{pid}/posts', [WebPublicRouter::class, 'profilePostsContent']);

/*
|-----------------------------------------------------------------------  /
| Member
|----------------------------------------------------------------------- */
Route::group(['middleware' => MemberWebServerSession::class, 'prefix' => 'member'], function () {
    Route::redirect('/', '/member/profile');

    Route::get('/exit', [WebMemberRouter::class, 'exit']);
    Route::get('/init/{token}', [WebMemberRouter::class, 'init'])->withoutMiddleware([MemberWebServerSession::class]);

    Route::get('/profile', [WebMemberRouter::class, 'profile']);
    Route::get('/settings', [WebMemberRouter::class, 'settings']);
});

/*
|-----------------------------------------------------------------------  /
| Admin
|----------------------------------------------------------------------- */
Route::group(['middleware' => AdminWebServerSession::class, 'prefix' => env('ADMIN_PREFIX')], function () {
    Route::redirect('/', '/'.env('ADMIN_PREFIX').'/profile');

    Route::get('/exit', [WebAdminRouter::class, 'exit']);
    Route::get('/sign-in', [WebAdminRouter::class, 'init'])->withoutMiddleware([AdminWebServerSession::class]);
    Route::get('/init/{token}', [WebAdminRouter::class, 'init'])->withoutMiddleware([AdminWebServerSession::class]);

    Route::get('/profile', [WebAdminRouter::class, 'profile']);
    Route::get('/settings', [WebAdminRouter::class, 'settings']);
});