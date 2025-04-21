<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('about', function () {
    return view('pages.about');
});

Route::get('matches', function () {
    return view('pages.matches');
});
Route::get('ranking', function () {
    return view('pages.ranking');
});
Route::get('news', function () {
    return view('pages.news');
});
Route::get('teams', function () {
    return view('pages.teams');
});
Route::get('newpage', function () {
    return view('pages.newpage');
});
