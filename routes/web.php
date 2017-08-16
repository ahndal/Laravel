<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return '<h1>Hello Foo</h1>';
});

Route::get('/{foo}', function ($foo) {
    return $foo;
});

Route::get('/{foo?}', function ($foo = 'bar') {
    return $foo;
});

Route::pattern('foo', '[0-9a-zA-Z{3}]');

Route::get('/{foo?}', function ($foo = 'bar') {
    return $foo;
});

Route::get('/{foo?}', function ($foo = 'bar') {
    return $foo;
})->where('foo', '[0-9a-zA-Z{3}]');

Route::get('/', [
    'as' => 'home',
    function() {
       return '제 이름은 "home" 입니다.';
    }
]);

Route::get('/home', function () {
    return redirect(route('home'));
});

Route::get('/', function () {
    return view('errors.503');
});

Route::get('/', function () {
    $items = ['apple', 'banana', 'tomato'];

    return view('welcome1', ['items' => $items])->with([
        'name' => 'Foo',
        'greeting' => '안녕하세요?'
    ]);
});
