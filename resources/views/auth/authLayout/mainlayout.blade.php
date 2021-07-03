<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('auth.authLayout.link')
  @yield('customcss')
  
</head>

<body>
@include('auth.authLayout.navbar')
  

  @yield('content')

  <!-- @include('auth.authLayout.footer') -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  @include('auth.authLayout.script')
  @yield('customjs')
</body>

</html>