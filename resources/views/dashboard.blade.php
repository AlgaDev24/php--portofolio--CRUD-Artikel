@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Dashboard
                    </div>
                    <div class="card-body">
                        <h5>Welcome back, {{ Auth::user()->name }}!</h5>
                        <p>Explore your application and enjoy the features.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
