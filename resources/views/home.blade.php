<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tweety</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body>
    <div class="container-lg">
        <div class="header mb-4">
            <img src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" class="img-fluid" width="80px">
            <p class="font-weight-bold d-inline-block">Tweety</p>
        </div>
        <div class="row">
            <section id="navigation" class="col-md-3 order-1 order-md-1">
                <div class="d-flex flex-column">
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Home</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Explore</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Notifications</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Messages</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Bookmarks</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Lists</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">Profile</a>
                    <a class="my-2 font-weight-bold text-black" style="color:black;" href="">More</a>
                    <button class="btn btn-primary">Tweet-a-roo!</button>
                </div>
            </section>
            <section id="main" class="col-md-6 order-3 order-md-3">
                <div class="border rounded shadow-sm p-2">
                    <form action="{{route('tweets.store')}}" method="post">
                        @csrf
                        <textarea style="border: none" name="body" class="form-control rounded" cols="30" rows="7" placeholder="What's up doc?">{{old('body')}}</textarea>
                        @error('body')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                        <hr>
                        <div class="clearfix">
                            <img class="rounded-circle float-left" style="width: 50px;height:50px;"
                                src="{{auth()->user()->image_url}}">
                            <button type="submit" class="btn btn-primary float-right">Tweet-a-roo!</button>
                        </div>
                    </form>
                </div>
                <div class="posts mt-4 border p-2">
                    @foreach($tweets as $tweet)
                        <div class="tweet row no-gutters">
                            <div class="col-md-2">
                                <img class="img-fluid float-left rounded-circle" style="width:50px;height:50px;"
                                    src="{{$tweet->user->image_url}}">
                            </div>
                            <div class="col-md-10">
                                <h4>{{$tweet->user->name}} <span class="text-muted" style="font-size:12px;">{{$tweet->created_at->diffForHumans()}}</span> </p>
                                <p style="font-size: 1rem">{{$tweet->body}}</p>
                            </div>
                            <div style="font-size: 0.7rem;">
                                <i class="far fa-thumbs-up fa-2x active mx-2"><span style="font-size: 1rem">23</span></i>
                                <i class="far fa-thumbs-down fa-2x mx-2"><span style="font-size: 1rem">11</span></i>
                            </div>
                        </div>
                        @if($loop->last)
                            @continue
                        @endif
                        <hr>
                    @endforeach
                </div>
            </section>
            <section id="friends" class="col-md-3 order-2 order-md-last">
                <div class="bg-light rounded p-2">
                    <h4>Friends</h4>
                    <div class="d-flex flex-column">
                        @for($i=0;$i<4;$i++)
                            <div class="d-flex my-1">
                                <img class="img-fluid" width="50px" src="https://frspros.com/images/easyblog_shared/July_2018/7-4-18/b2ap3_large_totw_network_profile_400.jpg">
                                <p class="my-auto mx-1">Ahmed Ibrahim</p>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="bg-light rounded p-2 my-2">
                    <h4>Following</h4>
                    <div class="d-flex flex-column">
                        @foreach($following as $single_following)
                        <div class="d-flex my-1">
                            <img class="rounded-circle" style="width:40px;height:40px;" src="{{$single_following->image_url}}">
                            <p class="my-auto mx-1">{{$single_following->name}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="{{mix('js/app.js')}}"></script>
    @include('components.toastr')
</body>

</html>