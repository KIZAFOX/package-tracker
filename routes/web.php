<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $packageCount = 10;

    return view('welcome',
        ['packageCount' => $packageCount]
    );
});
