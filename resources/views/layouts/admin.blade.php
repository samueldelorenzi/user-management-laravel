<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>CRUD</title>
</head>
<body>

<header class="d-flex justify-content-center py-3 bg-dark">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a href="{{ route("user.index") }}" class="nav-link m-2 {{ Route::is("user.index") ? "text-bg-light" : "text-light" }}">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{ route("user.list") }}" class="nav-link m-2 {{ Route::is("user.list") ? "text-bg-light" : "text-light" }}">Usuários</a>
        </li>
    </ul>
</header>

<div class="container">
    @yield('content')
</div>

<footer class="text-center fixed-bottom bg-dark text-light">
    <div class="container p-2 pb-0">
        <section class="mb-2">
            <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="https://www.linkedin.com/in/samueldelorenzi/"
                role="button"
                target="_blank"
                rel="noopener"
            ><i class="bi bi-linkedin"></i>
            </a>
            <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #333333;"
                href="https://www.github.com/samueldelorenzi/user-management-laravel"
                role="button"
                target="_blank"
                rel="noopener"
            ><i class="bi bi-github"></i
                ></a>
        </section>
    </div>
    <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2025 Samuel De Lorenzi Ribeiro
    </div>
</footer>

</body>
</html>
