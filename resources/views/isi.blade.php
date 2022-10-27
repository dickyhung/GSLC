<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    @include('nav')

    @yield('content')

    <footer class="bg-dark text-center text-white p-3">
        <div class="d-flex justify-content-center">
            <h1 class="text-danger">GSLC1</h1><h1>(Wajib)</h1>
        </div>
        <div class="d-flex justify-content-center">
            <p class="ms-1">This is a Website for GSLC1</p>
        </div>
        <div class="p-1">
            Privacy Policy | Terms of Service | Contact Us | About Us
        </div>
        <div class="">
            <p>Copyright © 2022</p>
            <p style="font-weight: bold">Dicky Hung - 2440027631</p>
            <p class="ms-1">All Rights Reserved</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>