@extends('layouts.app')

@section('content')
<div class="row">
    <section id="navigation" class="col-md-2 order-1 order-md-1">
        @include('_navigation')
    </section>
    <section id="main" class="col-md-8 order-3 order-md-3">
        @yield('main')
    </section>
    <section class="col-md-2 order-2 order-md-last">
        @include('_friends')
        @include('_following')
    </section>
</div>
@endsection