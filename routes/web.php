<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ajouter', [TemplateController::class, 'PageAjouter']);
Route::post('/AjouterBe', [TemplateController::class, 'Ajouter']);
Route::get('/Liste', [TemplateController::class, 'Liste']);
Route::get('/pdf/{id}',[TemplateController::class, 'generatePDF']);
Route::get('/PagePDF/{id}', [TemplateController::class, 'PagePDF']);

Route::get('/update/{id}',[TemplateController::class, 'Update']);
Route::post('/UpdateConfirme',[TemplateController::class, 'UpdateConfirme']);
