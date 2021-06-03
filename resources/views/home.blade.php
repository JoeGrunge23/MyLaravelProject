
<!--  you can check it in resources/views/layouts/-->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>


                <div class="card-body"> 
                <!-- this the resources/views/layouts/flash.blade.php -->
                <x-alert>
                    <p>Here is the response from iamge upload.</p>
                </x-alert>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image"/>
                        <input type="submit" value="Upload"/>
                    </form>
                </div>

            
            </div>
        </div>
    </div>
</div>
@endsection
