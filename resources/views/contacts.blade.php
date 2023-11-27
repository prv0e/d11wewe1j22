@extends('layouts.main')
@section('content')
<section>
    <div class="text-bg-dark">
        <div class="container">
            <div class="row justify-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d140.7605041928631!2d37.43940836505353!3d55.63389028021316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b552884be84cdf%3A0x33744ec2b879f54d!2z0JrQuNC10LLRgdC60L7QtSDRiC4sIDIyLdCZLCDQnNC-0YHQutC-0LLRgdC60LjQuSwg0J_QvtGB0LXQu9C10L3QuNC1LCDQnNC-0YHQutCy0LAsIDEwODgxMQ!5e0!3m2!1sru!2sru!4v1700996730497!5m2!1sru!2sru" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="row justify-content-center mb-5 mt-5">
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
                <div class="col align-self-end">
                    <div class="w-75 mx-auto">
                        <h6>Написать в мессенджер</h6>
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
                        <br>
                        <h5>г. Москва, км Киевское Шоссе 22-й (П Московский)</h5>
                        <br>
                        <h5>Рабочие дни: Пн-Пт
                            <br>
                            Время работы: 9:00–18:00</h5>
                        <br>
                        <a href="tel:+74230992321"><h5>+7930 123-32-32</h5> </a>
                        <a href="mailto:info@rost.ru"><h5>info@rost.ru</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
