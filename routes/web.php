<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RosterController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/rosters', [RosterController::class, 'index'])->name('rosters.DutySlot');//display add/view button
Route::get('/rosters/AddDutySlot',[RosterController::class, 'index1'])->name('rosters.AddDutySlot'); //display schedule
Route::get('/rosters/UpdateDutySlot',[RosterController::class, 'index2'])->name('rosters.UpdateDutySlot'); //display list schedule
Route::post('/rosters/AddDutySlotForm', [RosterController::class, 'create'])->name('rosters.AddDutySlotForm'); //add new cashier name
Route::get('/rosters/UpdateDutySlotForm/{id}', [RosterController::class, 'edit'])->name('rosters.UpdateDutySlotForm');//edit cashier details
Route::get('/rosters/DeleteDutySlot/{id}', [RosterController::class, 'destroy'])->name('rosters.DeleteDutySlotUpdate');//delete cashier details
Route::post('/rosters/UpdateDutySlotForm/{id}', [RosterController::class, 'update'])->name('rosters.UpdateDutySlotForm');//update duty slot
Route::get('/rosters/ViewDutySlot', [RosterController::class, 'view'])->name('rosters.ViewDutySlot');//view duty slot