<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Webtres Tarea</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- estilos mios -->
    <style> 
        .form-group{ margin-top: 30px; }
        .btn-grey { background-color: rgb(163,163,163); color: white }
        .btn-grey:hover { color: white; background-color: rgb(104,117,137); }
        .navbar-dark { background-color: rgba(104,117,137); color: white }
    </style>

  </head>
  <body>

  <nav class="navbar navbar-dark" style="padding: 20px">
    <h5>Administrar Usuarios</h5>
      <a href="{{route('index')}}"> <button class="btn btn-success">Lista</button></a>
  </nav>

    <div class="container">
      @yield('content')
    </div>

  </body>
</html>