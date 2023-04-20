<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Halaman {{ $title }}</title>
</head>

<body>
    <div id="app" class="bg-blue-500">
      @yield('navbar')
      {{-- ini untuk mendeklarasikan sebuah component/content pada halaman --}}
    </div>
    <div class="container">
        @yield('slider')
    </div>
    <div class="container">
        @yield('content-1')
    </div>
    <div class="container">
        @yield('content-2')
    </div>
    <div class="container">
        @yield('content-3')
    </div>
    <div class="container">
        @yield('content-4')
    </div>

    @include('components.footer')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/290d4f0eb4.js" crossorigin="anonymous"></script>
</body>
</html>
