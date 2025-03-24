<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [HomeController::class, "index"
])->name("home");

Route::get("/menu", [MenuController::class, "index"
])->name("menu.index");

Route::get("/information", function(){
    return view("information");
})->name("information");

Route::get("/admin", [ContactController::class, "show"
])->name("admin");
