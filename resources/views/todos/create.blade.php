 @extends('todos.layout')

 @section('content')


 <div class="flex justify-between border-b pb-4 px-3">
    <h1 class="text-2x1">What next you need To-DO</h1>
    <a href="{{route('todo.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer  text-white">
        <span class="fas fa-arrow-left"></span>
    </a>
</div>

    <x-alert />
    <form action="{{route('todo.store')}}" method="post" class="py-5">
        @csrf

        <div class="py-1">
        <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="Title"/>
        </div>

        <div class="py-1">
        <textarea name="description" class="p-2 rounded border" placeholder="Description"></textarea>
        </div>

        <div class="py-2">
            <div class="flex justify-center pb-4 px-4">
                <h2 class="text-lg pb-4"> Add steps if required</h2>
                <span class="fas fa-plus px-2 py-2 cursor-pointer"></span>
             </div>
            <input type="text" name="step" class="p-2  px-2 rounded border" placeholder="Describe Step"/>
        </div>

        <div class="py-1">
        <input type="submit" value="Create" class="p-2 border rounded">
        </div>
    </form>
    <livewire:counter />

@endsection
