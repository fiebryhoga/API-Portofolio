<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\BlogContentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTagController;
use App\Http\Controllers\ReferenceContentController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ToolController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// API routes
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Biodata routes
Route::get('/biodatas', [BiodataController::class, 'index']);
Route::post('/biodatas', [BiodataController::class, 'store']);
Route::get('/biodatas/{id}', [BiodataController::class, 'show']);
Route::put('/biodatas/{id}', [BiodataController::class, 'update']);
Route::delete('/biodatas/{id}', [BiodataController::class, 'destroy']);

// Blog routes
Route::get('/blogs', [BlogController::class, 'index']);
Route::post('/blogs', [BlogController::class, 'store']);
Route::get('/blogs/{id}', [BlogController::class, 'show']);
Route::put('/blogs/{id}', [BlogController::class, 'update']);
Route::delete('/blogs/{id}', [BlogController::class, 'destroy']);

// Blog Content routes
Route::get('/blogContents', [BlogContentController::class, 'index']);
Route::post('/blogContents', [BlogContentController::class, 'store']);
Route::get('/blogContents/{id}', [BlogContentController::class, 'show']);
Route::put('/blogContents/{id}', [BlogContentController::class, 'update']);
Route::delete('/blogContents/{id}', [BlogContentController::class, 'destroy']);

// Project routes
Route::get('/projects', [ProjectController::class, 'index']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
Route::put('/projects/{id}', [ProjectController::class, 'update']);
Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

// Project Tag routes
Route::get('/projectTags', [ProjectTagController::class, 'index']);
Route::post('/projectTags', [ProjectTagController::class, 'store']);
Route::get('/projectTags/{id}', [ProjectTagController::class, 'show']);
Route::put('/projectTags/{id}', [ProjectTagController::class, 'update']);
Route::delete('/projectTags/{id}', [ProjectTagController::class, 'destroy']);

// Reference routes
Route::get('/references', [ReferenceController::class, 'index']);
Route::post('/references', [ReferenceController::class, 'store']);
Route::get('/references/{id}', [ReferenceController::class, 'show']);
Route::put('/references/{id}', [ReferenceController::class, 'update']);
Route::delete('/references/{id}', [ReferenceController::class, 'destroy']);

// Reference Content routes
Route::get('/referenceContents', [ReferenceContentController::class, 'index']);
Route::post('/referenceContents', [ReferenceContentController::class, 'store']);
Route::get('/referenceContents/{id}', [ReferenceContentController::class, 'show']);
Route::put('/referenceContents/{id}', [ReferenceContentController::class, 'update']);
Route::delete('/referenceContents/{id}', [ReferenceContentController::class, 'destroy']);

// Tool routes
Route::get('/tools', [ToolController::class, 'index']);
Route::post('/tools', [ToolController::class, 'store']);
Route::get('/tools/{id}', [ToolController::class, 'show']);
Route::put('/tools/{id}', [ToolController::class, 'update']);
Route::delete('/tools/{id}', [ToolController::class, 'destroy']);
