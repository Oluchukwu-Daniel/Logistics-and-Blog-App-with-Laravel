<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI Pro - Bootstrap 4 Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content=",">
  <link rel="shortcut icon" href="{{ asset('adminassets/img/favicon.png') }}">
  <title>CoreUI Pro - Bootstrap 4 Admin Template</title>

  <!-- Icons -->
  <link href="{{ asset('adminassets/vendors/css/flag-icon.min.css') }}" rel="stylesheet">
  <link href="{{ asset('adminassets/vendors/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('adminassets/vendors/css/simple-line-icons.min.css') }}" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="{{ asset('adminassets/css/style.css') }}" rel="stylesheet">
  <!-- Styles required by this views -->
</head>

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-body">
              <h1>Login</h1>
              <p class="text-muted">Sign In to your account</p>
              <form action="{{route('adminstore')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                  </div>
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-lock"></i></span>
                  </div>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="row">
                  <div class="col-6">
                    <button type="submit" class="btn btn-primary px-4">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <button type="button" class="btn btn-link px-0">Forgot password?</button>
                  </div>
                </div>
                </form>
            </div>
          </div>
          <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <h2>Sign up</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <button type="button" class="btn btn-primary active mt-3">Register Now!</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap and necessary plugins -->
  <script src="{{ asset('adminassets/vendors/js/jquery.min.js') }}"></script>
  <script src="{{ asset('adminassets/vendors/js/popper.min.js') }}"></script>
  <script src="{{ asset('adminassets/vendors/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('adminassets/vendors/js/pace.min.js') }}"></script>
  
  <!-- Plugins and scripts required by all views -->
  <script src="{{ asset('adminassets/vendors/js/Chart.min.js') }}"></script>
  
  <!-- CoreUI Pro main scripts -->
  
  <script src="{{ asset('adminassets/js/app.js') }}"></script>

</body>
</html>