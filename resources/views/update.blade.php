@extends('layout')

@section('content')
     
    <div class="row">
        <div class="col-lg-12 m-auto">
            <form action="{{route('todos.save', ['id' => $todo->id])}}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="todo" value="{{$todo->todo}}" class="form-control input-lg" placeholder="Create a new todo">
            </form>
        </div>
    </div> 
    <hr>
    
@endsection