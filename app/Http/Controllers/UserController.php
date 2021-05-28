<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Elon', 
            'email' => 'joeriz2@mailinator.com',
            'password' => 'password',
        ];

        User::create($data);

        $user = User::all();
        return $user;

        return view('welcome');

    }
}
