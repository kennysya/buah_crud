<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buah</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    @if(session('success'))
    <p style="color:lightpink;">{{ session('succes') }}</p>
    @endif
    @yield('content')
</body>
</html>