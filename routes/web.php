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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/detail-project', function () {
    return view('detail-project');
})->name('detail-project');

Route::get('/business-model', function () {
    return view('business-model');
})->name('business-model');

Route::get('/assignment', function () {
    return view('assignment');
})->name('assignment');

Route::get('/upload-assignment', function () {
    return view('upload-assignment');
})->name('upload-assignment');

Route::get('/deliverable', function () {
    return view('deliverable');
})->name('deliverable');

Route::get('/upload-deliverable', function () {
    return view('upload-deliverable');
})->name('upload-deliverable');

Route::get('/materi', function () {
    return view('materi');
})->name('materi');

Route::get('/upload-materi', function () {
    return view('upload-materi');
})->name('upload-materi');

Route::get('/video-mentoring', function () {
    return view('video-mentoring');
})->name('video-mentoring');

Route::get('/upload-video-mentoring', function () {
    return view('upload-video-mentoring');
})->name('upload-video-mentoring');

Route::get('/kanban', function () {
    return view('kanban');
})->name('kanban');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

Route::get('/ask-forum', function () {
    return view('ask-forum');
})->name('ask-forum');

Route::get('/add-failure-story', function () {
    return view('add-failure-story');
})->name('add-failure-story');

Route::get('/create-task', function () {
    return view('create-task');
})->name('create-task');

Route::get('/create-deliverable', function () {
    return view('create-deliverable');
})->name('create-deliverable');

Route::post('/dropzone', 'DropzoneController@dropzone')->name('dropzone');

