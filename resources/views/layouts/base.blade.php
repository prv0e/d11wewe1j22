<!doctype html>
<html lang="ru">
<head>
    @section('head')
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <title>Юридическая компания ООО "РОСТРУМ ПРАВО". Услуги юриста, адвоката, цена</title>
    @endsection
    @yield('head')
</head>
<body class=" ">
    <a id="start"></a>
<section class = "bar bar-3 bar-sm bg-secondary">
    <div class="container">
        <div class="row">
            @section('navbar')
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <li class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <div class="nav-link">
                                <div class="site-logo"><a class="custom-logo-link" rel="home" aria-current="page"><img src="https://justice.dp.ua/wp-content/uploads/2021/10/justice_logo.svg" class="custom-logo" alt="Юридическая компания Justice в Днепре" decoding="async"></a></div>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="{{ route('main.index') }}">Частным лицам</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('post.index') }}">Бизнесу</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about.index') }}">Прайс-лист</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}">О нас</a>
                        </li>

                        <li class="nav-item text-end">
                            <div class="social-icons d-flex align-items-center">
                                <div class="social-icon telegram me-3">
                                    <a href="http://t.me/testtest" target="_blank">
                                        <img src="{{ Storage::url('img/icon-telegram.svg') }}" width="40" height="40" alt="" class="filter-white">
                                    </a>
                                </div>
                                <div class="social-icon viber me-3">
                                    <a href="viber://chat?number=%2B77777777777" target="_blank">
                                        <img src="{{ Storage::url('img/icon-viber.svg') }}" width="40" height="40" alt="" class="filter-white">
                                    </a>
                                </div>
                                <div class="social-icon whatsapp me-3">
                                    <a href="https://wa.me/+777777777777" target="_blank">
                                        <img src="{{ Storage::url('img/icon-whatsapp.svg') }}" width="40" height="40" alt="" class="filter-white">
                                    </a>
                                </div>
                                <div class="social-icon fb-messenger me-3">
                                    <a href="http://m.me/test" target="_blank">
                                        <img src="{{ Storage::url('img/icon-messenger.svg') }}" width="40" height="40" alt="" class="filter-white">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item text-end" >
                            <div class="btn btn-dark">Записаться</div>
                        </li>
                    </ul>
                </li>
            </nav>
            @show
        </div>
    </div>
</section>
    @yield('content')
    @yield('contacts')
    @yield('about')
    @yield('main')
    @section('footerScripts')
    <script src = "/bootstrap/js/bootstrap.js"></script>
    @show
</body>

</html>
