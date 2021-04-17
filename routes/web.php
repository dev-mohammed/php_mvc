<?php


use App\Controllers\HomeController;
use phpMvc\Http\Route;

Route::get('/', [HomeController::class , 'index']);
