<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ArticleController;
use Illuminate\Foundation\Providers\ArtisanServiceProvider;
use App\Http\Controllers\AnswerController;

Route::get('/', [ArticleController::class, 'index']);
Route::get('/answers', [AnswerController::class, 'index']);
Route::post('/submit', [ArticleController::class, 'submit']);
