<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stdData;


// Route::get('/w', [stdData::class, "w"]);
// Route::get('/a', [stdData::class, "a"]);
// Route::get('/f', [stdData::class, "f"]);

// Route::controller(stdData::class)->group(function(){
//     Route::get('/w' , 'w');
//     Route::get('/a' , 'a');
//     Route::get('/f' , 'f');
// });     


// Route::get( '/w', function() {
//     return view('welcome');
// });
// Route::get( '/a', function() {
//     return view('about');
// });


Route::get('/w', [stdData::class, 'welcome']);
Route::get('/form', [stdData::class, 'form']);
Route::post('/create', [stdData::class, 'create']);
Route::get('/read', [stdData::class, 'read']);


Route::get('/rem{id}', [stdData::class, 'del'])->name('remove');
Route::get('/edit/{id}', [stdData::class, 'edit'])->name('edit');
Route::post('/update/{update_id}', [stdData::class, 'update'])->name('update');



