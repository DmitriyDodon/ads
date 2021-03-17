<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>

@if(session()->has('message'))
    <div class="alert alert-danger" role="alert">
        {{ session()->pull('message')}}
    </div>
@endif

<div class="d-flex flex-nowrap bd-highlight container">
    @guest
        <div class="p-3">
            @include('User.auth')
        </div>
    @endguest
    @auth
        <div class="p-3">
            @include('user-info')
        </div>
    @endauth
    <div class="p-3">
        @yield('content')
    </div>
</div>



<div class="container d-flex justify-content-center py-3">
    @yield('pages')
</div>




</body>
</html>
