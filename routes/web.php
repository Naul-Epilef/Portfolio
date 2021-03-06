<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CalculatorsController;

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

Route::get('/', [HomeController::class, "lists"])->name("home");

Route::get("/calc", [CalculatorsController::class, "index"])->name("calculators.index");

Route::get("/calc/regra-de-tres", [CalculatorsController::class, "rulesOfThree"])->name("calculators.rulesOfThree");
