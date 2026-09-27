<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>

    <!-- Google Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F0FDFA;
        }

        .form-control {
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            color: #1E293B;
        }

        .form-control::placeholder {
            font-family: 'Poppins', sans-serif;
            color: #9a9a9a;
            font-size: 15px;
            opacity: 1;
        }

        .form-select {
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            color: #555555;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    @include('components.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('components.footer')

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>