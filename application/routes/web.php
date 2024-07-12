<?php

use App\Http\Router\Bootstrap;
use Illuminate\Support\Facades\Route;
use App\Http\Router\Web\WebPublicRouter;

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

Route::get('/member/exit/{token}', [WebMemberRouter::class, 'exit']);
Route::get('/member/login/{token}', [WebMemberRouter::class, 'access']);
Route::get('/member/profile', [WebMemberRouter::class, 'profile']);
Route::get('/member/settings', [WebMemberRouter::class, 'settings']);

/*
|-----------------------------------------------------------------------  /
| Member
|----------------------------------------------------------------------- */
/* Route::group(['prefix' => env('MEMBER_PREFIX')], function () {
    Route::get('', [AdminRouter::class, 'indexContent']);
    Route::get('/{module}/{section}', [AdminRouter::class, 'exampleContent']);
}); */

/*
|-----------------------------------------------------------------------  /
| Admin
|----------------------------------------------------------------------- */
/* Route::group(['prefix' => env('ADMIN_PREFIX')], function () {
    Route::get('/', [AdminRouter::class, 'indexContent']);
    Route::get('/sign-in', [AdminRouter::class, 'indexContent']);
    Route::get('/{module}/{section}', [AdminRouter::class, 'exampleContent']);
}); */