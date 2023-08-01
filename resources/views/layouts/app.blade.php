<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Product CRUD</title>
    <!-- Include Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')

    <!-- Include Bootstrap JS and dependencies (jQuery and Popper.js) -->
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
