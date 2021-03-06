<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Регістрація</title>
    <!-- MDB icon -->
    <link rel="icon" href="resources/img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Material Design Bootstrap -->
    <link href="{{ URL::asset('css/mdb.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Your custom styles (optional) -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div style="margin-top: 10%; margin-left: auto; margin-right: auto; width:450px;  "
        class="border p-4 d-flex text-center justify-content-center mb-5 flex-center align-items-center ">

        <!-- /signin -->
        <form method='POST' action="{{route('auth.signup')}}" novalidate>
            @csrf

            <!-- Email input -->
            <label class="form-check-label mb-4" for="form2Example3"> Регістрація </label>
            <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror "
                    placeholder="Пошта" value="{{ old('email') }}" />
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>


            <div class="form-outline mb-4">
                <input type="name" id="name" name="name" class="form-control @error('name') is-invalid @enderror "
                    placeholder="Ім'я" value="{{ old('name') }}" />
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="password" name="password"
                    class="form-control @error('password') is-invalid @enderror" placeholder="Пароль" />
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check mt-1">
                        <input name="remember" class="form-check-input" type="checkbox" value="" id="remember"
                            checked />
                        <label class="form-check-label" id="remember" name="remember" for="form2Example3"> Запам'ятати
                            мене </label>
                    </div>
                </div>
                <div class="col">
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-dark btn-block ">Регістрація</button>
                </div>
            </div>

            <!-- sign in social buttons -->
            <div class="text-center  ">

                <a href="{{ route('login.facebook') }}" class=" mb-3 btn btn-lg btn-block kpx_btn-facebook"
                    data-toggle="tooltip" data-placement="top" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                    <span class="hidden-xs"></span>
                </a>

                <a href="{{ route('login.google') }}" class=" mb-2 btn btn-lg btn-block kpx_btn-google-plus"
                    data-toggle="tooltip" data-placement="top" title="Google">
                    <i class="fab fa-google"></i>
                    <span class="hidden-xs"></span>
                </a>
            </div>
        </form>
    </div>
</body>

<!-- jQuery -->
<script type="text/javascript" src="resources/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>


</html>
