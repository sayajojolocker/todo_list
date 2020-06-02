
@extends('layout')


@section('title')
TODOLIST
@endsection

@section('contents')

    <form>
        <div class="input-group">
            <div class="input-group-append">
                <input type="submit" class="btn btn-secondary" value="追加">
            </div>
            <input type="text" name="todo" value="">
        </div>
        <div>
            @foreach ($todolist as $item)
                <li>{{ $item['todo'] }}</li>
            @endforeach
        </div>
    </form>


@endsection



