<?php

use App\Http\Livewire\Crud;
use App\Http\Livewire\Banco;
use App\Http\Livewire\Forms;
use App\Http\Livewire\Events;
use App\Http\Livewire\Actions;
use App\Http\Livewire\Loading;
use App\Http\Livewire\FullPage;
use App\Http\Livewire\Properties;
use App\Http\Livewire\Databinding;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('fullpage', FullPage::class)->name('fullpage');
Route::get('properties', Properties::class)->name('properties');
Route::get('databinding', Databinding::class)->name('databinding');
Route::get('actions', Actions::class)->name('actions');
Route::get('bancos', Banco::class)->name('bancos');
Route::get('events', Events::class)->name('events');
Route::get('forms', Forms::class)->name('forms');
Route::get('loading', Loading::class)->name('loading');
Route::get('crud', Crud::class)->name('crud');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
