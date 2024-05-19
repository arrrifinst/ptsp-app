<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PTSP | {{ $title }}</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> -->

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="icon" href="img/title.jpg">

    <link rel="stylesheet" href="/css/web.css">

</head>

<body>
    <nav class="navbar shadow p-2 mb-3 rounded bg-body navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/img/brand.png" alt="" width="200" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Layanan") ? 'active' : '' }}" href="/layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Formulir") ? 'active' : '' }}" href="/buat-layanan">Formulir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Bantuan") ? 'active' : '' }}" href="/bantuan">Panduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Kontak") ? 'active' : '' }}" href="/kontak">Kontak</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hallo, {{ auth()->user()->username }}
                        </a>
                        <ul class="dropdown-menu">
                            <li align="center"><i class="fas fa-user"></i></li>
                            <li align="center"><small class="mt-2">{{ auth()->user()->email }}</small></li>
                            <hr class="dropdown-divider">
                            @can('admin')
                            <li><a class="dropdown-item" href="/dashboard"><i class="fas fa-key"></i> Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            @endcan
                            <li>
                                <!-- <form action="/logout" method="POST">
                                    @csrf
                                </form> -->
                                <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#Logout">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="text-center shadow-lg text-secondary">
        <div class="text-center p-4">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <i class="fas fa-headset"></i>&nbsp;&nbsp; Call center&nbsp;:&nbsp;(0542) 424558
                    </div>
                    <div class="col-6">
                        © 2022 Kantor Kementerian Agama Kota Balikpapan
                    </div>
                    <div class="col-3">
                        Follow us on&nbsp;:&nbsp;
                        <a href="https://www.instagram.com/kemenagbpn/" class="ms-auto"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/kemenagbpn"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/kemenagbpn"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UCjHKpFwfEtZr2jVxG88NunQ"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Modal Logout -->
    <div class="modal fade" id="Logout" tabindex="-1" aria-labelledby="LogoutLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="LogoutLabel">Logout</h5>
        </div>
        <div class="modal-body">
            Anda yakin ingin keluar?
        </div>
        <div class="modal-footer">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
            </form>
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
        </div>
        </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>