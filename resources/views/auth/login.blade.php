<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/image/png/LogoOnly.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Login Smart Cashier</title>
</head>
<body>
    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="haha row justify-content-center align-items-center h-100">
              
              <div class="hi col-6">
                 <div class="header">
                     <h1>Smart Cashier</h1>
                     <p>Effisiensikan Bisnismu Dengan Smart Cashier, Solusi Kasir Moderenmu.</p>
                  </div>

              <div class="login-form">
                <form action="{{route('proses_login')}}" method="POST">
                  @csrf
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" name="email" value="{{old('email')}}">
                  <span class="text-danger">@error('email') {{$message}} @enderror</span></br>

                  <label for="password" class="form-label">Password</label>
                  <div class="input-group" id="show_hide_password">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password " name="password" value="{{old('password')}}"   placeholder="Enter your password" autocomplete="current-password"> 
                  <span class="input-group-text"><a href="" class="btn btn-outline-secondary"><i class="bi bi-eye-slash" aria-hidden="true"></i></a></span>
                  </div>
                  <span class="text-danger">@error('password') {{$message}} @enderror</span></br>

                  <button id="singin" class="signin" name="submit">Sign In</button>

                  <button class="signin-google">
                    <img src="{{ asset('assets/image/google-logo-9824 1.png') }}" alt="">
                    Sign In With Google</button>

                    <div class="text-center">
                        <span class="d-inline">Don’t have an account? <a href="/register" class="singup d-inline">Sign up for free</a></span>
                        <a href="/forgotpassword" class="text-center">Forgot Password?</a>
                    </div>
                 </form>   
              </div>
            </div>
         </div>
        </div>
        
    <div class="login-right w-50 h-90">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/image/image 3.png') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Smart Cashier</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/image/image 4.png') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Smart Cashier</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/image/image 5.png') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Smart Cashier</h5>
      </div>
    </div>
  </div>
 </div>
</div>
    </section>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    @if(Session::has("fail"))
        <script>
            Swal.fire({
                  position: 'top-center',
                  icon: 'error',
                  title: '{{Session::get('fail')}}',
                  showConfirmButton: false,
                  timer: 1500 
            })
         </script>
    @endif
    @if(Session::has("success"))
        <script>
            Swal.fire({
                  position: 'top-center',
                  icon: 'success',
                  title: '{{Session::get('success')}}',
                  showConfirmButton: false,
                  timer: 1500 
            })
         </script>
    @endif
</body>
</html>
