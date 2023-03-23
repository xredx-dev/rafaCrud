<!doctype html>
<html lang="es-Mx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>@yield('title') Producs App</title>
</head>

<body>
    <section>
        <nav class="navbar navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Crud-Rafa</a>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary me-md-2">Home</a>
                    <a href="{{ route('products.create') }}" class="btn btn-secondary">Add</a>
                </div>
            </div>
        </nav>
    </section>
    <main class="container mt-5">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
