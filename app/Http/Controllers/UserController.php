<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function uploadAvatar(Request $request)
    {
        // $request->image->store('images', 'public');
        if ($request->hasFile('image')) {
            User::uploadAvatar($request->image);

        }
        return redirect()->back();
    }

    public function index()
    {
        // $data = [
        //     'name' => 'Elon', 
        //     'email' => 'joeriz3@mailinator.com',
        //     'password' => 'password',
        // ];

        // User::create($data);

        // $user = User::all();
        // return $user;

        return view('welcome');

    }
}
