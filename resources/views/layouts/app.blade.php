<!doctype html>
<html lang="ja" class="text-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="接骨院/デイサービス/訪問マッサージ　川口駅から徒歩15分！送迎や往診も可能です。女性スタッフ在籍、子供から大人まで大歓迎。駐車場・駐輪場完備。" />
    <meta name="keywords" content="接骨院,マッサージ,鍼灸,川口市" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css"
        type="text/css" media="all" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="icon_iphone" href="iphone用images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <header class="gl-header">
        <nav class="navbar navbar-expand-lg bg-white bg-opacity-50 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home.index') }}">
                    <img src="images/logo3.png" alt="Logo" width="100" height="60"
                        class="d-inline-block align-text-top logoimg">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    navigation>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item {{ Request::routeIs('home.index') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home.index') }}">
                                {{ __('home') }}
                            </a>
                        </li>
                        <li class="nav-item {{ Request::routeIs('home.show') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home.show') }}">
                                {{ __('features') }}
                            </a>
                        </li>
                        <li class="nav-item {{ Request::routeIs('home.staff') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home.staff') }}">
                                {{ __('staff') }}
                            </a>
                        </li>
                        <li class="nav-item {{ Request::routeIs('home.access') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home.access') }}">
                                {{ __('access') }}
                            </a>
                        </li>
                        <li class="nav-item {{ Request::routeIs('home.recruit') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home.recruit') }}">
                                {{ __('recruit') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="fixed-icons">
            <a href="#">
                <i class="bi bi-line icon"></i>
                <img src="images/LINE_Brand_icon.png" alt="Line" class="icon">
            </a>
            <a href="#" class="insta_btn">
                <span class="insta icon">
                    <i class="fa fa-instagram"></i>
                </span>
            </a>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </main>

    <div class="slide-animation">
        <ul class="slide-contents">
            <li><img src="images/parking.jpg" alt=""></li>
            <li><img src="images/exterior.jpg" alt=""></li>
            <li><img src="images/bet.jpg" alt=""></li>
            <li><img src="images/waitingroom.jpg" alt=""></li>
            <li><img src="images/Cashier.jpg" alt=""></li>
        </ul>
        <ul class="slide-contents">
            <li><img src="images/parking.jpg" alt=""></li>
            <li><img src="images/exterior.jpg" alt=""></li>
            <li><img src="images/bet.jpg" alt=""></li>
            <li><img src="images/waitingroom.jpg" alt=""></li>
            <li><img src="images/Cashier.jpg" alt=""></li>
        </ul>
        <ul class="slide-contents">
            <li><img src="images/parking.jpg" alt=""></li>
            <li><img src="images/exterior.jpg" alt=""></li>
            <li><img src="images/bet.jpg" alt=""></li>
            <li><img src="images/waitingroom.jpg" alt=""></li>
            <li><img src="images/Cashier.jpg" alt=""></li>
        </ul>
    </div>
    <footer class="mt-5 text-center">
        <div class="container">
            <div class="row justify-content-between align-items-center py-5">
                <!-- 左側：ロゴとアドレス -->
                <div class="col-md-6 d-flex flex-column align-items-center">
                    <a class="navbar-brand" href="{{ route('home.index') }}">
                        <img src="images/logo3.png" alt="Logo" width="200" height="90"
                            class="d-inline-block align-text-top logoimg">
                    </a>
                    <address>
                        <span>〒332‐0021　埼玉県川口市西川口4‐18‐24</span>
                        <a class="nav-link link-secondary" href="tel:048‐252-6644">TEL / FAX 048‐252-6644</a>
                    </address>
                </div>
                <!-- 右側：リンク -->
                <div class="col-md-6">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link link-secondary" href="{{ route('home.index') }}">
                                {{ __('home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary" href="{{ route('home.show') }}">
                                {{ __('features') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary" href="{{ route('home.show') }}">
                                {{ __('staff') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary" href="{{ route('home.access') }}">
                                {{ __('access') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary" href="{{ route('home.recruit') }}">
                                {{ __('recruit') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <small class="bootstrap_color">&copy; 2024 3h_care.inc</small>
        </div>
    </footer>

</body>

</html>
