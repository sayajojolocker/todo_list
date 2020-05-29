<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        $number_list = range(0, 100, 10);
        return view('welcome', ['name' => 'chanman',
            'address' => 'oosakahu',
            'list' => $number_list
        ]);

    }

    public function test()
    {
        return view('index');
    }
}
