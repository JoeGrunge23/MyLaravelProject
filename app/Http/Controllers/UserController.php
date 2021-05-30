<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
=======
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
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
>>>>>>> 5c3b9836238cc2eb4550c93aa5e8a85fabb2f0a6
}
