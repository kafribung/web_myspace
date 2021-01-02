<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kafri Bung Space</title>
    <!-- Favicon  -->
    @include('layouts._favicon')

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Quicksand:wght@600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 dark:bg-gray-900" >
    <main id="app">
        <router-view></router-view>
    </main>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
