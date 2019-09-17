<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand">Shop</a>
        <button class="menu-toggle btn btn-sm text-white"><i class="fas fa-bars text-primary"></i> Menu</button>
    </nav>
    <div class="page row">
        <section class="col-2 side d-none">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Categories</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Attributes</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Collections</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Filters</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Orders</a>
                </li>
               
                 <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Menu</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Pages</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Marketing</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Settings</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{Route("dashboard")}}">Users</a>
                </li>
            </ul>
        </section>
        <section class="col content">
             <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
        </section>
    
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{asset("js/admin.js")}}"></script>
</body>
</html>
