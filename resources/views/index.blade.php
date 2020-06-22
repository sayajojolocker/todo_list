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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('error'))
        <p class="text-danger mt-3">
            {{ session('error') }}
        </p>
    @endif

    <form method="post">
        @csrf
        <div>
            <input type="submit" class="btn btn-danger" value="削除" formaction={{route('delete')}}>
            <input type="submit" class="btn btn-warning" value="完了" formaction={{route('done')}}>
            <input type="submit" class="btn btn-info" value="完了取消" formaction={{route('restore')}}>
            @foreach ($todolist as $item)
                <li><input type="checkbox" name="todoIds[]" value={{$item['id']}}>@if(isset($item['completed_at']))<del>@endif{{ $item['todo'] }}@if(isset($item['completed_at']))</del>@endif</li>
            @endforeach
        </div>
    </form>

@endsection



