<?php

use App\Http\Controllers\Api\v1\SkillController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function() {
    Route::apiResource('skills', SkillController::class);
});
