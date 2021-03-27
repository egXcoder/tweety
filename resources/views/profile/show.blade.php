@extends('layouts.home_layout')


@section('main')
<header>
    <div class="position-relative">
        <img src="https://d25yuvogekh0nj.cloudfront.net/2019/08/Twitter-Banner-Size-Guide-blog-banner-1250x500.png"
            style="width:100%;height:300px" alt="">

        <div class="position-absolute" style="left:50%;transform:translateX(-50%);top:50%;">
            <img class="rounded-circle" src="{{$user->image_url}}" style="width:200px;height:200px;" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-between mt-2">
        <div>
            <h2>{{$user->name}}</h2>
            <h2>{{$user->label}}</h2>
        </div>

        <div class="d-flex align-items-center">
            @can('edit',$user)
            <a href="{{route('profile.edit',$user->identifier)}}" class="btn btn-light shadow-sm px-4">Edit Profile</a>
            @endcan

            @can('follow',$user)
            <form action="{{route('profile.toggle_follow',$user->identifier)}}" method="POST">
                @csrf
                @if(auth()->user()->isFollowing($user))
                <button class="btn btn-primary px-4">UnFollow Me</button>
                @else
                <button class="btn btn-primary px-4">Follow Me</button>
                @endif
            </form>
            @endcan
        </div>
    </div>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        Esse, fuga hic? Optio, earum. Nam ad alias rerum. Quibusdam, reiciendis?
        Iure corrupti earum blanditiis reiciendis in atque iusto, optio eum omnis?</p>
</header>

@include('_tweets',[
'tweets'=>$user->tweets
])

@endsection