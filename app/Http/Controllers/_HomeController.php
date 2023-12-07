<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class _HomeController extends Controller
{
    //---- SINGLE ACTION CONTROLLER FUNGSINYA HANYA UNTUK MELAKUKAN SATU PERINTAH DARI CONTROLLER TSB ---//
    public function __invoke(Request $request)
    {
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