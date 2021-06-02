<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

    public function uploadAvatar(Request $request)
    {
        // $request->image->store('images', 'public');
        if ($request->hasFile('image')) {
            // This is from vendor\laravel\framework\src\Illuminate\Http\UploadedFile.php  search for getClientOriginalName 
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            // User::find(1)->update(['avatar' => $filename]);
            auth()->user()->update(['avatar' => $filename]);

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
