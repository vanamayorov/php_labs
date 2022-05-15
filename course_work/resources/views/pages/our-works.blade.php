@extends('layouts.master')
@section('title', 'Наши работы')
@section('content')
    <section class="finished-works">
        <div class="container">
            <h1 class="title">Выполненные работы</h1>
            <div class="description-info">
                <p>
                    Мы собрали информацию по грузам, которые мы уже доставили.
                </p>

                <p>
                    У нас специальный подход к каждому виду товаров.
                </p>
            </div>

            @isset($works)
                <div class="swiper finished-works__swiper">
                    <div class="swiper-wrapper">
                        @foreach($works as $work)
                            <div class="swiper-slide finished-works__slide">
                                <article class="finished-works-card">
                                    <div class="finished-works-card__img-wrapper">
                                        <img class="finished-works-card__img" src="{{$work['image']}}"
                                             alt="{{$work['title']}}">
                                    </div>

                                    <div class="finished-works-card__content">
                                        <h3 class="finished-works-card__title">{{$work['title']}}</h3>
                                        <div class="finished-works-card__desc">
                                            {{$work['description']}}
                                        </div>

                                        <span class="finished-works-card__price">
                                            {{$work['price']}} грн.
                                        </span>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            @endisset

            @empty($works)
                <p>Возникла ошибка с отображением выполенных работ</p>
            @endempty
        </div>
    </section>
    <section class="stages">
        <div class="container">
            <h2 class="title">
                Этапы поставки
            </h2>

            <ul class="stages__list">
                <li class="stages__item">
                    <div class="stages__num">
                        1
                    </div>

                    <article class="stages-card">
                        <div class="stages-card__img-wrapper">
                            <img class="stages-card__img" src="img/our-works/stages-1.jpg" alt="Stages card img">
                        </div>

                        <div class="stages-card__content">
                            <h3 class="stages-card__title">Предложение от продавца</h3>
                            <div class="stages-card__desc description-info">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Elit duis tristique sollicitudin nibh
                                sit
                                amet. Ultrices eros in cursus turpis massa tincidunt. Venenatis urna cursus eget
                                nunc
                                scelerisque viverra mauris in.
                            </div>
                        </div>
                    </article>
                </li>
                <li class="stages__item">
                    <div class="stages__num">
                        2
                    </div>

                    <article class="stages-card">
                        <div class="stages-card__img-wrapper">
                            <img class="stages-card__img" src="img/our-works/stages-1.jpg" alt="Stages card img">
                        </div>

                        <div class="stages-card__content">
                            <h3 class="stages-card__title">Доставка</h3>
                            <div class="stages-card__desc description-info">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Elit duis tristique sollicitudin nibh
                                sit
                                amet. Ultrices eros in cursus turpis massa tincidunt. Venenatis urna cursus eget
                                nunc
                                scelerisque viverra mauris in.
                            </div>
                        </div>
                    </article>
                </li>
                <li class="stages__item">
                    <div class="stages__num">
                        3
                    </div>

                    <article class="stages-card">
                        <div class="stages-card__img-wrapper">
                            <img class="stages-card__img" src="img/our-works/stages-1.jpg" alt="Stages card img">
                        </div>

                        <div class="stages-card__content">
                            <h3 class="stages-card__title">Установка у клиента</h3>
                            <div class="stages-card__desc description-info">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Elit duis tristique sollicitudin nibh
                                sit
                                amet. Ultrices eros in cursus turpis massa tincidunt. Venenatis urna cursus eget
                                nunc
                                scelerisque viverra mauris in.
                            </div>
                        </div>
                    </article>
                </li>
            </ul>
        </div>
    </section>
@endsection
