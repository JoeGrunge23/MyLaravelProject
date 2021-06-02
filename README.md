UPDATED COMMIT NOTES: 
1.  added  $table->string('avatar')->nullable(); in database\migrations\2014_10_12_000000_create_users_table.php
2.run php artisan migrate:fresh to add in database
 
3. added Route::post('/upload', [UserController::class, 'uploadAvatar']); 


4. created uploadAvatar function \app\Http\Controllers

    public function uploadAvatar(Request $request)
    {
        $request->image->store('images', 'public');
        return "uploaded";
    }
5.  added app/Models/User.php

  protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];
6.  added  $table->string('avatar')->nullable(); in database\migrations\2014_10_12_000000_create_users_table.php

7. run php artisan migrate:fresh 
8. added this is app\Http\Controllers\UserController.php 

        // $request->image->store('images', 'public');
        if ($request->hasFile('image')) {
            // This is from vendor\laravel\framework\src\Illuminate\Http\UploadedFile.php  search for getClientOriginalName 
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            // User::find(1)->update(['avatar' => $filename]);
            auth()->user()->update(['avatar' => $filename]);

        }
        return redirect()->back();
9. updated resources\views\layouts\ app.blade.php with this: 

       <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <img src="{{asset('/storage/images/'.Auth::user()->avatar)}}" alt="avatar" width="40">
                                </a>

10. run php artisan storage:link


NOTE FOR IMPORTING: 

1.  composer create-project laravel/laravel  mylaravelproject  --prefer-dist
2.  run composer require laravel/ui (make sure that nodejs is installed in your system) 
3. Enter  php artisan make:controller UserController  
4. run php artisan storage:link