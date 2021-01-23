<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Material Design for Bootstrap</title>
        <!-- MDB icon -->
        <link rel="icon" href="resources/img/mdb-favicon.ico" type="image/x-icon">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->

        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
        <!-- Material Design Bootstrap -->

        <link href="{{ URL::asset('css/mdb.min.css') }}" rel="stylesheet" type="text/css" >
        <!-- Your custom styles (optional) -->

        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body >
    <div style="margin-top: 10%; margin-left: auto; margin-right: auto; width:450px;  " class="border p-4 d-flex text-center justify-content-center mb-5 flex-center align-items-center ">
    
            <form method='POST' action="{{ route('auth.signin') }} >
            <!-- Email input -->
            <label style="margin-bottom: 24px;" class="form-check-label" for="form2Example3"> Login </label>
            <div class="form-outline mb-4">
                <input type="email"
                 id="email"
                 class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                 placeholder="Email address" 
                 value="{{ Request::old('email') ? : '' }}"
                 />
                 @if($errors->has(email))
                    <span class="help-block text-damager">
                    {{$errors->first('email')}}
                    </span>
                 @endif
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password"
                       id="password"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                       placeholder="Password"
                       />
                       @if($errors->has(password))
                            <span class="help-block text-damager">
                            {{$errors->first('password')}}
                            </span>
                       @endif 
            </div>
    
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check" style="margin-top: 9px;">
                    <input
                    name="remember"
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="remember"
                    checked
                    />
                    <label class="form-check-label" for="form2Example3"> Remember me </label>
                </div>
                </div>

                <div class="col">
                 <!-- Submit button -->
                <button type="submit" class="btn btn-dark btn-block ">Sign in</button>
                </div>
            </div>

            
            

            <!-- Register buttons -->
            <div class="text-center  " >
                
                <button type="button" class="btn btn-primary " style="margin-left: auto; margin-right: auto; width:100%;">
                <i class="fab fa-facebook-f"> Sign in facebook</i>
                </button>

                <button type="button" class="btn btn-info " style="margin-left: auto; margin-right: auto; width:100%;">
                <i class="fab fa-google"> Sign in Google</i>
                </button>

                </button>
            </div>
            </form>
    </div>
    </body>
        <!-- End your project here-->
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
