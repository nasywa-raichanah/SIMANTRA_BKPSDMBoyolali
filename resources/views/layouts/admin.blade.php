<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMANTRA</title>
    <link rel="icon" href="{{ asset('image/logo_boyolali.png') }}"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    @include('partials.admin-header')

    <div class="container">
        @include('partials.admin-sidebar')

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