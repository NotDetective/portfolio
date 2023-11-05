<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Portfolio Micha</title>

    @vite('resources/css/app.css')
</head>
<body class="font-sofia-sans">

    {{ $slot }}

    @vite('resources/js/app.js')
</body>
</html>
