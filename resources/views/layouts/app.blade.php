<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('layouts.assets')
</head>
<body>
    <div id="app">
        @include('layouts.nav')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
