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
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none mr-auto">

      <li class="nav-item px-3">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Users</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Settings</a>
      </li>
    </ul>
    
  </header>
  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="/dashboard" class="nav-link"><i class="icon-drop"></i>Contacts</a>
          </li>
          <li class="nav-item nav-dropdown">
            <a href="#" class="nav-link nav-dropdown-toggle"><i class="icon-pencil"></i>Blog</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="/blog"><i class="icon-puzzle"></i>View all Blogs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/blogform"><i class="icon-puzzle"></i>Add New</a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="/viewquotes"><i class="icon-puzzle"></i>Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-cursor"></i> Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/calculator"><i class="icon-pie-chart"></i> Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="icon-pie-chart"></i>Logout</a>
          </li>
        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
          </div>
        </li>
      </ol>


@yield('content')



<footer class="app-footer">
  <span><a href="http://coreui.io/pro/">CoreUI Pro</a> © 2017 creativeLabs.</span>
  <span class="ml-auto">Powered by <a href="http://coreui.io/pro/">CoreUI Pro</a></span>
</footer>

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


