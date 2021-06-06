@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-3">
        <h1 class="text-2x1">All Your Todos</h1>
        <a href="/todos/create" class="mx-5 py-2 text-blue-400 cursor-pointer  text-white">
            <span class="fas fa-plus-circle"></span>
        </a>
    </div>
        <ul clas="my-5">
            <x-alert />
            @foreach($todos as $todo)
                <li class="flex justify-between p-3">

                    @if($todo->completed)
                    <p class="line-through">{{$todo->title}}</p>
                    @else
                    <p>{{$todo->title}}</p>
                    @endif

                    <div>
                        <a href="{{'/todos/'.$todo->id.'/edit'}}" class="mx-2 py-2 px-2 text-red-400 cursor-pointer rounded text-white">
                            <span class="fas fa-edit px-1"/>
                        </a>
                        @if ($todo->completed)
                        <span class="fas fa-check text-green-500 cursor-pointer px-2" onclick="event.preventDefault();
                        document.getElementById('form-incomplete-{{$todo->id}}')
                        .submit()"/>

                    <form style="display:none" id="{{'form-incomplete-'.$todo->id}}" method="post"
                        action="{{route('todo.incomplete', $todo->id)}}">
                        @csrf
                        @method('delete')
                    </form>

                    @else
                    <span onclick="event.preventDefault();
                        document.getElementById('form-complete-{{$todo->id}}')
                        .submit()" class="fas fa-check text-gray-300 cursor-pointer px-2"/>

                    <form style="display:none" id="{{'form-complete-'.$todo->id}}" method="post"
                        action="{{route('todo.complete', $todo->id)}}">
                    @csrf
                    @method('put')
                    </form>

                    @endif

                    </div>
                </li>
            @endforeach
        </ul>

 @endsection
