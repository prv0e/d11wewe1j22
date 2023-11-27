@extends('layouts.main')
@section('footerScripts')
    <script src = "/bootstrap/js/bootstrap.js"></script>
@show
@section('footer')
    <section>
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
        <div class="container mt-4">
            <h2>Оказание юридических услуг частным лицам</h2>
            <p>Мы готовы представлять Ваши интересы и защищать Ваши права в общих и специализированных судах всех инстанций, что включает в себя:</p><br>

            <p>• анализ имеющихся документов по спору и рекомендации по его разрешению;</p>
            <p>• планирование стратегии и тактики защиты клиента в судах;</p>
            <p>• составление исков, встречных исков, отзывов и возражений на них, иных ходатайств, заявлений и жалоб.</p>
            <p>• защита прав и законных интересов клиента в суде на всех стадиях судебного процесса и во всех судебных инстанциях;</p>
            <p>• пересмотр (обжалование) решений в вышестоящих инстанциях, путем подготовки апелляционных и кассационных жалоб;</p><br>

            <h2>Обратившись за помощью к нам, вы получите 100% защиту Ваших прав в суде.</h2><br>
            <h4>Мы сопровождаем судебный процесс на всех его стадиях и до фактического исполнения решения суда.</h4>
        </div>
        <div class="text-bg-dark">
            <footer class="container py-5">
                <div class="row">
                    <div class="col-12 col-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></svg>
                        <small class="d-block mb-3 text-body-secondary">© 2017–2023</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Функции</font></font></h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Классная вещь</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Случайная функция</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Функция команды</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Вещи для разработчиков</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Другой</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Последний раз</font></font></a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ресурсы</font></font></h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Имя ресурса</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ресурс</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Другой ресурс</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Последний ресурс</font></font></a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ресурсы</font></font></h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Бизнес</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Образование</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Правительство</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Игры</font></font></a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">О</font></font></h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Команда</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Локации</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Конфиденциальность</font></font></a></li>
                            <li><a class="link-secondary text-decoration-none" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Условия</font></font></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </section>
    </html>
@show
