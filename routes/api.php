<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\YesNoOptionController;


Route::middleware('auth:sanctum')->group(function () {
	Route::apiResources([
		'yesnooption' => YesNoOptionController::class,
	]);
});

