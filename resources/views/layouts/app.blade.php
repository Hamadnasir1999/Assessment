<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <!-- Include your CSS here -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <header>
        <!-- Include your navigation bar here -->
        @include('partials.navbar')
    </header>

    <main role="main" class="container">
        @yield('content')
    </main>

    <footer>
        <!-- Include your footer here -->
        @include('partials.footer')
    </footer>

    <!-- Include your JavaScript here -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
