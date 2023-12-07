<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //------ DEKLARASIKAN NAMA FUNCTION DALAM SETIAP PEMBUATAN CONTROLLER ------//
    public function index(){
        $blogs = [
            [
                'title' => 'Title One',
                'body' => 'this is a body',
                'status' => 1,
                'kondisi' => 'benar'
            ],
            [
                'title' => 'Title two',
                'body' => 'this is a body',
                'status' => 0,
                'kondisi' => 'salah'
            ],
            [
                'title' => 'Title Three',
                'body' => 'this is a body',
                'status' => 1,
                'kondisi' => 'benar'
            ],
            [
                'title' => 'Title Four',
                'body' => 'this is a body',
                'status' => 1,
                'kondisi' => 'benar'
            ],
            [
                'title' => 'Kontollll',
                'body' => 'this is a kontol',
                'status' => 0,
                'kondisi' => 'salah'
            ]
            ];
        return view('home',compact('blogs'));
    
    }
}