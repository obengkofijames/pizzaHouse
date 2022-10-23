<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravell</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- style -->
    <link href="/css/main.css" rel="stylesheet">
    <!-- vite link -->
    @vite("resources/scss/app.scss")
</head>

<body class="antialiased">
        @yield("content")
    
    <footer>
        copyright 2022 pizza house
    </footer>
</body>

</html>
