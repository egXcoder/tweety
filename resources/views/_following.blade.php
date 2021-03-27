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