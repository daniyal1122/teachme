<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/signup', function () {
    return view('pages.signup');
});
Route::get('/signup', function () {
    return view('pages.student');
});
Route::get('/teacher', function () {
    return view('pages.teacher');
});
Route::get('/tutiondetail', function () {
    return view('pages.tutiondetail');

});
Route::get('/tutionposting', function () {
    return view('pages.tutionposting');
});
Route::get('/userlist', function () {
    return view('pages.userlist');
});
Route::get('/index', function () {
    return view('master.index');
});
Route::get('/tutions', function () {
    return view('pages.tutions');
});
