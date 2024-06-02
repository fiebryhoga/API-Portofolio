<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\BlogContentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectTagController;
use App\Http\Controllers\ProjectController;


use App\Http\Controllers\ReferenceContentController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ToolController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/blogcontents', [BlogContentController::class, 'index']);
Route::post('/blogcontents', [BlogContentController::class, 'store']);
Route::get('/blogcontents/{id}', [BlogContentController::class, 'show']);
Route::put('/blogcontents/{id}', [BlogContentController::class, 'update']);
Route::delete('/blogcontents/{id}', [BlogContentController::class, 'destroy']);

Route::get('/projects', [ProjectController::class, 'index']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
Route::put('/projects/{id}', [ProjectController::class, 'update']);
Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

Route::get('/project-tags', [ProjectTagController::class, 'index']);
Route::post('/project-tags', [ProjectTagController::class, 'store']);
Route::get('/project-tags/{id}', [ProjectTagController::class, 'show']);
Route::put('/project-tags/{id}', [ProjectTagController::class, 'update']);
Route::delete('/project-tags/{id}', [ProjectTagController::class, 'destroy']);




// Reference routes
Route::get('/references', [ReferenceController::class, 'index']);
Route::post('/references', [ReferenceController::class, 'store']);
Route::get('/references/{id}', [ReferenceController::class, 'show']);
Route::put('/references/{id}', [ReferenceController::class, 'update']);
Route::delete('/references/{id}', [ReferenceController::class, 'destroy']);

// Reference Content routes
Route::get('/referencecontents', [ReferenceContentController::class, 'index']);
Route::post('/referencecontents', [ReferenceContentController::class, 'store']);
Route::get('/referencecontents/{id}', [ReferenceContentController::class, 'show']);
Route::put('/referencecontents/{id}', [ReferenceContentController::class, 'update']);
Route::delete('/referencecontents/{id}', [ReferenceContentController::class, 'destroy']);

// Tool routes
Route::get('/tools', [ToolController::class, 'index']);
Route::post('/tools', [ToolController::class, 'store']);
Route::get('/tools/{id}', [ToolController::class, 'show']);
Route::put('/tools/{id}', [ToolController::class, 'update']);
Route::delete('/tools/{id}', [ToolController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
