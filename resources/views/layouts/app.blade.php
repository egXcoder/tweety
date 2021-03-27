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
        @yield('content')
    </div>

    <script src="{{mix('js/app.js')}}"></script>
    @include('components.toastr')
</body>

</html>