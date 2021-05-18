<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NM COMICS</title>
    <link rel="icon" type="image/png" href="/storage/assets/images/favicon.ico"/>
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>

    @include('components.header')
    @include('components.jumbotron')
    @yield('content')
    @include('components.footer')
    
</body>
</html>