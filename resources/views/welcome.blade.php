<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beresindong Landing Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app">
        <app-component /> {{-- Ini akan merender komponen utama Anda --}}
    </div>

    @vite('resources/js/app.js')
</body>
</html>