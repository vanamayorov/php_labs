@extends('layouts.master')
@section('title', 'Главная')
@section('content')
    <section class="main-screen">
        <div class="container">
            <div class="main-screen__inner">
                <div class="row main-screen__center">
                    <div class="col-12 col-lg-6 main-screen__row">
                        <div class="main-screen__content">
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{!! Session::get('success') !!}</li>
                                    </ul>
                                </div>
                            @endif
                            <h1 class="title main-screen__title">
                                Поставщик Дальнего Востока
                            </h1>

                            <div class="description-info main-screen__desc">
                                <p>
                                    Наши клиенты получают полный спектр услуг по работе с Китаем.
                                </p>
                                <p>
                                    Начиная с подбора производителя заканчивая доставкой товара до двери.
                                </p>
                                <p>
                                    Настолько прозрачных сделок с Китаем вы еще не осуществляли.
                                </p>
                            </div>

                            <a class="main-screen__link" href="#">Узнать больше</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 main-screen__row">
                        <div class="main-screen__img-wrapper">
                            <img class="main-screen__img" src="img/index/1.png" alt="Cars">
                        </div>
                    </div>
                </div>
                <div class="row main-screen__services services">
                    <div class="col-lg-4">
                        <article class="services-card">
                            <div class="services-card__icon-wrapper">
                                <svg class="services-card__svg">
                                    <use xlink:href="img/sprite.svg#services-1"></use>
                                </svg>
                            </div>
                            <div class="services-card__content">
                                <h3 class="services-card__title">
                                    Поиск производителей по товару
                                </h3>
                                <div class="services-card__description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        incididunt
                                        ut.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <article class="services-card">
                            <div class="services-card__icon-wrapper">
                                <svg class="services-card__svg">
                                    <use xlink:href="img/sprite.svg#services-2"></use>
                                </svg>
                            </div>
                            <div class="services-card__content">
                                <h3 class="services-card__title">
                                    Поиск конкретного производителя
                                </h3>
                                <div class="services-card__description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        incididunt
                                        ut.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <article class="services-card">
                            <div class="services-card__icon-wrapper">
                                <svg class="services-card__svg">
                                    <use xlink:href="img/sprite.svg#services-3"></use>
                                </svg>
                            </div>
                            <div class="services-card__content">
                                <h3 class="services-card__title">
                                    Доставка образцов товаров
                                </h3>
                                <div class="services-card__description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        incididunt
                                        ut.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="working-sphere">
        <div class="container">

            <div class="row">
                <div class="col-12 col-lg-7">
                    <h2 class="title">
                        В какой сфере вы работаете?
                    </h2>

                    <div class="description-info working-sphere__desc">
                        Мы проводим опрос среди пользователей сайта, чтобы предоставить Вам информацию
                        соответствующую сфере
                        Вашей
                        деятельности.
                    </div>

                </div>
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-7">
                        <form class="survey-form">
                            <div class="survey-form__row">
                                <label class="survey-form__label">
                                    <input class="survey-form__input" name="survey" type="radio" checked>
                                    <span class="survey-form__checkbox"></span>
                                    <span class="survey-from__content">
                                <h3 class="survey-from__title">Я работаю на производстве</h3>
                                <div class="survey-from__desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </span>
                                </label>
                            </div>

                            <div class="survey-form__row">
                                <label class="survey-form__label">
                                    <input class="survey-form__input" name="survey" type="radio">
                                    <span class="survey-form__checkbox"></span>
                                    <span class="survey-from__content">
                                <h3 class="survey-from__title">Я поставляю товары</h3>
                                <div class="survey-from__desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </span>
                                </label>
                            </div>

                            <div class="survey-form__row">
                                <label class="survey-form__label">
                                    <input class="survey-form__input" name="survey" type="radio">
                                    <span class="survey-form__checkbox"></span>
                                    <span class="survey-from__content">
                                <h3 class="survey-from__title">Я помогаю подобрать оборудование</h3>
                                <div class="survey-from__desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </span>
                                </label>
                            </div>

                        </form>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="working-sphere__stats">
                            <p>Проголосовало:</p>
                            <div><span>1107</span> пользователей</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-us">
        <div class="container">
            <div class="why-us__banner">
                <div class="why-us__top">
                    <h2 class="why-us__title title">Почему с нами выгоднее?</h2>
                </div>
                <div class="why-us__bg" style="background-image: url('img/index/bg.png')"></div>
            </div>

            <ul class="row why-us__list">
                <li class="col-sm-12 col-lg-6 why-us__item">
                    <article class="why-us-card">
                        <div class="why-us-card__icon-wrapper">
                            <svg class="why-us-card__svg">
                                <use xlink:href="img/sprite.svg#why-us-1"></use>
                            </svg>
                        </div>

                        <div class="why-us-card__content">
                            <h3 class="why-us-card__title">
                                Lorem ipsum dolor sit amet
                            </h3>

                            <div class="description-info why-us__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut.
                            </div>
                        </div>
                    </article>
                </li>
                <li class="col-sm-12 col-lg-6 why-us__item">
                    <article class="why-us-card">
                        <div class="why-us-card__icon-wrapper">
                            <svg class="why-us-card__svg">
                                <use xlink:href="img/sprite.svg#why-us-2"></use>
                            </svg>
                        </div>

                        <div class="why-us-card__content">
                            <h3 class="why-us-card__title">
                                Lorem ipsum dolor sit amet
                            </h3>

                            <div class="description-info why-us__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut.
                            </div>
                        </div>
                    </article>
                </li>
                <li class="col-sm-12 col-lg-6 why-us__item">
                    <article class="why-us-card">
                        <div class="why-us-card__icon-wrapper">
                            <svg class="why-us-card__svg">
                                <use xlink:href="img/sprite.svg#why-us-3"></use>
                            </svg>
                        </div>

                        <div class="why-us-card__content">
                            <h3 class="why-us-card__title">
                                Lorem ipsum dolor sit amet
                            </h3>

                            <div class="description-info why-us__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut.
                            </div>
                        </div>
                    </article>
                </li>
                <li class="col-sm-12 col-lg-6 why-us__item">
                    <article class="why-us-card">
                        <div class="why-us-card__icon-wrapper">
                            <svg class="why-us-card__svg">
                                <use xlink:href="img/sprite.svg#why-us-4"></use>
                            </svg>
                        </div>

                        <div class="why-us-card__content">
                            <h3 class="why-us-card__title">
                                Lorem ipsum dolor sit amet
                            </h3>

                            <div class="description-info why-us__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut.
                            </div>
                        </div>
                    </article>
                </li>
            </ul>
        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div class="contact-us__inner">
                <div class="contact-us__left">
                    <div class="contact-us__content">
                        <h2 class="title contact-us__title">
                            Свяжитесь с нами
                        </h2>

                        <form
                            class="contact-us__form"
                            method="post"
                            action="{{route('sendTask')}}"
                            enctype="multipart/form-data">
                            @csrf
                            <span style="color: red; font-size: 14px;">@error('task'){{$message}}@enderror</span>
                            <textarea
                                class="contact-us__textarea"
                                placeholder="Опишите задачу..."
                                name="task"
                            ></textarea>
                            <span style="color: red; font-size: 14px;">@error('task'){{$message}}@enderror</span>
                            <label class="contact-us__label contact-us__label--tz">
                                <input class="contact-us__input" type="file" name="tz">
                                <div>
                                    Прикрепите ТЗ
                                </div>

                            </label>
                            <span style="color: red; font-size: 14px;">@error('task'){{$message}}@enderror</span>
                            <label class="contact-us__label contact-us__label--photo">
                                <input class="contact-us__input" type="file" name="photo">
                                <div>
                                    Добавьте фото товара
                                </div>
                            </label>

                            <button class="contact-us__btn" type="submit">Отправить заявку</button>
                        </form>
                    </div>
                </div>
                <div class="contact-us__right">
                    <img class="contact-us__img" src="img/index/contact-bg.jpg" alt="Contact us background">
                </div>
            </div>
        </div>
    </section>
    <section class="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <h2 class="title">Видео о нашей работе</h2>
                    <div class="description-info">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Elit duis tristique sollicitudin nibh sit amet. Ultrices eros in
                        cursus
                        turpis massa tincidunt. Venenatis urna cursus eget nunc scelerisque viverra mauris in.
                        Pharetra
                        convallis posuere morbi leo urna. Eget sit amet tellus cras adipiscing.
                    </div>
                </div>
            </div>
            <div class="video__content">
                <div class="video__bg"
                     style="background-image: url('img/index/video-bg.jpg')"
                     data-src="https://www.youtube.com/embed/si3ZJR02bQ4?autoplay=1">
                    <button class="video__play-btn" type="button">
                        <svg class="video__svg">
                            <use xlink:href="img/sprite.svg#play"></use>
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </section>
@endsection
