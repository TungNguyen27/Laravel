<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return env('MY_NAME');
});
