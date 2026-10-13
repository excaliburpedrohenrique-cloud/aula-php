<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;


Route::get('/', function () {
    return view('welcome');
});

route::get("/cities", [CityController::class, "index"]);