<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::get('/data', [DataController::class, 'index']);
    Route::get('/data/groups', [DataController::class, 'groupList']);
    Route::get('/data/students', [DataController::class, 'studentList']);
});
