<?php

use App\Http\Controllers\_HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', [HomeController::class,'index']);
Route::get('/home', _HomeController::class);

Route::get('/about',[AboutController::class, 'index']
)->name('about');

Route::resource('blog',BlogController::class);

// Route::get('about',function(){
//     $about = "This is About Page";
//     $about2 = "Jancok";
//     return view('about.index', compact('about','about2'));
//     //COMPACT FUNCTION BERFUNGSI UNTUK MEMANGGIL VARIABLE ABOUT 
//     //DAN MEMBERINYA AKSES UNTUK DIGUNAKAN
//     //DI HALAMAN ABOUT
// });

// Route::get('contact',function(){
//     return "<h1>Contact Page</h1>";
// });

// Route::get('contact/{id}',function($id){
//     return $id;
// });

// Route::get('home',function(){
//     return "<a href='*.route('about').*'>About</a>";
// });

//---- ROUTE GROUPING CUSTOMER -----//
Route::group(['prefix' => 'customer'], function(){
    Route::get('/', function(){
        return '<h1>Customer List<\h1>';
    });
    Route::get('/create', function(){
        return '<h1>Customer create<\h1>';
    });
    Route::get('/create', function(){
        return '<h1>Customer show<\h1>';
    });
});

//--- ROUTE METHODS -------//
//--- GET - Request a resource //
//--- POST - Create a new resource //
//--- PUT - Update a resource //
//--- DELETE - Delete a resource //

//----------- ROUTE FALLBACK ---------//
Route::fallback(function(){
    return "Route not exist";
});