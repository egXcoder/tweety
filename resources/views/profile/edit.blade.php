@extends('layouts.home_layout')


@section('main')
<div class="position-relative mb-5">
    <img src="{{auth()->user()->cover_url??'https://d25yuvogekh0nj.cloudfront.net/2019/08/Twitter-Banner-Size-Guide-blog-banner-1250x500.png'}}"
        style="width:100%;height:300px" alt="">
    <div class="position-absolute" style="left:50%;transform:translateX(-50%);top:50%;">
        <img class="rounded-circle"
            src="{{auth()->user()->image_url??'https://frspros.com/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg'}}"
            style="width:200px;height:200px;" alt="">
    </div>
    <h2>{{auth()->user()->name}} <span class="text-muted" style="font-size: 1rem;">Joined
            {{auth()->user()->created_at->diffForHumans()}}</span></h2>
</div>

<hr>
<form action="" method="POST">
    @method('put')
    @csrf
    <h3>Update Profile</h3>
    <div class="form-group  @error('image') is-invalid @enderror">
        <label for="image">Avatar</label>
        <div class="d-flex justify-content-between">
            <input id="image" name="image" type="file" class="form-control @error('image') is-invalid @enderror">
            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message}}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group @error('cover') is-invalid @enderror">
        <label for="cover">Cover</label>
        <input id="cover" name="cover" type="file" class="form-control @error('cover') is-invalid @enderror">
        @error('cover')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message}}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group @error('description') is-invalid @enderror">
        <label for="description">Description</label>
        <textarea name="description" cols="30" rows="10"
            class="form-control @error('description') is-invalid @enderror">{{auth()->user()->description}}</textarea>
        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message}}</strong>
        </span>
        @enderror
    </div>

    <button class="btn btn-primary">Update</button>
</form>
@endsection