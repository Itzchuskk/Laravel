<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Models\Universe;

Route::get('/', function () {
    echo 'hello guys this is my first project';
    echo '<pre>';
    print_r (Universe ::all());
    echo '<pre>';

    dump (Universe ::all());

    //return view('welcome');
=======

Route::get('/', function () {
    return view('welcome');
>>>>>>> 8ee6800abfded2f5ab15e2c4228843dea25c376d
});
