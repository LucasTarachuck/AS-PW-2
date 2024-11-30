<?php

use App\Http\Controllers\ArtifactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('artifacts', [ArtifactController::class, 'index']);
Route::get('artifacts/create', [ArtifactController::class, 'create']);
Route::post('artifacts', [ArtifactController::class, 'store']);
Route::get('artifacts/{id}/edit', [ArtifactController::class, 'edit']);
Route::put('artifacts/{id}', [ArtifactController::class, 'update']);
Route::delete('artifacts/{id}', [ArtifactController::class, 'destroy']);