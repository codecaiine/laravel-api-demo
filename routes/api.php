<?php

use App\Http\Controllers\Api\v1\SchoolController;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function(){
    Route::apiResource('schools', SchoolController::class);
});