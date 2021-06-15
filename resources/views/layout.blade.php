<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Close this tab</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/layout.css') }}" />
</head>
<body>
<div id="app">
    @yield('content')
</div>

<!-- Scripts -->
<script src=""></script>
</body>
<div class="header">
    <h2 class="header-title">Something in here</h2>
</div>
</html>
