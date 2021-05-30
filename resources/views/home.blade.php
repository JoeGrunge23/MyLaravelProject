<<<<<<< HEAD
=======

<!--  you can check it in resources/views/layouts/-->
>>>>>>> 5c3b9836238cc2eb4550c93aa5e8a85fabb2f0a6
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
<<<<<<< HEAD
=======


                <div class="card-body">
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image"/>
                        <input type="submit" value="Upload"/>
                    </form>
                </div>

            
>>>>>>> 5c3b9836238cc2eb4550c93aa5e8a85fabb2f0a6
            </div>
        </div>
    </div>
</div>
@endsection
