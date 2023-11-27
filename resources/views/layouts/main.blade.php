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
        <style>
            .carousel-caption {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
            }
            .container {
                overflow: hidden;
            }
            .obr1-container {
                position: relative;
                background-image: url('{{ Storage::url("img/bg/004.jpg") }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                overflow: hidden; /* Обязательно для применения размытия */
            }
            .obr2-container {
                position: relative;
                background-image: url('{{ Storage::url("img/bg/005.jpg") }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                overflow: hidden; /* Обязательно для применения размытия */
            }</style>
    @endsection
    @yield('head')
</head>
<body class="bg-body-tertiary">
<a id="start"></a>
@section('navbar')
<section class = "bar bar-3 bar-sm bg-secondary">
    <div class="text-bg-dark">
        <nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand d-md-none" href="#">
                    <svg class="bi" width="24" height="24"><use xlink:href="#aperture"></use></svg>
                    ООО "РОСТРУМ ПРАВО"
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="#offcanvas" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="#offcanvas" aria-labelledby="#offcanvasLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="#offcanvasLabel">Aperture</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1 justify-content-between">
                            <li class="nav-item active">
                                    <div class="site-logo">
                                        <a class="custom-logo-link" rel="home" aria-current="page">
                                            <img src="{{ Storage::url('img/bg/logo.png') }}" class="custom-logo" width="40" height="40" alt='ООО "РОСТРУМ ПРАВО"' decoding="async">
                                        </a>
                                    </div>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="{{ route('main.index') }}">Частным лицам</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('post.index') }}">Бизнесу</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact.index') }}">Контакты</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about.index') }}">О нас</a></li>
                            <li class="nav-item text-end">
                                <a class="nav-link" href="tel:+75423123656">+7 542 312 36 56</a>
                            </li>
                            <li class="nav-item text-end">
                                <div class="social-icons d-flex align-items-center">
                                    <div class="social-icon telegram me-3">
                                        <a href="http://t.me/testtest" target="_blank">
                                            <img src="{{ Storage::url('img/nav/icon-telegram.svg') }}" width="40" height="40" alt="" class="filter-white">
                                        </a>
                                    </div>
                                    <div class="social-icon viber me-3">
                                        <a href="viber://chat?number=%2B77777777777" target="_blank">
                                            <img src="{{ Storage::url('img/nav/icon-viber.svg') }}" width="40" height="40" alt="" class="filter-white">
                                        </a>
                                    </div>
                                    <div class="social-icon whatsapp me-3">
                                        <a href="https://wa.me/+777777777777" target="_blank">
                                            <img src="{{ Storage::url('img/nav/icon-whatsapp.svg') }}" width="40" height="40" alt="" class="filter-white">
                                        </a>
                                    </div>
                                    <div class="social-icon fb-messenger me-3">
                                        <a href="http://m.me/test" target="_blank">
                                            <img src="{{ Storage::url('img/nav/icon-messenger.svg') }}" width="40" height="40" alt="" class="filter-white">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item text-end" >
                                <div class="btn btn-secondary">Записаться</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>
@show
@yield('content')
@yield('contacts')
@yield('about')
@yield('main')
@section('footerScripts')
    <script src = "/bootstrap/js/bootstrap.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Получаем переключатели и контент
            var radio1 = document.getElementById('btnradio1');
            var radio2 = document.getElementById('btnradio2');
            var content1 = document.getElementById('content1');
            var content2 = document.getElementById('content2');

            // Обработчик события для переключения
            radio1.addEventListener('change', function () {
                content1.style.display = 'block';
                content2.style.display = 'none';
            });

            radio2.addEventListener('change', function () {
                content1.style.display = 'none';
                content2.style.display = 'block';
            });
        });
    </script>
@show

@section('footer')
        <div class="text-bg-dark">
            <div class="container">
                <div class="alert-dark" role="alert">
                    <h1 class="mb-2 mt-2 text-center text-white"> Частые вопросы </h1>
                </div>
                <div class="accordion accordion-flush rounded-3" id="accordionFlushExample">
                    <div class="accordion-item rounded-3">
                        <button class="accordion-button collapsed bg-dark-subtle rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <h5> Какой опыт работы нашего адвокатского бюро?</h5>
                        </button>
                        <div id="flush-collapseOne" class="accordion-collapse collapse rounded-3" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <h6>Наша компания успешно практикует на рынке юридических услуг с января 2021 года.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3">
                        <h2 class="accordion-header rounded-3">
                            <button class="accordion-button collapsed bg-dark-subtle rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <h5>Какая стоимость юридических услуг?</h5>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse rounded-3" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <h6>Стоимость услуг зависит от сложности и специфики конкретного дела. Наши цены являются доступными, конкурентными и всегда окупаемыми для наших Клиентов.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3">
                        <h2 class="accordion-header rounded-3">
                            <button class="accordion-button collapsed bg-dark-subtle rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                <h5>Какие способы оплаты?</h5>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse rounded-3" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <h6>Любая удобная для клиента форма оплаты: наличный/безналичный расчет. Также мы предоставляем рассрочку и отсрочку оплаты ваших услуг.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-3">
                        <h2 class="accordion-header rounded-3">
                            <button class="accordion-button collapsed bg-dark-subtle rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                <h5>Где находится наш офис?</h5>
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse rounded-3" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body rounded-3">
                                <h6> Мы находимся по адресу г. Москва, км Киевское Шоссе 22-й (П Московский)</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid obr2-container mt-5 justify-content-center">
                <div class="row">
                    {{--                <img src="{{ Storage::url('img/bg/005.jpeg') }}" class="img-fluid rounded-3" alt="...">--}}
                    <form>
                        <div class="row text-center">
                            <h2>Запишитесь на консультацию</h2>
                            <h4>Оставьте заявку и мы свяжемся с вами в течении 30 секунд</h4>
                        </div>
                        <div class="row g-3 justify-content-center text-center">
                            <div class="col-4">
                                <label for="exampleInputName" class="form-label">Имя</label>
                                <input type="email" class="form-control" id="exampleInputName" placeholder="Ваше имя" aria-describedby="emailHelp">
                            </div>
                            <div class="col-4">
                                <label for="exampleInputTel" class="form-label">Номер телефона</label>
                                <input type="tel" class="form-control" id="exampleInputTel" placeholder="Номер телефона">
                            </div>
                            <div class="col-4 align-self-end">
                                <button type="submit" class="btn btn-info w-100">Записаться на консультацию</button>
                            </div>
                        </div>
                        <div class="row mt-4">

                            <h6>Нажимая кнопку «Перезвонить мне» вы соглашаетесь с политикой обработки персональных данных</h6>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container">

                <h2 class="mt-4">Оказание юридических услуг частным лицам</h2>
                <p>Мы готовы представлять Ваши интересы и защищать Ваши права в общих и специализированных судах всех инстанций, что включает в себя:</p><br>

                <p>• анализ имеющихся документов по спору и рекомендации по его разрешению;</p>
                <p>• планирование стратегии и тактики защиты клиента в судах;</p>
                <p>• составление исков, встречных исков, отзывов и возражений на них, иных ходатайств, заявлений и жалоб.</p>
                <p>• защита прав и законных интересов клиента в суде на всех стадиях судебного процесса и во всех судебных инстанциях;</p>
                <p>• пересмотр (обжалование) решений в вышестоящих инстанциях, путем подготовки апелляционных и кассационных жалоб;</p><br>

                <h2>Обратившись за помощью к нам, вы получите 100% защиту Ваших прав в суде.</h2><br>
                <h4>Мы сопровождаем судебный процесс на всех его стадиях и до фактического исполнения решения суда.</h4>
            </div>
            <footer class="container py-5">
                <div class="row">
                    <div class="col-6 col-md">
                        <img src="{{ Storage::url('img/bg/logo.png') }}" class="custom-logo" width="40" height="40" alt='ООО "РОСТРУМ ПРАВО"' decoding="async">
                    </div>
                    <div class="col-6 col-md">
                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ссылки</font></font></h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Блог</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">О компании</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Контакты</font></font></a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <div class="col align-self-end">
                            <div class="mx-auto">
                                <a>Написать в мессенджер</a>
                                <div class="social-icons d-flex align-items-center">
                                    <div class="social-icon telegram me-3">
                                        <a href="http://t.me/testtest" target="_blank">
                                            <img src="{{ Storage::url('img/nav/icon-telegram.svg') }}" width="30" height="30" alt="" class="filter-white">
                                        </a>
                                    </div>
                                    <div class="social-icon viber me-3">
                                        <a href="viber://chat?number=%2B77777777777" target="_blank">
                                            <img src="{{ Storage::url('img/nav/icon-viber.svg') }}" width="30" height="30" alt="" class="filter-white">
                                        </a>
                                    </div>
                                    <div class="social-icon whatsapp me-3">
                                        <a href="https://wa.me/+777777777777" target="_blank">
                                            <img src="{{ Storage::url('img/nav/icon-whatsapp.svg') }}" width="30" height="30" alt="" class="filter-white">
                                        </a>
                                    </div>
                                    <div class="social-icon fb-messenger me-3">
                                        <a href="http://m.me/test" target="_blank">
                                            <img src="{{ Storage::url('img/nav/icon-messenger.svg') }}" width="30" height="30" alt="" class="filter-white">
                                        </a>
                                    </div>
                                </div>
                                <br>
                                <a>г. Москва, км Киевское Шоссе 22-й (П Московский)</a>
                                <br>
                                <a>Рабочие дни: Пн-Пт
                                    <br>
                                    Время работы: 9:00–18:00</a>
                                <br>
                                <a href="tel:+74230992321">+7930 123-32-32</a>
                                <a href="mailto:info@rost.ru">info@rost.ru</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d140.76050412177838!2d37.4394084!3d55.6338903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b552884be84cdf%3A0x33744ec2b879f54d!2z0JrQuNC10LLRgdC60L7QtSDRiC4sIDIyLdCZLCDQnNC-0YHQutC-0LLRgdC60LjQuSwg0J_QvtGB0LXQu9C10L3QuNC1LCDQnNC-0YHQutCy0LAsIDEwODgxMQ!5e0!3m2!1sru!2sru!4v1701001181506!5m2!1sru!2sru" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </footer>
        </div>
    </section>
@show
</body>
</html>
