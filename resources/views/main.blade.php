@extends('layouts.main')
@section('content')
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
        }

    </style>
    <div class="text-bg-dark">
        <div id="carouselExampleCaptions" class="carousel slide container text-bg-dark">
            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded-3 mb-4">
                <div class="carousel-item active">
                    <img src="{{ Storage::url('img/bg/001.jpeg') }}" class="d-block w-100" alt="Index-1">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Юридическая компания ООО "РОСТРУМ ПРАВО". </h1>
                        <p>Услуги адвокатов в Москве.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ Storage::url('img/bg/002.jpeg') }}" class="d-block w-100" alt="Index-2">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Юридическая компания ООО "РОСТРУМ ПРАВО".</h1>
                        <p> Деятельность в области права.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ Storage::url('img/bg/003.jpeg') }}" class="d-block w-100" alt="index-1">
                    <div class="carousel-caption d-none d-md-block ">
                        <div class="row justify-content-center mb-5 mt-5 text-bg-dark">
                            <div class="col ">
                                <div class="w-75 mx-auto">
                                    <h1>Связаться с нами
                                    </h1>
                                    <h4>
                                        Оставьте заявку и мы свяжемся с вами в течении 30 секунд
                                    </h4>
                                </div>
                                <form class="text-center align-self-center">
                                    <div class="w-50 mx-auto">
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="form-label">Имя</label>
                                            <input type="text" class="form-control" id="exampleInputName"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Ваше имя">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputTel" class="form-label">Телефон</label>
                                            <input type="tel" class="form-control" id="exampleInputTel"
                                                   placeholder="+7 (---) --- -- --">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Записаться на консультацию</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
        <div class="container px-5" style="margin-top: -8em;">
        @section('info1')
            <div class="container card mb-2 mt-3 bg-dark-subtle text-start">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h2>960 +</h2>
                        <span class="txt-15">Выигранных судебных дел</span>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h2>50+</h2>
                        <span class="txt-15">Постоянных клиентов</span>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h2>150+</h2>
                        <span class="txt-15">Выигранных тендеров</span>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h2>10 лет</h2>
                        <span class="txt-15">Юридической практики</span>
                    </div>
                </div>
            </div>
        @show
        </div>
        <div class="container text-center mt-5 mb-5">
            <div class="row mb-4">
                <div class="col text-start">
                    <h3>Услуги</h3>
                </div>
                <div class="col text-end">
                    <div class="btn-group" role="group" aria-label="Базовая группа переключателей радио">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-light" for="btnradio1">Частным лицам</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-light" for="btnradio2">Бизнесу</label>
                    </div>
                </div>
            </div>
            <div id="content1">
                <div class="row mt-2 mb-2 gap-2">
                    <div class="col">
                        <button class="btn btn-outline-light w-100" type="button">Банковские споры</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100" type="button">Семейные споры</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100" type="button">Наследственные споры</button>
                    </div>
                </div>
                <div class="row mt-2 mb-2 gap-2">
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Трудовые споры</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Административные споры</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Пенсионные споры</button>
                    </div>
                </div>
                <div class="row mt-2 mb-2 gap-2">
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Налоговые споры</button>

                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Гражданские споры</button>

                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Споры о праве собственности</button>

                    </div>
                </div>
                <div class="row mt-2 mb-2 gap-2">
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Земельные споры</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Жилищные споры</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Административные правонарушения</button>
                    </div>
                </div>
                <div class="row mt-2 mb-2 gap-2">
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Автоюрист</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Уголовное право</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Военное право</button>
                    </div>
                </div>
                <div class="row mt-2 mb-2 gap-2">
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Миграционное право</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Исполнительное производство</button>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
            <div id="content2" style="display: none;">
                <div class="row mt-2 mb-2 gap-2">
                    <div class="col">
                        <button class="btn btn-outline-light w-100" type="button">Юридический аутсорсинг</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100" type="button">Государственные закупки</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100" type="button">Налоговые споры</button>
                    </div>
                </div>
                <div class="row mt-2 mb-2 gap-2">
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Административные споры</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Хозяйственные споры</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Корпоративное право</button>
                    </div>
                </div>
                <div class="row mt-2 mb-2 gap-2">
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Трудовые споры</button>

                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Административные правонарушения</button>

                    </div>
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Интеллектуальная собственность</button>

                    </div>
                </div>
                <div class="row mt-2 mb-2 gap-2">
                    <div class="col">
                        <button class="btn btn-outline-light w-100 " type="button">Лицензии и разрешительные документы</button>
                    </div>
                    <div class="col">
                    </div>
                    <div class="col">
                    </div>
            </div>
        </div>
        <div class="container text-start mt-5">
            <div class="clearfix">
                <img src="{{ Storage::url('img/bg/logo.png') }}" class="col-md-4 float-md-end mb-3 ms-md-3"  alt="Logo">

                <p>"Общество с ограниченной ответственностью "Рострум Право," зарегистрированное
                    в едином государственном реестре юридических лиц 26 ноября 2020 года,
                    успешно ориентируется в сфере деятельности в области права. Несмотря на относительную
                    молодость — 2 года и 11 месяцев — компания проявляет динамичное развитие, опережая
                    средний возраст юридических лиц в этой сфере, который составляет 8 лет.
                </p>
                <p>Организация состоит на учете в Межрайонной инспекции Федеральной налоговой службы № 51 по
                    г. Москве (код инспекции – 7751). Регистрационные номера в Пенсионном фонде России и
                    Фонде социального страхования соответственно: 087713052655 и 773409445777341, выданные
                    27 ноября 2020 года.
                </p>
                <p>"Рострум Право" также активно участвует в решении арбитражных международных дел, предоставляя
                    высококвалифицированные юридические услуги для клиентов с глобальными интересами. Компания
                    гордится своим вкладом в обеспечение справедливости и защиту интересов своих заказчиков в
                    мировом масштабе.
                </p>

                <p>Коллектив "Рострум Право" представлен высококвалифицированными юристами, обладающими
                    профессиональным опытом в различных областях права. Наши эксперты предоставляют комплексные
                    юридические консультации, обеспечивая качественное обслуживание и поддержку наших клиентов
                    в решении сложных правовых вопросов."
                </p>
            </div>
        </div>
        <div class="container alert alert-dark text-start" role="alert">
            <div class="row mt-1 mb-4">
                <div class="col">
                    <div class="card h-100 w-100">
                        <img src="{{ Storage::url('img/elem/whyus-1.webp') }}" class="card-img-top m-lg-3" style="width: 2rem;" alt="Команда">
                        <div class="card-body">
                            <h3>Команда</h3>
                            <p class="card-text">Над проектами работают профильные адвокаты и юристы, с чёткой специализацией и опытом свыше 5 лет</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 w-100">
                        <img src="{{ Storage::url('img/elem/whyus-2.webp') }}" class="card-img-top m-lg-3" style="width: 2rem;" alt="Команда">
                        <div class="card-body">
                            <h3>Результат</h3>
                            <p class="card-text">Достижение необходимого клиенту результата — наша приоритетная цель и главная миссия компании</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 w-100">
                        <img src="{{ Storage::url('img/elem/whyus-3.webp') }}" class="card-img-top m-lg-3" style="width: 2rem;" alt="Команда">
                        <div class="card-body">
                            <h3>Время</h3>
                            <p class="card-text">Чёткое планирование и соблюдение сроков экономит время клиентов</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mb-1">
                <div class="col">
                    <div class="card h-100 w-100">
                        <img src="{{ Storage::url('img/elem/whyus-4.webp') }}" class="card-img-top m-lg-3" style="width: 2rem;" alt="Команда">
                        <div class="card-body">
                            <h3>Конфиденциальность</h3>
                            <p class="card-text">Используем сервера с дополнительной защитой, что даёт гарантию безопасности информации клиентов
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 w-100">
                        <img src="{{ Storage::url('img/elem/whyus-5.webp') }}" class="card-img-top m-lg-3" style="width: 2rem;" alt="Команда">
                        <div class="card-body">
                            <h3>Лояльность</h3>
                            <p class="card-text">Политика компании позволяет быть гибкими для наших клиентов в вопросах ценообразования и порядке оплаты услуг
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 w-100">
                        <img src="{{ Storage::url('img/elem/whyus-6.webp') }}" class="card-img-top m-lg-3" style="width: 2rem;" alt="Команда">
                        <div class="card-body">
                            <h3>Комплексность</h3>
                            <p class="card-text">Комплексное сопровождение процессов «под ключ» позволяет достигнуть необходимых результатов
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @yield('info1')
        <div class="mt-5" style="margin-top: 5rem">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="360000">
                            <div class="row justify-content-center">
                                <div class="col-sm-3 mb-sm-3">
                                    <div class="card text-bg-dark" style="width: 18rem; margin-left: 0.5em;">
                                        <img src="{{ Storage::url('img/foto/001.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Жданов Алексей Иванович</h6>
                                        </div>
                                        <div class="card-body">
                                            <a class="list-group-item">Адвокат, управляющий</a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="card-link">Ссылка карточки</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-bg-dark" style="width: 18rem; margin-left: 0.5em;">
                                        <img src="{{ Storage::url('img/foto/002.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Наумова Анна Викторовна</h6>
                                        </div>
                                        <div class="card-body">
                                            <a class="list-group-item">Адвокат</a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="card-link">Ссылка карточки</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-bg-dark" style="width: 18rem; margin-left: 0.5em;">
                                        <img src="{{ Storage::url('img/foto/003.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Карасёв Сергей Александрович</h6>
                                        </div>
                                        <div class="card-body">
                                            <a class="list-group-item">Адвокат</a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="card-link">Ссылка карточки</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="360000">
                            <div class="row justify-content-center">
                                <div class="col-sm-3 mb-sm-3 ">
                                    <div class="card text-bg-dark" style="width: 18rem; margin-left: 0.5em;">
                                        <img src="{{ Storage::url('img/foto/004.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Коваленко Виталий Александрович</h6>
                                        </div>
                                        <div class="card-body">
                                            <a class="list-group-item">Адвокат</a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="card-link">Ссылка карточки</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-bg-dark" style="width: 18rem; margin-left: 0.5em;">
                                        <img src="{{ Storage::url('img/foto/005.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Быков Артур Александрович</h6>
                                        </div>
                                        <div class="card-body">
                                            <a class="list-group-item">Юрист</a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="card-link">Ссылка карточки</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card text-bg-dark" style="width: 18rem; margin-left: 0.5em;">
                                        <img src="{{ Storage::url('img/foto/006.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">Карелин Виктор Алексеевич</h6>
                                        </div>
                                        <div class="card-body">
                                            <a class="list-group-item">Юрист</a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="card-link">Ссылка карточки</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container obr1-container text-bg-success p-3 w-75 rounded-3">
            <form>
                <div class="row text-center ">
                    <h2>Получите решение своих проблем уже сегодня!</h2>
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
                        <button type="submit" class="btn btn-info w-100">Перезвонить мне</button>
                    </div>
                </div>
                <div class="row mt-4">

                        <h6>Нажимая кнопку «Перезвонить мне» вы соглашаетесь с политикой обработки персональных данных</h6>
                </div>
            </form>
        </div>



    </div>

@endsection
