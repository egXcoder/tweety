<div class="posts mt-4 border p-2 mb-4">
    @forelse($tweets as $tweet)
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

        @component('components.impression-buttons',['tweet'=>$tweet])
            
        @endcomponent
    
    </div>
    @if($loop->last)
    @continue
    @endif
    <hr>

    @empty
        <p>No Tweets Yet!</p>   
    @endforelse
    <div class="d-flex justify-content-center my-2">
        {{$tweets->links()}}
    </div>
</div>