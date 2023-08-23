<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

Route::get("/", [HomeController::class, "index"])->name("home_index");
Route::get("/about", [AboutController::class, "index"])->name("about_index");
Route::get("/projects", [ProjectController::class, "index"])->name("project_index");
Route::get("/contact", [ContactController::class, "index"])->name("contact_index");

Route::get("/admin/dashboard", [SiswaController::class, "dashboard"])->name("dashboard");
Route::get("/admin/siswa", [SiswaController::class, "siswa"])->name("siswa");
