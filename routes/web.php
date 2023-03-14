<?php

use App\Http\Controllers\DocumentController;
use App\Models\Document;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index', [
//         'name' => 'Abu',
//         'workplace' => 'Kementerian Sumber Manusia',
//     ]);
    // // return view('welcome');
    // // $x = 2;
    // // $y = $x * 2;
    // // return $x + $y;

    // // view()
    // // inertia()
    // //livewire()

    // return $data;
// });

Route::get('/', [DocumentController::class, 'index'])->name('document.index');
Route::delete('documents/{document}', [DocumentController::class, 'destroy'])->name('document.delete');
Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
Route::post('document/store', [DocumentController::class, 'store'])->name('document.store');
Route::get('document/edit/{document}', [DocumentController::class, 'edit'])->name('document.edit');
Route::patch('document/update/{document}', [DocumentController::class, 'update'])->name('document.update');

// Route::method('url',response);
// response => function, controller,
