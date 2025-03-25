<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Well Manager')</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <nav>
        <a href="{{ route('wells.index') }}">Home</a> |
        <a href="{{ route('wells.create') }}">Add New Well</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p style="text-align:center;">&copy; 2025 Tommy's Well Manager App</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
