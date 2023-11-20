<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    {{-- Form Create --}}
    @if (Session::has('status'))
        <div class="alert alert-warning" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="container mt-3">
        <h1 class="text-align-center">Form Login</h1>
        <form action="" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="text" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    {{-- Akhir Form --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
