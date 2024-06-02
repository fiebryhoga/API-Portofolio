<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\BlogContentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTagController;
use App\Http\Controllers\ReferenceContentController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

// Biodata routes
Route::resource('biodatas', BiodataController::class);

// Blog routes
Route::resource('blogs', BlogController::class);

// Blog Content routes
Route::resource('blogContents', BlogContentController::class);

// Project routes
Route::resource('projects', ProjectController::class);

// Project Tag routes
Route::resource('projectTags', ProjectTagController::class);

// Reference routes
Route::resource('references', ReferenceController::class);

// Reference Content routes
Route::resource('referenceContents', ReferenceContentController::class);

// Tool routes
Route::resource('tools', ToolController::class);
