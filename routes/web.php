<?php

use Illuminate\Support\Facades\Route;

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

Route::get("foo", function() {
    return "Hello Program";
});

Route::view('/selamatdatang','welcome');

Route::get('user/{id}', function($id) {
    return 'User '.$id;
});

Route::get('posts/{post}/comments/{comment}', function($postId,$commentId) {
    return 'ID Post = '.$postId.' with ID Comments = '.$commentId;
});

Route::get('foo1', function() {
    return 'Foo1';
})->name('namaroute');

Route::get('greeting', function() {
    return view('welcome', ['name' => 'Samantha']);
});

Route::resource('medicines','MedicineController');