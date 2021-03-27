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
    <div class="container-fluid">
        <div class="header mb-4">
            <img src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" class="img-fluid" width="80px">
            <p class="font-weight-bold d-inline-block">Tweety</p>
        </div>
        <div class="row">
            <section id="navigation" class="col-md-2 order-1 order-md-1">
                @include('_navigation')
            </section>
            <section id="main" class="col-md-8 order-3 order-md-3">
                @yield('content')
            </section>
            <section class="col-md-2 order-2 order-md-last">
                @include('_friends')
                @include('_following')
            </section>
        </div>
    </div>

    <script src="{{mix('js/app.js')}}"></script>
    @include('components.toastr')
</body>

</html>