<html>
    <head>
        {{-- @yield nos permitirá llamar esta parte de la plantilla en otras vistas --}}
        <title>Siigo Match Battle - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="resources/css/app.css">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="bg-dark">
        <div class="container pt-3 pb-2">
            <div class="container d-flex justify-content-center">
                <h1 class="text-white">Siigo Match Battle</h1>
            </div>
        </div>
        <div class="container d-flex justify-content-center gap-3">
            <img src= {{ asset('espadas.png') }} width="200x|" height="200x|" alt="">
        </div>
        <div class="container d-flex justify-content-center gap-3">
            @yield('content')

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
