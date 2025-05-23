<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', @env('APP_NAME'))
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-orange-50">
    <div class="m-5">
        <div class="bg-white mb-10 p-5 rounded-xl flex flex-col lg:flex-row justify-between items-center shadow-2xl">
            <img src="{{ asset('images/finvise-site-logo.png') }}" alt="finvise logo" class="w-50">
            <p class="text-2xl font-bold text-gray-800 cursor-default pointer-events-none hidden lg:block">
                Full Stack Developer | Technical Test | Milzam Hutomo
            </p>
        </div>
    
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>