<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Go Wis | Login</title>
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


    </style>
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
  </head>
  <body class="text-center row justify-content-center">
    @include('layout.navbar')
    <div class="col-md-5">
      <br><br><br><br>
      <main class="form-signin">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('login'))
            <div class="alert alert-danger">
                {{ session('login') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="/login" method="POST">
          @csrf
          <img class="mb-4 rounded-circle" src="{{ asset('img/gowis.jpg') }}" alt="" width="100" height="100">
          <h1 class="h3 mb-3 fw-normal">Please Login</h1>
      
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" autofocus required>
            <label for="email">Email address</label>
            @error('email')
                <div class="invalid-feedback" role="alert">
                    {{ $message }}
                </div>
              
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
            <label for="password">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <small class="d-block mt-3" >Not register? <a href="/register">Register now!</a></small>
      </main>
    </div>
    
    {{-- footer --}}
    <div class="container">
      <br><br><br>
      <br><br><br>
      <br><br>
      @include('layout.footer')
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>