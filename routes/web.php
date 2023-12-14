<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/events/{category}', [App\Http\Controllers\HomeController::class, 'eventsByCategory'])->name('events.category');
Route::get('/event/{eventId}', [App\Http\Controllers\HomeController::class, 'event'])->name('event');

Route::get('/home', function(){
    return view('home');
})->middleware('auth');

Route::get('/admin/categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('admin.categories.index');
Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoriesController::class, 'store'])->name('admin.categories.store');
Route::post('/admin/categories/{categoryId}/update', [App\Http\Controllers\Admin\CategoriesController::class, 'update'])->name('admin.categories.update');
Route::delete('/admin/categories/{categoryId}/delete', [App\Http\Controllers\Admin\CategoriesController::class, 'delete'])->name('admin.categories.delete');

Route::get('/admin/events', [App\Http\Controllers\Admin\EventsController::class, 'index'])->name('admin.events.index');
Route::post('/admin/events/store', [App\Http\Controllers\Admin\EventsController::class, 'store'])->name('admin.events.store');
Route::post('/admin/events/{eventId}/update', [App\Http\Controllers\Admin\EventsController::class, 'update'])->name('admin.events.update');
Route::delete('/admin/events/{eventId}/delete', [App\Http\Controllers\Admin\EventsController::class, 'delete'])->name('admin.events.delete');

Auth::routes();




