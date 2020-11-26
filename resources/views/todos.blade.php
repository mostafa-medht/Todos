@extends('layout')

@section('content')
     
    <div class="row">
        <div class="col-lg-6 m-auto">
            <form action="/create/todo" method="put">
                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" placeholder="Create a new todo">
            </form>
        </div>
    </div>
    <hr>
    @foreach ($todos as $todo)
        {{$todo->todo}}
        <hr>
    @endforeach
@endsection