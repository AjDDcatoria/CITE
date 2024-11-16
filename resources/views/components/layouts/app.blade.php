<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('image/NEMSU.png')  }}" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>North Eastern Mindanao State University</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>

    {{ $slot }}

    @livewireScripts
</body>
</html>
