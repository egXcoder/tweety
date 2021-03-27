<div class="posts mt-4 border p-2">
    @foreach($tweets as $tweet)
    <div class="tweet row no-gutters">
        <div class="col-md-2">
            <img class="img-fluid float-left rounded-circle" style="width:50px;height:50px;"
                src="{{$tweet->user->image_url}}">
        </div>
        <div class="col-md-10">
            <h4>{{$tweet->user->name}} <span class="text-muted"
                    style="font-size:12px;">{{$tweet->created_at->diffForHumans()}}</span> </p>
                <p style="font-size: 1rem">{{$tweet->body}}</p>
        </div>
        <div style="font-size: 0.7rem;" class="impressions">
            <i class="far fa-thumbs-up fa-2x active mx-1 like"><span
                    style="font-size: 1rem">{{$tweet->onlyImpressions('like')->count() ?? 0}}</span></i>
            <i class="far fa-thumbs-down fa-2x mx-1 dislike"><span
                    style="font-size: 1rem">{{$tweet->onlyImpressions('dislike')->count() ?? 0}}</span></i>
            <i class="far fa-heart fa-2x mx-1 love"><span
                    style="font-size: 1rem">{{$tweet->onlyImpressions('love')->count() ?? 0}}</span></i>
            <i class="far fa-laugh-beam fa-2x mx-1 laugh"><span
                    style="font-size: 1rem">{{$tweet->onlyImpressions('laugh')->count() ?? 0}}</span></i>
            <i class="far fa-sad-tear fa-2x mx-1 cry"><span
                    style="font-size: 1rem">{{$tweet->onlyImpressions('cry')->count() ?? 0}}</span></i>
        </div>
    </div>
    @if($loop->last)
    @continue
    @endif
    <hr>
    @endforeach
</div>