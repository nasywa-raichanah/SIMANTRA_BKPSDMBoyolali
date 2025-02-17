<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMANTRA</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div class="container">
        @include('layouts.sidebar')

        <div class="content">
            @yield('content')
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.menu-toggle').click(function(){
                $('.sidebar').toggleClass('minimized');
            });
        });
    </script>

</body>
</html>
