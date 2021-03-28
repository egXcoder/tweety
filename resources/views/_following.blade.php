<div class="bg-light rounded p-2 my-2">
    <h4>Following</h4>
    <div class="d-flex flex-column">
        @forelse(auth()->user()->following as $single_following)
        <a href="{{route('profile.show',$single_following)}}" class="d-flex my-1 text-reset text-decoration-none">
            <img class="rounded-circle" style="width:40px;height:40px;" src="{{$single_following->image_url}}">
            <p class="my-auto mx-1">{{$single_following->name}}</p>
        </a>
        @empty
            <p>No followings yet!</p>
        @endforelse
    </div>
</div>