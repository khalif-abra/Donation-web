<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="css/404.css">

        <title>{{ $title }}</title>
    </head>
    <body>

        <!--==================== MAIN ====================-->

        @include('partials.404')

            @yield('404')
            


        <!--=============== SCROLLREVEAL ===============-->
        <script src="js/scrollreveal.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="js/main.js"></script>
    </body>
</html>