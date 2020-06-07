@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@endsection

@section('title')
    TODOLIST
@endsection

@section('contents')

    <form method="post" action={{route('create')}}>
        @csrf
        <div class="input-group">
            <div class="input-group-append">
                <input type="submit" class="btn btn-secondary" value="追加">
            </div>
            <input type="text" name="todo" value="">
        </div>
    </form>
    @if (session('error'))
        <p class="text-danger mt-3">
            {{ session('error') }}
        </p>
    @endif

    <form method="post">
        @csrf
        <div>
            <input type="submit" class="btn btn-danger" value="削除" formaction={{route('delete')}}>
            <input type="submit" class="btn btn-warning" value="完了" formaction={{route('finish')}}>
            <input type="submit" class="btn btn-info" value="完了取消" formaction={{route('refinish')}}>
            @foreach ($todolist as $item)
                <li><input type="checkbox" name="select_todo[]" value={{$item['id']}}>@if($item['finished'] == 1)<del>@endif{{ $item['todo'] }}@if($item['finished'] == 1)</del>@endif</li>
            @endforeach
        </div>
    </form>

@endsection



