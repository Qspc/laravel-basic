<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{ $title }}</title>
</head>
<body>

    @include('partial.navbar')

    <div>
        @yield('container')
    </div>
    

</body>

<script src="script.js"></script>
</html>