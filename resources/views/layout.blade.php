<!doctype html>
<html lang="ca">
<head>
  <meta charset="utf-8">
  <title>@yield('title','LLista de clients')</title>
</head>
<body>
  @if(session('status'))
    <p style="border:1px solid #ccc; padding:8px;">{{ session('status') }}</p>
  @endif

  <main>
    @yield('content')
  </main>
</body>
</html>
