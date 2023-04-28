<?php

use Illuminate\Support\Facades\Route;
use InShore\Bookwhen\Http\Controllers\AttachmentController;
use InShore\Bookwhen\Http\Controllers\ClassPassController;
use InShore\Bookwhen\Http\Controllers\EventController;
use InShore\Bookwhen\Http\Controllers\LocationController;
use InShore\Bookwhen\Http\Controllers\TicketController;

Route::get('/', [BookwhenController::class, 'index'])->name('index');
Route::get('/attachments', [AttachmentController::class, 'index'])->name('attachments.index');
Route::get('/attachments/{attachment}', [AttachmentController::class, 'show'])->name('attachments.show');
Route::get('/class-passes', [ClassPassController::class, 'index'])->name('class-passes.index');
Route::get('/class-passes/{class-pass}', [ClassPassController::class, 'index'])->name('class-passes.index');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
Route::get('/locations/{location}', [LocationController::class, 'show'])->name('locations.show');
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
