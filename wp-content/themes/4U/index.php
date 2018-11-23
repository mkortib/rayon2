<?php get_header(); ?>

<!-- Main content container start -->
<main class="main">

    <?/*<div class="count__container">
        <p class="count__title">До повышения цен</p>
        <div class="count__inner-container">
            <div class="count__circle-container">

                <p class="count__current-circle-title">Дни</p>

                <div class="circlestat days count__circle-number" data-dimension="70" data-text="" data-width="1"
                     data-fontsize="30" data-percent="" data-fgcolor="#fff" data-bgcolor="#280e3e"
                     data-fill="transparent"></div>
                <div class="count__circle-number"></div>
                <div class="count__separator"></div>
            </div>
            <div class="count__circle-container">
                <p class="count__current-circle-title">Часы</p>
                <div class="circlestat hours count__circle-number" data-dimension="70" data-text="" data-width="1"
                     data-fontsize="30" data-percent="" data-fgcolor="#fff" data-bgcolor="#280e3e"
                     data-fill="transparent"></div>
                <div class="count__circle-number"></div>
                <div class="count__separator"></div>
            </div>
            <div class="count__circle-container">
                <p class="count__current-circle-title">Минуты</p>
                <div class="circlestat minutes count__circle-number" data-dimension="70" data-text="" data-width="1"
                     data-fontsize="30" data-percent="" data-fgcolor="#fff" data-bgcolor="#280e3e"
                     data-fill="transparent"></div>
                <div class="count__circle-number"></div>
            </div>
        </div>
        <div id="countdown" style='display:none' class='note'></div>
    </div>*/?>

    <div class="main-slider__wrapper">
        <div class="main-slider__item" data-image="/pic/design/sl1.jpg"></div>
        <div class="main-slider__item" data-image="/pic/design/slide-2.jpg"></div>
        <div class="main-slider__item" data-image="/pic/design/slide-3.jpg"></div>
    </div> 

    <a data-fancybox data-type="iframe" data-src="http://media.ndv.ru/static/14/cam_nord.html" href="javascript:;" class="main-page__webcam-container">Веб-камера</a>
    
    
    <a href="http://www.nord-apart.ru/news/skidka_5_ko_dnyu_vseh_vlyublennjyh_v_komplekse_apartamentov_Nord_tolqko_do_28_fevralya/" class="sale-banner__link">
        Скидки до 5
        <span class="sale-banner__percent">%</span>
        <span class="sale-banner__arrow">&#8594;</span>
    </a>

    <div class="usp-slider__wrapper">
        <a href="/location" class="usp-slider__item">
            <span class="usp-slider__selection">Апартаменты бизнес-класса</span><br/>
            <span class="usp-slider__selection">на севере Москвы</span>
        </a>
        <a href="/about" class="usp-slider__item">
            <span class="usp-slider__selection">Современные технологии</span><br/>
            <span class="usp-slider__selection">и системы безопасности</span>
        </a>
        <a href="/location" class="usp-slider__item">
            <span class="usp-slider__selection">Торговая инфраструктура</span><br/>
            <span class="usp-slider__selection">на первых этажах</span>
        </a>
        <div class="usp-slider__controls">
            <span class="usp-slider__prev-arrow"></span>
            <div class="usp-slider__dots-container"></div>
            <span class="usp-slider__next-arrow"></span>
        </div>
    </div>

    <a href="/layouts-page" class="main__mobile-choose-flat">Выбрать квартиру</a>

    <div class="main__mobile-about-wrapper">
        <p class="page-title">О проекте</p>
        <div class="about__text-wrapper">
            <p class="about__text">Жилой комплекс эконом-класса «4U» - рациональный выбор современных людей! Расположен в жилом массиве Святошинского района – Академгородок, в 10 минутах ходьбы от станции метро «Академгородок». В этой части города прекрасно развита социальная, торгово-развлекательная, а также транспортная доступность. Продуманные маршруты общественного транспорта позволят добраться до любой части города без затруднения и пересадок.</p>
            <!-- <ul class="about__list-container">
                <li class="about__list-item">
                    <img src="/pic/design/entrance.svg" alt="Дизайнерские парадные" class="about__list-icon">
                    <span class="about__list-text">Дизайнерские парадные</span>
                </li>
                <li class="about__list-item">
                    <img src="/pic/design/yard.svg" alt="Двор без машин" class="about__list-icon">
                    <span class="about__list-text">Двор без машин</span>
                </li>
                <li class="about__list-item">
                    <img src="/pic/design/lifts.svg" alt="Скоростные лифты" class="about__list-icon">
                    <span class="about__list-text">Скоростные лифты</span>
                </li>
            </ul> -->
        </div>

        <div class="location__container">
            <h1 class="page-title page-title--location"><span
                    class="location__toggle">Расположение и инфраструктура</span></h1>
            <div class="location__mobile-container">
                <p class="location__mobile-container-title">Расположение</p>
                <p class="location__mobile-container-text">ЖК «4U» - это соотношение эргономичности, экономичности и функциональности. Проектом предусмотрено строительство двух 26-этажных домов, по две секции в каждом. Грамотная оптимизация жилого пространства в концепции смарт-квартир – отличный вариант, как для студента, так и для молодого карьериста, или путешественника. Оригинальный подход к архитектурным решениям – современные технологии строительства, в сочетании с европейским опытом и качеством. Доступный, стильный жилой комплекс эконом-класса, но с преимущественным наполнением класса комфорт. Продажи запланированы на этапе завершения І секции жилого комплекса. Жилой комплекс For you - для тебя! Когда название говорит само за себя!</p>
                <p class="location__mobile-container-title">Инфраструктура</p>
            </div>
            <!-- <ul class="location__controls-container">
                <li class="location__controls-item location__controls-item--transport"><span
                        class="location__controls-tooltip">Транспорт</span></li>
                <li class="location__controls-item location__controls-item--store"><span
                        class="location__controls-tooltip">Магазины</span></li>
                <li class="location__controls-item location__controls-item--walk"><span
                        class="location__controls-tooltip">Досуг</span></li>
                <li class="location__controls-item location__controls-item--medicine"><span
                        class="location__controls-tooltip">Медицина</span></li>
                <li class="location__controls-item location__controls-item--school"><span
                        class="location__controls-tooltip">Школы</span></li>
                <li class="location__controls-item location__controls-item--finance"><span
                        class="location__controls-tooltip">Детские сады</span></li>
                <li class="location__controls-item location__controls-item--sport"><span
                        class="location__controls-tooltip">Спорт</span></li>
                <li class="location__controls-item location__controls-item--all">Все<span
                        class="location__controls-tooltip">Все</span></li>
            </ul> -->
        </div>
        <!-- <div id="location_map"></div> -->

        <div style="position: relative;">
            <div id="contact_map"></div>
            <div class="contact__container">
                <p class="contact__container-title">Адрес объекта</p>
                <div class="contact__list-wrapper-one">
                    <p class="contact__container-title-mobile">Контакты</p>
                    <p class="contact__container-subtitle-mobile">Адрес объекта</p>
                    <ul class="contact__contacts-list">
                        <li class="contact__contacts-item contact__contacts-item--location"><a target="_blank" href="https://www.google.com/maps/place/2A/@50.4711217,30.3463541,18z/data=!4m6!3m5!1s0x40d4ccc7e40b96c7:0xedb6257147861f5c!4b1!8m2!3d50.4710207!4d30.3474149">улица Булаховского 2А</a></li>
                        <li class="contact__contacts-item contact__contacts-item--metro">Академгородок</li>

                        <!--<li class="contact__contacts-item contact__contacts-item--time">с 9:00 до 20:00 (ежедневно)</li>-->
                        <br>
                        <li class="contact__contacts-item contact__contacts-item--phone"><a href="tel:+380442227278">(044) 222 72 78<a></li>
                    </ul>
                    <span class="contact__show-office">показать все офисы 4U</span>
                </div>
                <div class="contact__list-wrapper-two">
                   <!--  <ul class="contact__legend-list">
                        <li class="contact__legend-item contact__legend-item--transport">Остановка наземного
                            транспорта
                        </li>
                         <li class="contact__legend-item contact__legend-item--ndv">Офис продаж &laquo;НДВ-Недвижимость&raquo;</li>
                        <li class="contact__legend-item contact__legend-item--metro">Станция метрополитена</li>
                        <li class="contact__legend-item contact__legend-item--metro-new">Проектируемая станция
                            Люблинско-Дмитровской линии
                        </li>
                    </ul> -->
                    <a href="href="/contacts" class="contact__rout">Как добраться</a>
                </div>
            </div>
        </div>
    </div>

    

</main>
<!-- Main content container end -->

<!--data-fancybox data-type="iframe" data-src="http://media.ndv.ru/static/14/cam_nord.html" href="javascript:;"-->


<?php get_footer(); ?> 