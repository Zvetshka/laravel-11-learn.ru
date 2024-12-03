<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Маршрут для /test http://127.0.0.1:8000/test
Route::get('/test', function () {
    return 'Это тестовое сообщение!';
});

Route::get('/dir/test', function () {
    return 'Это сообщение для маршрута /dir/test';
});


Route::get('/post/{id}', function () {
    return '';
});


Route::get('/post/{id}', function ($id) {
    return 'пост ' . $id;
});

// http://127.0.0.1:8000/user/Smith/John
Route::get('/user/{name}', function ($name) {
    return "Привет, {$name}!";
});


Route::get('/post/{catId}/{postId}', function ($catId, $postId) {
    return $catId . ' ' . $postId;
});

Route::get('/user/{surname}/{name}', function ($surname, $name) {
    return "Привет, {$name} {$surname}!";
});


Route::get('/posts/page/{page}', function ($page) {
    return 'страница номер ' . $page;
});


Route::get('/posts/page/{page?}', function ($page) {
    return 'страница номер ' . $page;
});


Route::get('/posts/page/{page?}', function ($page = 1) {
    return 'страница номер ' . $page;
});

// Маршрут для города http://127.0.0.1:8000/city/Moscow
Route::get('/city/{city?}', function ($city = 'minsk') {
    return "Город: {$city}";
});


Route::get('/post/{id}', function ($id) {
    return 'пост ' . $id;
});


Route::get('/post/{id}', function ($id) {
    return 'пост ' . $id;
})->where('id', '[0-9]+');

// Маршрут для /user/id, где id это число http://127.0.0.1:8000/user/123
Route::get('/user/{id}', function ($id) {
    return "Профиль пользователя с ID: {$id}";
})->where('id', '[0-9]+');

// http://127.0.0.1:8000/user/abc

Route::get('/user/{id}', function ($id) {
    return "Профиль пользователя с ID: {$id}";
})->where('id', '[0-9]+');


Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'Профиль пользователя с ID: ' . $id . ' и именем: ' . $name;
})
    ->where('id', '[0-9]+') // Ограничение id должно быть числом
    ->where('name', '[a-z]{3,}'); // Ограничение более 2 символов

Route::get('/posts/{date}', function ($date) { // http://127.0.0.1:8000/posts/2024-11-32
    return 'Посты за дату: ' . $date;
})
    ->where('date', '\d{4}-\d{2}-\d{2}');


Route::get('/post/{id}', function ($id) {
    return 'id';
});
Route::get('/post/all', function () {
    return 'all';
});


Route::get('/post/all', function () {
    return 'all';
});
Route::get('/post/{id}', function ($id) {
    return 'id';
});


Route::get('/post/{id}', function ($id) {
    return 'id';
})->where('id', '[0-9]+');
Route::get('/post/all', function () {
    return 'all';
});


Route::get('/blog/post/all', function () {
    return 'all';
});
Route::get('/blog/post/{id}', function ($id) {
    return $id;
});


Route::prefix('blog')->group(function () {
    Route::get('/post/all', function () {
        return 'all';
    });
    Route::get('/post/{id}', function ($id) {
        return $id;
    });
});


Route::get('/admin/users', function () {
    return 'all';
});
Route::get('/admin/user/{id}', function ($id) {
    return $id;
});


Route::get('/post/all', function () {
    return 'all';
});


Route::get('/post/all', function () {
    return 'all';
})->name('posts');


Route::get('/user/profile', function () {
    return 'profile';
})->name('user.profile');


Route::get('/post', ['App\\Http\\Controllers\\PostController', 'show']);


use App\Http\Controllers\PostController;


Route::get('/post', [PostController::class, 'show']);

use App\Http\Controllers\UserController;


Route::get('/user', [UserController::class, 'show']); //21

Route::get('/user/all', [UserController::class, 'all']);

Route::get('/post/{id}', [PostController::class, 'show']); //22

Route::get('/user/{name}', [UserController::class, 'show']);

Route::get('/user/{surname}/{name}', [UserController::class, 'show']);

Route::get('/post/{id}', [PostController::class, 'show']); //23

Route::get('/user/{name}', [PostController::class, 'show']); //24
