<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Auth\GenericUser;
Route::view('/', 'welcome');
Route::view('qr-generator', 'views.qr')->name('qr');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('public_meeting', [\App\Http\Controllers\BigBlueButtonController::class, 'public'])->name('public_meeting');

Route::post('/custom/broadcast/auth/route', function () {
    $user = request()->user() ?? new GenericUser(['id' => microtime()]);
    request()->setUserResolver(function () use ($user) {
        return $user;
    });
    return Broadcast::auth(request());
});