<?php

use App\Http\Controllers\API\YesNoOptionController;

use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
// Route::middleware('auth:sanctum')->group(function () {
	Route::apiResources([
		'yesnooption' => YesNoOptionController::class,
	]);
});

