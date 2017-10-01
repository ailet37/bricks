<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>


    <main>
        <section class="banner">
            <div class="swiper-container banner__wrap js-banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide banner__cover">
                        <div class="container">
                            <div class="banner__info">
                                <div class="banner__title">
                                    Строительство
                                    бассейнов
                                    хамамов, саун
                                </div>
                                <div class="banner__descr">
                                    Обслуживание и ремонт бассейнов, хамамов, саун и SPA. Оборудование для бассейнов
                                </div>
                                <div class="banner_btn btn">узнать больше</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide banner__cover">
                        <div class="container">
                            <div class="banner__info">
                                <div class="banner__title">
                                    Строительство
                                    бассейнов
                                    хамамов, саун
                                </div>
                                <div class="banner__descr">
                                    Обслуживание и ремонт бассейнов, хамамов, саун и SPA. Оборудование для бассейнов
                                </div>
                                <div class="banner_btn btn">узнать больше</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-banner-pag"></div>
            </div>
        </section>

        <section class="services">
            <div class="container">
                <div class="row gutters">
                    <div class="col-xs-12 col-sm-12 col-lg-4">
                        <div class="services__description">
                            <h1 class="services__title title-md">Наши услуги</h1>
                            <div class="services__text text-md">
                                Обслуживание и ремонт бассейнов, хамамов, саун и SPA. Оборудование для бассейнов.
                                Обслуживание и ремонт бассейнов, хамамов, саун и SPA. Оборудование для бассейнов
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-8">
                        <a href="" class="cart-item cart-item_lg"
                           style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/services/services-1.jpg);">
                            <div class="cart-item__title">
                                Строительство бассейнов
                            </div>
                            <div class="cart-item__btn center-svg">
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-4">
                        <a href="" class="cart-item"
                           style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/services/services-2.png);">
                            <div class="cart-item__title">
                                Строительство хамамов и бань
                            </div>
                            <div class="cart-item__btn center-svg">
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-4">
                        <div class="cart-item"
                             style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/services/services-2.png);">
                            <div class="cart-item__title">
                                Ремонт
                                и обслуживание
                                бассейнов
                            </div>
                            <div class="cart-item__btn center-svg">
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-4">
                        <div class="cart-item"
                             style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/services/services-3.png);">
                            <div class="cart-item__title">
                                Химические
                                средства для
                                бассейнов
                            </div>
                            <div class="cart-item__btn center-svg">
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="seo-post">
            <div class="container">

                <h1 class="seo-post__title title-md">Какой-то заголовок</h1>
                <div class="seo-post__text">
                    По их почти единодушному мнению, действие существенно представляет собой ролевой контраст. Конечно,
                    нельзя не принять во внимание тот факт, что самость возможна.
                    <br><br>
                    Все это побудило нас обратить внимание на то, что действие мгновенно выбирает ролевой эскапизм.
                    Проекция возможна. Сновидение важно представляет собой кризис.
                </div>

        </section>

        <section class="partners">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-5">
                        <h1 class="partners__header-title title-md">ООО «Брикс» — надежный партнер</h1>
                        <div class="text-md">
                            По их почти единодушному мнению, действие существенно представляет собой ролевой контраст.
                            Конечно, нельзя не принять во внимание тот факт, что самость возможна.
                            <br><br>
                            Все это побудило нас обратить внимание на то, что действие мгновенно выбирает ролевой
                            эскапизм. Проекция возможна. Сновидение важно представляет собой
                        </div>
                        <div class="partners__btn btn">БОЛЬШЕ О КОМПАНИИ</div>
                    </div>
                    <div class="col-lg-1 hidden-sm-down">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-6">
                        <div class="partners__title">Наши партнеры</div>

                        <div class="partners__wrap">


                            <div class="partners__row">
                                <a href="" class="partners__item">
                                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/partners/partners-1.png"
                                         alt="" class="center">
                                </a>
                                <div class="partners__item">
                                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/partners/partners-2.png"
                                         alt="" class="center">
                                </div>
                                <div class="partners__item">
                                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/partners/partners-2.png"
                                         alt="" class="center">
                                </div>

                            </div>
                            <div class="partners__row">
                                <div class="partners__item">
                                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/partners/partners-1.png"
                                         alt="" class="center">
                                </div>
                                <div class="partners__item">
                                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/partners/partners-1.png"
                                         alt="" class="center">
                                </div>
                                <div class="partners__item">
                                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/partners/partners-1.png"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="reviews">
            <div class="container">
                <div class="reviews__header">
                    <div class="reviews__title title-md">
                        Отзывы клиентов
                    </div>
                    <a href="" class="reviews__btn">
                        <span class="reviews__btn-text">Все <span class="hidden-xs-down">отзывы</span></span>
                        <div class="circle-btn center-svg">
                            <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                        </div>
                    </a>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-lg-4 reviews__item">
                        <div class="reviews__review">
                            <div class="reviews__text">
                                Высокий профессионализм
                                и оперативность ваших специалисто дает нам уверенность в бесперебойной работе нашего
                                бассейна, внося неоценимый вклад в сохранение и укрепление здоровья подрастающего
                                поколения
                            </div>
                            <a href="/" class="reviews__link">
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/attachment.svg'); ?>

                                <span class="reviews__link-text">Оригинал отзыва</span>
                            </a>
                        </div>
                        <div class="reviews__author">
                            Р.Р. Мухаментганеева
                        </div>
                        <div class="reviews__position">
                            Заведующий МАДОУ Детский сад №324
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-4 reviews__item">
                        <div class="reviews__review">
                            <div class="reviews__text">
                                С вашей помощью достигнута положительная эксплуатация бассейнов и оборудования:
                                за счет взаимопонимания в устранениях возникающих проблемных вопросов, оперативного
                                устранения технических неисправностей, предоставление своевременных рекомендаций
                                по эксплуатации оборудования
                            </div>
                            <a href="/" class="reviews__link">
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/attachment.svg'); ?>

                                <span class="reviews__link-text">Оригинал отзыва</span>
                            </a>
                        </div>
                        <div class="reviews__author">
                            Р.Р. Мухаментганеева
                        </div>
                        <div class="reviews__position">
                            Заведующий МАДОУ Детский сад №324
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-4 reviews__item">
                        <div class="reviews__review">
                            <div class="reviews__text">
                                Высокая квалификация, опыт
                                и компетентность специалистов вашей организации позволяли решать поставленные задачи в
                                кратчайшие сроки и с надлежащим качеством.
                            </div>
                            <a href="/" class="reviews__link">
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/attachment.svg'); ?>

                                <span class="reviews__link-text">Оригинал отзыва</span>
                            </a>
                        </div>
                        <div class="reviews__author">
                            Р.Р. Мухаментганеева
                        </div>
                        <div class="reviews__position">
                            Заведующий МАДОУ Детский сад №324
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>