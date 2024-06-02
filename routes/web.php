<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\BlogContentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectTagController;
use App\Http\Controllers\ProjectController;


use App\Http\Controllers\ReferenceContentController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

// Biodata Routes
Route::resource('biodatas', BiodataController::class);

// Blog Routes
Route::resource('blogs', BlogController::class);

// BlogContent Routes
Route::resource('blog-contents', BlogContentController::class);

// Project Routes
Route::resource('projects', ProjectController::class);
Route::resource('project-tags', ProjectTagController::class);


// Reference Routes
Route::resource('references', ReferenceController::class);

// ReferenceContent Routes
Route::resource('reference-contents', ReferenceContentController::class);

// Tool Routes
Route::resource('tools', ToolController::class);

Route::get('/', function () {
    return view('welcome');
});
