<?php

use App\Http\Controllers\MainContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', MainContentController::class) -> name('main_content.index');
