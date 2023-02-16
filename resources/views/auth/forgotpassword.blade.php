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
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/image/png/LogoOnly.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Forgot Password Kantin</title>
</head>
<body>
    <section class="login d-flex">
        <div class="login-left w-50 h-100">
            <div class="haha row justify-content-center align-items-center h-100">
              <div class="col-6">
                 <div class="header">
                     <h1>Forgot Password?</h1>
                     <h3>Smart Cashier</h3>
                     <p>Effisiensikan Bisnismu Dengan Smart Cashier, Solusi Kasir Moderenmu.</p>
                  </div>
                  <!-- password.email -->
              <div class="login-form">
                <form action="{{ route('forgotpassword')}}" method="POST">
                @csrf
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Your Email Address" name="email" value="{{old('email')}}" required>
                  <br>
                  <button id="singin" class="signin" name="submit">Reset Password</button>

                    <div class="text-center"><br>
                        <span class="d-inline">Already have an account? <a href="/" class="singup d-inline">Sign in</a></span>
                    </div>
                 </form>   
              </div>
            </div>
         </div>
        </div>

        
<div class="login-right w-50 h-100">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
