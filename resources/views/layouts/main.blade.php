<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Page Title --}}
    <title>Store Al | {{ $title }}</title>

    {{-- Link --}}
    <script src="https://kit.fontawesome.com/cc899d30db.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Main Section --}}
    @yield('container')

    {{-- Footer --}}
    @include('partials.footer')
</body>

</html>
