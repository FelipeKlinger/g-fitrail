<!doctype html>
<html lang="ca">

<head>
  <meta charset="utf-8">
  <title>@yield('title', 'Gestión Gimnasio')</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #051d4d;
      color: #ffffff;
    }

    nav {
      background-color: #ffffff;
      padding: 15px 30px;
    }

    nav a {
      color: black;
      font-weight: 600;
      text-decoration: none;
      padding: 10px 20px;
      display: inline-block;
      transition: background-color 0.3s;
    }

    nav a:hover {
      background-color: #f0f0f0;
    }

    main {
      padding: 20px;
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <a href="{{ url('/') }}">Inicio</a>
      <a href="{{ route('clients.index') }}">Clientes</a>
      <a href="{{ route('entrenadors.index') }}">Entrenadores</a>
      <a href="{{ route('sedes.index') }}">Sedes</a>
      <a href="{{ route('planes.index') }}">Planes</a>
      <a href="{{ route('entrenamientos.index') }}">Entrenamientos</a>
    </nav>
  </header>

  @if(session('status'))
    <div style="border:1px solid #4CAF50; background-color: #dff0d8; padding:10px; margin:20px;">{{ session('status') }}
    </div>
  @endif

  <main>
    @yield('content')
  </main>
</body>

</html>