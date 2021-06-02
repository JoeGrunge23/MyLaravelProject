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
            // This is from vendor\laravel\framework\src\Illuminate\Http\UploadedFile.php  search for getClientOriginalName 
            $filename = $request->image->getClientOriginalName();
            if (auth()->user()->avatar)
            {
                // This will delete the image in 
                Storage::delete('/public/images/' . auth()->user()->avatar);
            }
            $request->image->storeAs('images', $filename, 'public');
            auth()->user()->update(['avatar'=> $filename]);
            // User::find(1)->update(['avatar' => $filename]);

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
