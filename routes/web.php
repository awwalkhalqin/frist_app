<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/tabung', function () {
    return view('tabung');
});

Route::get('/bola', function () {
    return view('bola');
});

Route::get('/kerucut', function () {
    return view('kerucut');
});

Route::get('/forms', 'formController@index');
Route::post('/proses', 'formController@proses');

// Route::post('/calculator', 'CalculatorController@index');

Route::get('/banguntabung', "RumusController@tabung");
Route::get('/bangunbola', "RumusController@bola");
Route::get('/bangunkerucut', "RumusController@kerucut");
