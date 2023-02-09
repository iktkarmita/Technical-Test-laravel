<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--====== Title ======-->
    <title>Technical Test – Designcub3</title>

    @yield('styles')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">


    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ 'assets/css/style.css' }}">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ 'assets/css/responsive.css' }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body style="background: rgba(71,144,240,.507)">

    <!--====== HEADER PART ENDS ======-->
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark"
            style="background: linear-gradient(30deg,hsla(0,0%,100%,.1),rgba(71,144,240,.507))">
            <a class="navbar-brand" href="#">Indonesian area</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Find location <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/subscribe">Subscribe <span class="sr-only">(current)</span></a>
                    </li>

                </ul>

            </div>
        </nav>


        <main class="">
            @yield('content')
        </main>
    </div>

    </div>
    <!--====== jquery js ======-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>


</body>

</html>
