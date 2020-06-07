<?php

namespace App\Http\Controllers;

use App\Models\Todolists;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;

class TodoController extends Controller
{
    //
    public function index()
    {
        $todolist = Todolists::all();
        return view('index', ['todolist' => $todolist]);
    }

    public function create(Request $request)
    {
        $todo = $request->input('todo');
        if (!$todo) {
            return redirect()->route('index')->with('error', '追加するtodoを入力してください。');
        }

        Todolists::create(['todo' => $todo]);
        return redirect(\route('index'));
    }

    public function delete(Request $request)
    {
        $todo_list = $request->input('select_todo');
        if (count($todo_list) == 0) {
            return redirect()->route('index')->with('error', '削除するtodoを選択してください。');
        }
        $list = Todolists::whereIn('id', $todo_list);
        $list->delete();

        return redirect(\route('index'));
    }

    public function finish(Request $request)
    {
        $todo_list = $request->input('select_todo');
        if (count($todo_list) == 0) {
            return redirect()->route('index')->with('error', '完了するtodoを選択してください。');
        }
        $list = Todolists::whereIn('id', $todo_list);
        $list->update(['finished' => 1]);
        return redirect(\route('index'));
    }

    public function refinish(Request $request)
    {
        $todo_list = $request->input('select_todo');
        if (count($todo_list) == 0) {
            return redirect()->route('index')->with('error', '完了を取り消しするtodoを選択してください。');
        }
        $list = Todolists::whereIn('id', $todo_list);
        $list->update(['finished' => 0]);
        return redirect(\route('index'));
    }

}
