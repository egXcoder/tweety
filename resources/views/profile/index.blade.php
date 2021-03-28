@extends('layouts.home_layout')


@section('main')
    <h2>Explore People</h2>
    @foreach($users as $user)
    <div class="my-2 shadow p-4">
        <a href="{{route('profile.show',$user->identifier)}}" class="text-reset text-decoration-none ">
            <div class="row align-content-center flex-nowrap">
                <img src="{{$user->image_url}}" alt="" style="width:50px;height:50px" class="rounded-circle mx-2 mx-md-4">
                <div>
                    <h4>{{$user->name}}</h4>
                    <p class="text-muted">{{$user->description}}</p>
                </div>
            </div>
        </a>
    </div>
    @endforeach
    {{$users->links()}}
@endsection