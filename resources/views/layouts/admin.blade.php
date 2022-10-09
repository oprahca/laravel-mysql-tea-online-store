<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="/css/admin.css" rel="stylesheet" />
    <title>@yield('title','Leaf Tea House - Admin')</title>
</head>

<body class="h-100">
    <div class="row g-0 h-100">
        <!-- sidebar -->
        <div class="p-4 pt-5 col-lg-3 sidebar fixed text-white bg-dark">
            <a href="{{ route('admin.home.index') }}" class="pb-2 text-white text-decoration-none">
                <span class="fs-3">Admin Panel</span>
            </a>
            <ul class="nav flex-column my-2">
                <li>
                    <a href="{{ route('admin.home.index') }}" class="nav-link text-white">Home</a>
                </li>
                <li>
                    <a href="{{  route('admin.product.index')}}" class="nav-link text-link">Product</a>
                </li>
                <hr />
                <li>
                    <a href="{{ route('home.index') }}" class="mt-2 btn btn-outline-secondary text-white">
                        Go back Home Page
                    </a>
                </li>
            </ul>
        </div>

        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font mx-1">Admin Page</span>
                <img src="{{ asset('/img/profile.svg') }}" alt="profile" class="img-profile rounded-circle">
            </nav>

            <div class="g-0 m-5 text-center">
                @yield('content')
            </div>
        </div>
    </div>
    
    <!-- footer -->
    <footer class="footer mt-auto justify-content-center">
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