<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Todo;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));

    }

    public function create()
    {
        return view('todos.create');

    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit',compact('todo'));

    }

    public function Store(TodoCreateRequest $request)
    {
    

        Todo::create($request->all());
        return redirect()->back()->with('message', 'To do created successfully');

    }
    
}
