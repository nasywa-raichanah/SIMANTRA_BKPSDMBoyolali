<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMANTRA</title>
    <link rel="icon" href="{{ asset('image/logo_boyolali.png') }}"> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    @include('partials.user-header')

    <div class="container">
        @include('partials.user-sidebar')

        <div class="content">
            @yield('content')
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.menu-toggle').click(function () {
                $('.sidebar').toggleClass('minimized');
            });
        });
    </script>

    @stack('scripts')
</body>

</html>