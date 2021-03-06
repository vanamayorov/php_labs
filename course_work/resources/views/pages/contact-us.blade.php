@extends('layouts.master')
@section('title', 'Контакты')
@section('content')
    <section class="contact">
        <div class="container">
            <h1 class="title contact__title">
                Наши контакты
            </h1>

            <div class="row justify-content-between">
                <div class="col-lg-3 mb-5">
                    <ul class="contact__list">
                        <li class="contact__item contact__item--phone">
                            <div class="contact__item-body">
                                <span class="contact__hint">Телефон</span>
                                <a class="contact__link" href="tel:380677777777">+380 677 777 777</a>
                            </div>
                        </li>
                        <li class="contact__item contact__item--mail">
                            <div class="contact__item-body">
                                <span class="contact__hint">E-mail</span>
                                <a class="contact__link" href="mailto:info@pdv.ooo">info@pdv.ooo</a>
                            </div>
                        </li>
                        <li class="contact__item contact__item--wapp">
                            <div class="contact__item-body">
                                <span class="contact__hint">Whatsapp</span>
                                <a class="contact__link" href="tel:380677777777">+380 677 777 777</a>
                            </div>
                        </li>
                        <li class="contact__item contact__item--skype">
                            <div class="contact__item-body">
                                <span class="contact__hint">Skype</span>
                                <a class="contact__link" href="#">sxy-bolts.cn</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="contact__detail-info detail-info">
                        <ul class="detail-info__list">
                            <li class="detail-info__item">
                                <div class="detail-info__left">Полное наименование:</div>
                                <div class="detail-info__right">ООО "Поставщик Дальнего Востока"</div>
                            </li>
                            <li class="detail-info__item">
                                <div class="detail-info__left">ИНН:</div>
                                <div class="detail-info__right">7329023100</div>
                            </li>
                            <li class="detail-info__item">
                                <div class="detail-info__left">ОГРН:</div>
                                <div class="detail-info__right">1167325074762</div>
                            </li>
                            <li class="detail-info__item">
                                <div class="detail-info__left">Адрес:</div>
                                <div class="detail-info__right">
                                    Украина, Запорожская обл, проезд Первых Резидентов дом 3
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
