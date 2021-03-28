@extends('layouts.app')

@section('content')
    <div class="row justify-content-center" style="height: calc(80vh - 7px)">
        <div class="col-md-6">
            <h4 class="text-muted text-center" style="font-size: 4rem;">Tweety</h4>
            <div class="row justify-content-around">
                <div class="col-md-4 text-center">
                    <a href="/login" class="text-muted text-decoration-none" style="font-size: 2rem">Login</a>
                </div>
                <div class="col-md-4 text-center">
                    <a href="/register" class="text-muted text-decoration-none" style="font-size: 2rem">Register</a>
                </div>
            </div>
        </div>
    </div>
@endsection