<html>
<head>
    <title>Hello World</title>
</head>
<body>
<div>
    <div class="container">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('content')
</div>
</body>
</html>
