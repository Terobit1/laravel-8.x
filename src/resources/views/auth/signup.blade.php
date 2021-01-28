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
        <script src="https://www.google.com/recaptcha/api.js"></script>  
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body >
    <div style="margin-top: 10%; margin-left: auto; margin-right: auto; width:450px;  " class="border p-4 d-flex text-center justify-content-center mb-5 flex-center align-items-center ">
    
    <!-- /signin -->
            <form method='POST' action="{{route('auth.signup')}}" novalidate  >
            @csrf
            
            <!-- Email input -->
            <label style="margin-bottom: 24px;" class="form-check-label" for="form2Example3"> Register </label>
            <div class="form-outline mb-4">
                <input type="email"
                 id="email"
                 name="email"
                 class="form-control @error('email') is-invalid @enderror "
                 placeholder="Email address" 
                 value="{{ old('email') }}"
                 />
                 @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                 @enderror
            </div>

       
            <div class="form-outline mb-4">
                <input type="name"
                 id="name"
                 name="name"
                 class="form-control @error('name') is-invalid @enderror "
                 placeholder="name" 
                 value="{{ old('name') }}"
                 />
                 @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                 @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password"
                       id="password"
                       name="password"
                       class="form-control @error('password') is-invalid @enderror"
                       placeholder="Password"
                       />
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
                <div class="form-check" style="margin-top: 9px;">
                    <input
                    name="remember"
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="remember"
                    checked
                    />
                    <label class="form-check-label" id="remember" name="remember" for="form2Example3"> Remember me </label>
                </div>
               

                <!-- <div class="form-group row">
                    <div class="col-md-6 offset-md4">
                        <div class="g-recaptcha" data-sitekey="">
              
                        </div>
                        <form action="?" method="POST">
                            <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                            <br/>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div> -->
                
              
                </div>
                
                <div class="col">
                 <!-- Submit button -->
                <button type="submit" class="btn btn-dark btn-block ">Sign up</button>
                </div>
            </div>

            
            

            <!-- Register buttons -->
            <div class="text-center  " >
                
            <a href="{{ route('login.facebook') }}" class="btn btn-lg btn-block kpx_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                <i class="fab fa-facebook-f"></i>
                 <span class="hidden-xs"></span>
                </a>
                

                <a href="{{ route('login.google') }}" class="btn btn-lg btn-block kpx_btn-google-plus" data-toggle="tooltip" data-placement="top" title="Google Plus">
              <i class="fab fa-google"></i>
              <span class="hidden-xs"></span>
            </a>
            </div>
            </form>
    </div>
    </body>
    <script type="text/javascript">
     
    </script>
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
  
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>

</html>
