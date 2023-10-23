<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',function(){
    $blogs = [
        [
            'title' => 'Title One',
            'body' => 'this is a body',
        ],
        [
            'title' => 'Title two',
            'body' => 'this is a body',
        ],
        [
            'title' => 'Title Three',
            'body' => 'this is a body',
        ],
        [
            'title' => 'Title Four',
            'body' => 'this is a body',
        ],
        [
            'title' => 'Kontollll',
            'body' => 'this is a kontol',
        ]
        ];
    return view('home',compact('blogs'));
});

Route::get('/about',function(){
    return view('about');
})->name('about');

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