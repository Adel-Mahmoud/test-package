<?php

use Illuminate\Support\Facades\Route;
use Test\TestPackage\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);
