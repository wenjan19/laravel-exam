<?php
use App\Http\Controllers\FeatureController;

Route::get('/features', [FeatureController::class, 'index']);
