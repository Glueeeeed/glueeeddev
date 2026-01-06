<?php

use App\Http\Controllers\CryptoController;
use Illuminate\Support\Facades\Route;
use App\Livewire\App as AppComponent;

Route::get('/', AppComponent::class);
Route::get('/generateKey', [CryptoController::class, 'generateSecrets']);


