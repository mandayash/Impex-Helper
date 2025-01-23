<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Impex Helper') }}</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan Vite untuk CSS -->
    @vite([
    'resources/css/app.css', 'resources/css/home.css',
    'resources/js/app.js', 'resources/css/create-product.css'])
    @stack('styles')
</head>
<body>
    @include('partial.navbar')

    <main>
        @yield('content')
    </main>

    @include('partial.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script untuk menginisialisasi dropdown -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdownElementList = document.querySelectorAll('.dropdown-toggle');
            dropdownElementList.forEach(function(dropdownToggle) {
                new bootstrap.Dropdown(dropdownToggle);
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
