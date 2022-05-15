<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__menu-wrapper">
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a class="menu__link {{request()->path() == '/' ? "menu__link--active" : ""}}" href="{{route('index')}}">
                                О нас
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link {{request()->path() == 'our-works' ? "menu__link--active" : ""}}" href="{{route('ourWorks')}}">
                                Наши работы
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link {{request()->path() == 'staff' ? "menu__link--active" : ""}}" href="{{route('staff')}}">
                                Сотрудники
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link {{request()->path() == 'contact-us' ? "menu__link--active" : ""}}" href="{{route('contactUs')}}">
                                Контакты
                            </a>
                        </li>
                    </ul>
                    <button class="menu__close-btn" type="button">
                        <svg class="menu__close-svg">
                            <use xlink:href="img/sprite.svg#cross-icon"></use>
                        </svg>
                    </button>
                </nav>

                <button class="header__menu-btn">
                    <svg class="header__menu-svg">
                        <use xlink:href="img/sprite.svg#menu-icon"></use>
                    </svg>
                </button>
            </div>


            <button class="header__contact-btn" type="button">
                Связаться <span>с отделом продаж</span>
            </button>
        </div>
    </div>
</header>

