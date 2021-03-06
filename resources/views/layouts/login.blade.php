<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Nomads</title>
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">

  <link rel="stylesheet" href="frontend/libraries/xzoom/xzoom.css">
  <link rel="stylesheet" href="frontend/libraries/gijgo/css/gijgo.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="frontend/styles/main.css">
</head>
<body>

  <main class="login-container">
    @yield('content')
  </main>


  <script src="frontend/libraries/jquery/jquery-3.5.1.min.js"></script>
  <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
  <script src="frontend/libraries/retina/retina.min.js"></script>
</body>
</html>