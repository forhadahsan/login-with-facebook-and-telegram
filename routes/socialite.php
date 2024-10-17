<?php 



use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacebookController;


Route::get('/auth/facebook/redirect', [FacebookController::class, 'redirect'])->name('facebook.redirect');
 
Route::get('/auth/facebook/callback',[FacebookController::class, 'callback'])->name('facebook.callback');


Route::get('/auth/telegram/redirect',[FacebookController::class, 'telegramredirect'])->name('telegram.redirect');
Route::get('/auth/telegram/callback',[FacebookController::class, 'telegramcallback'])->name('telegram.callback');