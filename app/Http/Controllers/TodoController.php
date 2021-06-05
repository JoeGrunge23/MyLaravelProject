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
        return view('todos.index')->with(['todos' => $todos]);

    }

    public function create()
    {
        return view('todos.create');

    }

    public function edit()
    {
        return view('todos.edit');

    }

    public function Store(TodoCreateRequest $request)
    {
    

        Todo::create($request->all());
        return redirect()->back()->with('message', 'To do created successfully');

    }
    
}
