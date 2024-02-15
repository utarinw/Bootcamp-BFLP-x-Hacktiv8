<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>CAL</b>LA</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="{{ route('register') }}" method="post">
        @csrf
        <!-- <div class="input-group mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" name="name" value="{{ old('name') }}">
          @error('name')
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <div class="invalid-feedback">
            {{ $message }}
          </div>              
            @enderror
        </div> -->
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" name="name" value="{{ old('name') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>              
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" name="email" value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
          <div class="invalid-feedback">                       
            {{ $message }}                   
          </div>               
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
          <div class="invalid-feedback">                       
                    {{ $message }}                   
                </div>               
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Re-type Password" name="password_confirmation">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
      <br>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
