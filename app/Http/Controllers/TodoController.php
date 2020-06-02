<?php

namespace App\Http\Controllers;

use App\Models\Todolists;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TodoController extends Controller
{
    //
    public function index()
    {
        //$users = User::where('email','like','%@example.org')->orderBy('id','desc')->get();
//        $user = User::find(11);
//        $user->delete();
//        dd($user);
//
//
//        $number_list = range(0, 100, 10);
//        return view('welcome', ['name' => 'chanman',
//            'address' => 'oosakahu',
//            'list' => $number_list
//        ]);

        $todo_list = Todolists::all();
        return view('index', ['todolist' => $todo_list]);
    }

    public function test()
    {
        return view('index');
    }
}
