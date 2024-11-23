<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('image/NEMSU.png')  }}" type="image/png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>North Eastern Mindanao State University</title>

    @vite([
        'resources/css/app.css',
        'resources/sass/dashboard.scss',
        'resources/sass/manage-users.scss',
        'resources/sass/manage-rooms.scss',
        'resources/js/app.js'
    ])
    @livewireStyles
</head>
<body>

    {{ $slot }}

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireScripts
</body>
</html>
