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
                    <div>
                        @include('todos.completeButton')
                    </div>
                    @if($todo->completed)
                    <p class="line-through">{{$todo->title}}</p>
                    @else
                    <p>{{$todo->title}}</p>
                    @endif

                    <div>
                        <a href="{{'/todos/'.$todo->id.'/edit'}}" class="mx-2 py-2 px-2 text-red-400 cursor-pointer rounded text-white">
                            <span class="fas fa-edit px-1"/>
                        </a>

                        {{-- <a href="{{'/todos/'.$todo->id.'/edit'}}"
                            class="mx-2 py-2 px-2 text-red-500 cursor-pointer rounded text-white"
                            > --}}
                            <span class="fas fa-trash px-2  text-red-500 cursor-pointer"
                            onclick="
                            if(confirm('Do you really want to delete?')){
                                event.preventDefault();
                                document.getElementById('form-delete-{{$todo->id}}')
                                .submit()
                            }"/>
                        {{-- </a> --}}

                        <form style="display:none" id="{{'form-delete-'.$todo->id}}" method="post"
                            action="{{route('todo.delete', $todo->id)}}">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>

 @endsection
