<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="/css/app.css" rel="stylesheet" />
    <link href="http://fonts.cdnfonts.com/css/metropolis-4" rel="stylesheet">
    <title>@yield('title','Leaf Tea House')</title>
    <style>
        @import url('http://fonts.cdnfonts.com/css/metropolis-4');
    </style>
</head>


<body class="d-flex flex-column h-100">
    <!-- header -->
    <nav class="navbar navbar-expand-sm navbar-light bg-secondary py-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}"><img class="col-md-2" src="/img/logo.png" alt="log" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active link-green py-3" href="{{ route('home.index') }}">Home</a>
                    <a class="nav-link active link-green py-3" href="{{ route('product.index') }}">Product</a>
                    <a class="nav-link active link-green py-3" href="{{ route('home.about') }}">About</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex aligh-items-center flex-column text-capitalize">
            <h1 class="pt-2 subtitle fw-bold">@yield('subtitle','Leaf Tea House Online Store')</h1>
        </div>
    </header>

    <main class="my-5 container">
         @yield('content')
    </main>

    <!-- footer -->
    <footer class="footer mt-auto justify-content-center ">
        <div class="copyright py-4 text-center link-gray">
            <div class="container">
                <small>
                    © Copyright 2022 <a href="#" target="_blank" class="text-reset fw-bold text-decoration-none">Leaf Tea Room</a> by Oprah Huang
                </small>
            </div>
        </div>
    </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
