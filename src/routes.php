<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('sampleweb', 'jiit\MyPackage\MypackageController@index');