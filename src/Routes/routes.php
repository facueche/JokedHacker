<?php

use Illuminate\Support\Facades\Route;
use DebianMoor\JokedHacker\Controllers\RedirectController;

Route::get('env', [RedirectController::class, 'handle'])->name('joked.hacker.redirect');
Route::get('.env', [RedirectController::class, 'handle'])->name('joked.hacker.redirect');
Route::get('admin', [RedirectController::class, 'handle'])->name('joked.hacker.redirect');
Route::get('admin.php', [RedirectController::class, 'handle'])->name('joked.hacker.redirect');
Route::get('wp-admin', [RedirectController::class, 'handle'])->name('joked.hacker.redirect');
Route::get('wp-admin.php', [RedirectController::class, 'handle'])->name('joked.hacker.redirect');
