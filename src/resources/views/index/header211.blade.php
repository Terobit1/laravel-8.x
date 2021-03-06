<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield("title")</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}">MyBook.com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <div class="container-fluid">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Домашня сторінка</a></li>
                            <li class="breadcrumb-item"><a href="#">Товари</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Користувачі</a></li>
                        </ol>
                    </div>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    @if (Auth::check())
                    <form action="{{route('Search')  }}" type="get">
                        <input class="form-control mr-sm-2" name="search" type="search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Пошук</button>
                        <button type="button" 
                            class="btn btn-outline-success my-2 ms-2 my-sm-0 dropdown-toggle" id="dropdownMenuOffset"
                            data-toggle="dropdown" data-offset="10,20">
                            {{Auth::user()->getName()}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">

                            @if (Auth::user()->isAdmin())
                            <a class="dropdown-item" href="{{ route('posts.cart') }}">Корзина</a>
                            <a class="dropdown-item" href="{{ route('posts.index') }}">База данних</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('auth.getOut') }}">Вийти</a>
                        </div>
            </div>
            </form>
            @else
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="{{ route('auth.signin') }}">Увійти</a></li>
                    <li class="breadcrumb-item "><a href="{{ route('auth.signup') }}">Зарегіструватись</a></li>
                </ol>
            </div>
            @endif
            </form>
            </div>
        </nav>
    </header>
    @yield("content")
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>


</body>

</html>
