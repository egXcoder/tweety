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
            <a class="text-reset text-decoration-none" href="{{route('home')}}">
                <img src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" class="img-fluid" width="80px">
                <p class="font-weight-bold d-inline-block">Tweety</p>
            </a>
        </div>
        @yield('content')
    </div>

    <footer class="bg-dark my-0 p-3 text-white">
        <div class="container-fluid">
            <p class="mb-0"><i class="fab fa-twitter"></i> Tweety Platform, Developed by <a href="https://github.com/egXcoder">Ahmed Ibrahim</a> @Copyrights 2021</p>
        </div>
    </footer>

    <script src="{{mix('js/app.js')}}"></script>
    @include('components.toastr')
</body>

</html>