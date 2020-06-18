<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodo;
use App\Http\Requests\DeleteTodo;
use App\Http\Requests\DoneTodo;
use App\Http\Requests\RestoreTodo;
use App\Models\Todos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;

class TodoController extends Controller
{
    //
    public function index()
    {
        $todolist = Todos::all();
        return view('index', compact('todolist'));
    }

    public function create(CreateTodo $request)
    {
        $todo = $request->input('todo');

        Todos::create(compact('todo'));
        return redirect(\route('index'));
    }

    public function delete(DeleteTodo $request)
    {
        $todoList = $request->input('select_todo');

        $list = Todos::whereIn('id', $todoList);
        $list->delete();

        return redirect(\route('index'));
    }

    public function done(DoneTodo $request)
    {
        $todoList = $request->input('select_todo');

        $list = Todos::whereIn('id', $todoList);
        $list->update(['completed_at' => date('Y-m-d')]);
        return redirect(\route('index'));
    }

    public function restore(RestoreTodo $request)
    {
        $todoList = $request->input('select_todo');

        $list = Todos::whereIn('id', $todoList);
        $list->update(['completed_at' => null]);
        return redirect(\route('index'));
    }

}
