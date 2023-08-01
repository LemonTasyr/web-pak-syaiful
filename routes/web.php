<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AboutController; 
use App\Http\Controllers\ProjectController; 
use App\Http\Controllers\ContactController; 

Route::get("/", [HomeController::class, "index"])->name("home_index");
Route::get("/about", [AboutController::class, "index"])->name("about_index");
Route::get("/projects", [ProjectController::class, "index"])->name("project_index");
Route::get("/contact", [ContactController::class, "index"])->name("contact_index");
