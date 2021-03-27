<div class="posts mt-4 border p-2">
    @foreach($tweets as $tweet)
    <div class="tweet row no-gutters p-3">
        <div class="col-md-1">
            <a href="{{route('profile.show',$tweet->user)}}">
                <img class="img-fluid float-left rounded-circle" style="width:50px;height:50px;"
                    src="{{$tweet->user->image_url}}">
            </a>
        </div>
        <div class="col-md-11">
            <a href="{{route('profile.show',$tweet->user)}}" class="text-reset text-decoration-none">
                <h4>{{$tweet->user->name}} <span class="text-muted"
                        style="font-size:12px;">{{$tweet->created_at->diffForHumans()}}</span> </p>
            </a>
            <p style="font-size: 1rem">{{$tweet->body}}</p>
        </div>
        <div style="font-size: 0.7rem;" class="impressions mt-4">
            <i class="far fa-thumbs-up fa-2x active mx-2 like"><span
                    style="font-size: 1rem">{{$tweet->onlyImpressions('like')->count() ?? 0}}</span></i>
            <i class="far fa-thumbs-down fa-2x mx-2 dislike"><span
                    style="font-size: 1rem">{{$tweet->onlyImpressions('dislike')->count() ?? 0}}</span></i>
            <i class="far fa-heart fa-2x mx-2 love"><span
                    style="font-size: 1rem">{{$tweet->onlyImpressions('love')->count() ?? 0}}</span></i>
            <i class="far fa-laugh-beam fa-2x mx-2 laugh"><span
                    style="font-size: 1rem">{{$tweet->onlyImpressions('laugh')->count() ?? 0}}</span></i>
            <i class="far fa-sad-tear fa-2x mx-2 cry"><span
                    style="font-size: 1rem">{{$tweet->onlyImpressions('cry')->count() ?? 0}}</span></i>
        </div>
    </div>
    @if($loop->last)
    @continue
    @endif
    <hr>
    @endforeach
</div>