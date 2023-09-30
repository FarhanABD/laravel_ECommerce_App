<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('about',function(){
//     return "<h1>About Page</h1>";
// })->name('about');

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