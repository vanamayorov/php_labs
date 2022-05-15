@extends('layouts.master')
@section('title', 'Сотрудники')
@section('content')
    <section class="staff">
        <div class="container">
            <h1 class="title">
                Сотрудники компании
            </h1>

            @isset($employees)
                <ul class="staff__list row">
                    @foreach($employees as $employee)
                        <li class="staff__item col-12 col-md-6">
                            <article class="staff-card">
                                <div class="staff-card__img-wrapper">
                                    <img class="staff-card__img" src="{{$employee['image']}}"
                                         alt="{{$employee['name']}}">
                                </div>

                                <div class="staff-card__content">
                                    <h3 class="staff-card__title">{{$employee['name']}}</h3>
                                    <div class="staff-card__position">{{$employee['position']}}</div>

                                    <ul class="staff-card__socials">
                                        <li class="staff-card__item">
                                            <a class="staff-card__link" href="{{$employee['inst_link']}}">
                                                <svg class="staff-card__svg">
                                                    <use xlink:href="img/sprite.svg#social-1"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="staff-card__item">
                                            <a class="staff-card__link" href="{{$employee['vk_link']}}">
                                                <svg class="staff-card__svg">
                                                    <use xlink:href="img/sprite.svg#social-2"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="staff-card__item">
                                            <a class="staff-card__link" href="{{$employee['linkedin_link']}}">
                                                <svg class="staff-card__svg">
                                                    <use xlink:href="img/sprite.svg#social-3"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                    @endforeach
                </ul>
            @endisset

            @empty($employees)
                <p>Возникла ошибка с отображением сотрудников компании</p>
            @endempty

        </div>
    </section>
@endsection
