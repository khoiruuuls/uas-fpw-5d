<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <style>
        .bdr{
            border-radius: 8px;
            overflow: hidden;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand text-black" href="/dosen">
                    UAS - Framework
                </a>
                <form class="d-flex">
                    <ul class="nav nav-pills nav-fill gap-4 p-1 bg-primary small rounded-5 shadow-sm">
                        <a href="/dosen" class="nav-link bg-light rounded-5 text-primary"><b>Dosen</b></a>
                        <a href="/mahasiswa" class="nav-link bg-light rounded-5 text-primary"><b>Mahasiswa</b></a>
                    </ul>
                </form>
            </div>
    </nav>
    @yield('content')
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
