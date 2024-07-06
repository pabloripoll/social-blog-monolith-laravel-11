<?php

use App\Http\Router\Bootstrap;
use Illuminate\Support\Facades\Route;
use App\Http\Router\Web\PublicWebRouter;

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

Route::get('/exit', [PublicWebRouter::class, 'exit']);
Route::get('/sign-in{extension}', [PublicWebRouter::class, 'signInLayout'])->where('extension', '(?:.html)?');
Route::get('/sign-up{extension}', [PublicWebRouter::class, 'signUpLayout'])->where('extension', '(?:.html)?');

Route::get('/home{extension}', [PublicWebRouter::class, 'postsContent'])->where('extension', '(?:.html)?');
Route::get('/posts{extension}', [PublicWebRouter::class, 'postsContent'])->where('extension', '(?:.html)?');
Route::get('/home/{category?}/{page?}', [PublicWebRouter::class, 'postsContent']);
Route::get('/posts/{category?}/{page?}', [PublicWebRouter::class, 'postsContent']);
Route::post('/home', [PublicWebRouter::class, 'asyncPostsContent']);
Route::post('/posts', [PublicWebRouter::class, 'asyncPostsContent']);

Route::get('/post/{pid}/{slug}{extension}', [PublicWebRouter::class, 'postContent'])->where('extension', '(?:.html)?');
Route::post('/post', [PublicWebRouter::class, 'asyncPostContent']);

Route::get('/wall{extension}', [PublicWebRouter::class, 'wallContent'])->where('extension', '(?:.html)?');
Route::post('/wall', [PublicWebRouter::class, 'asyncWallContent']);

Route::get('/profiles/{pid?}', [PublicWebRouter::class, 'profileContent']);
Route::post('/profiles', [PublicWebRouter::class, 'asyncProfileContent']);
Route::get('/profiles/{pid}/posts', [PublicWebRouter::class, 'profilePostsContent']);
Route::post('/profiles/posts', [PublicWebRouter::class, 'asyncProfilePostsContent']);

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