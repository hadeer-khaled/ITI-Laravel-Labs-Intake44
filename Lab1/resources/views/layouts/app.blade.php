<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .navbar { background: #007BFF; padding: 15px; text-align: center; }
        .navbar a { color: white; text-decoration: none; margin: 0 15px; font-size: 18px; }
        .navbar a:hover { text-decoration: underline; }
        .container { padding: 20px; }
    </style>
</head>
<body>

    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
