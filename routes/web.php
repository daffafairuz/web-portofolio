<?php

use App\Http\Controllers\MainContentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchievmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', MainContentController::class) -> name('main_content.index');
Route::get('/about', [AboutController::class, 'show']) -> name('about.index');
Route::get('/achievment', [AchievmentController::class, 'show']) -> name('achievment.index');
