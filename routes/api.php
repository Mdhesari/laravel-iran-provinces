<?php

Route::get('provinces', [Mdhesari\LaravelCountryStateCities\Http\Controllers\ProvinceController::class, 'index']);
Route::get('provinces/{province}', [Mdhesari\LaravelCountryStateCities\Http\Controllers\ProvinceController::class, 'show']);
Route::get('provinces/{province}/cities', [Mdhesari\LaravelCountryStateCities\Http\Controllers\CityController::class, 'index']);
Route::get('cities/{city}', [Mdhesari\LaravelCountryStateCities\Http\Controllers\CityController::class, 'show']);