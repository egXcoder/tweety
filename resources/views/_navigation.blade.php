<div class="d-flex flex-column">
    <a class="my-2 font-weight-bold text-black text-reset text-decoration-none" style="color:black;" href="{{route('home')}}">Home</a>
    <a class="my-2 font-weight-bold text-black text-reset text-decoration-none" style="color:black;" href="{{route('profile.index')}}">Explore</a>
    <a class="my-2 font-weight-bold text-black text-reset text-decoration-none" style="color:black;" href="">Notifications</a>
    <a class="my-2 font-weight-bold text-black text-reset text-decoration-none" style="color:black;" href="">Messages</a>
    <a class="my-2 font-weight-bold text-black text-reset text-decoration-none" style="color:black;" href="">Bookmarks</a>
    <a class="my-2 font-weight-bold text-black text-reset text-decoration-none" style="color:black;" href="">Lists</a>
    <a class="my-2 font-weight-bold text-black text-reset text-decoration-none" style="color:black;" href="{{route('profile.show',auth()->user()->identifier)}}">Profile</a>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button class="btn btn-primary my-1" style="width:100%">Logout</button>
    </form>
</div>