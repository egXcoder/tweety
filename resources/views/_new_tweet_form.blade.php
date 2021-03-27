<div class="border rounded shadow-sm p-2">
    <form action="{{route('tweets.store')}}" method="post">
        @csrf
        <textarea style="border: none" name="body" class="form-control rounded" cols="30" rows="7"
            placeholder="What's up doc?">{{old('body')}}</textarea>
        @error('body')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <hr>
        <div class="clearfix">
            <img class="rounded-circle float-left" style="width: 50px;height:50px;" src="{{auth()->user()->image_url}}">
            <button type="submit" class="btn btn-primary float-right">Tweet-a-roo!</button>
        </div>
    </form>
</div>