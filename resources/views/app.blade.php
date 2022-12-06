<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- css -->
    <!-- <link href="{{ mix('/css/app.css') }}" rel="stylesheet" /> -->

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    <!-- @vite('resources/js/app.js') -->
    <!-- <script src="{{ mix('/js/app.js') }}" defer></script> -->
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>