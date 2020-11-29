@extends('layout')

@section('content')
     
    <div class="row">
        <div class="col-lg-6 m-auto">
            <form action="/create/todo" method="POST">
                {{ csrf_field() }}
                <input type="text" name="todo" class="form-control input-lg" placeholder="Create a new todo">
            </form>
        </div>
    </div> 
    <hr>
    @foreach ($todos as $todo)
            {{$todo->todo}} <a href="{{ route('todo.delete' ,  ['id'=> $todo->id]) }}" class="btn btn-danger">X</a>
            <a href="{{ route('todo.update' ,  ['id'=> $todo->id]) }}" class="btn btn-light">Update </a>
            @if (!$todo->completed)
                <a href="{{route('todos.completed', ['id' => $todo->id])}}" class="btn btn-xs btn-success">&#x2714;</a>             
            @else 
               <span class="text-success">Completed!</span> 
            @endif
            <hr>
    @endforeach
@endsection