<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Collegefinder.com @yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a href="" class="navbar-brand text-warning">Collegefinder.com</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{route('homepage')}}" class="btn btn-dark btn-sm ml-2">Home</a></li>
            <li class="nav-item"><a href="{{route('insert')}} " class=" btn btn-dark btn-sm ml-2">Insert</a></li>
            <li class="nav-item"><a href="" class=" btn btn-dark btn-sm ml-2">About us</a></li>
        </ul>
    </nav>
    @section('content')
        @show
</body>
</html>