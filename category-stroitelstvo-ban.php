<?php
/*
Template Name: Bani Page
*/
?>
<?php get_header(); ?>

<section class="teaser teaser_ban">
    <div class="container">
        <?php get_template_part('breadcrumbs'); ?>
        <div class="teaser__info">
            <h1 class="teaser__title title-md" title="<?php single_cat_title('', true ); ?>">
                <?php single_cat_title('', true ); ?>
            </h1>
            <div class="teaser__descr">
                <?php show_descr_top($cat); // выводим верхнее описание категории ?>
            </div>
            <a href="#calculate" class="teaser__btn btn">РАССЧИТАТЬ СТОИМОСТЬ</a>
        </div>
    </div>
</section>

<section class="advantages">
    <div class="container">
        <div class="advantages__row row">
            <div class="advantages__main-text text-md post">
                Баня, построенная и оформленная по индивидуальному заказу — лучшее место для отдыха с семьей и друзьями. Компания «Акватехсервис» занимается проектированием и строительством бань с применением уникальных дизайнерских решений. Наши технологии позволяют строить качественные и надежные бани в кратчайшие сроки, соблюдая при этом самые строгие требования по экологичности.
            </div>
        </div>
        <div class="advantages__row row">
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__about">
                    <h2 class="advantages__title title-md">
                        Бани из бруса
                    </h2>
                    <div class="advantages__main-text text-md post">
                        Наибольшей популярностью сегодня пользуются бани из бруса. Они хорошо выглядят снаружи, удобны и эстетичны внутри, а их функциональность и надежность не вызывает сомнений. По этой причине мы предпочитаем работать с профилированным брусом и рекомендуем этот материал всем нашим клиентам, но возможны и другие варианты.
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__img">
                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/sauna/sauna-1.jpg" alt="">
                </div>
            </div>

        </div>
        <div class="advantages__row row">
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__about">
                    <h2 class="advantages__title title-md">
                        Бани из бревна
                    </h2>
                    <div class="advantages__main-text text-md post">Окоренные или оцилиндрованные бревна — наиболее экологически чистый материал для строительства бань. Благодаря натуральным смолам в составе древесины воздух в такой бане обладает тонизирующим и лечебным эффектом для организма человека. Также данный строительный материал позволяет воплотить практически любую идею. Если вы хотите получить баню, более всего отвечающую "исконно русскому духу", то ваш выбор - несомненно, бревенчатая баня.
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__img">
                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/sauna/sauna-2.jpg" alt="">
                </div>
            </div>

        </div>
        <!--<div class="advantages__row row">
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__about">
                    <h2 class="advantages__title title-md">
                        Бани из
                        оцилиндрованного
                        бревна
                    </h2>
                    <div class="advantages__main-text text-md">Вы сможете приобрести у нас современные препараты для бассейнов
                        всех типов, включая эффективные средства на основе активного кислорода и хлора.
                        Кроме средств для дезинфекции и очистки воды, наш магазин предлагает препараты для уничтожения
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__img">
                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/sauna/sauna-3.jpg" alt="">

                </div>
            </div>-->
<!--        </div>-->
    </div>
</section>

<section class="seo-post">
    <div class="container">
        <div class="post seo-post__text">
            <div>
                <p>Обратившись за строительством бани в компанию «БРИКС», вы гарантированно получаете:</p>
                <ul><li>чистые и качественные природные материалы;</li>
                    <li>использование новейших технологий в проектировании и строительстве;</li>
                    <li>индивидуальный дизайн, идеально соответствующий вашим запросам;</li>
                    <li>ответственный подход к качеству и срокам строительства.</li></ul>
                <p>Мы всегда находим способ совместить современные технологии с классическими дизайнерскими решениями, а также индивидуальными пожеланиями заказчика. В качестве материала можно выбрать не только профилированный брус, но и другие виды древесины, например, оцилиндрованное бревно или клееный брус.</p>
                <p>Вы можете высказать любые идеи и пожелания по оформлению, подыскать интересные решения совместно с нашими специалистами или даже предоставить понравившиеся фотографии бань из интернета. Мы готовы воплощать любые идеи.</p>
            </div>
        </div>
</section>



<section class="services sauna-types">
    <div class="container">
        <h2 class="sauna-types__title title-md">Какие типы бань мы делаем?</h2>
        <div class="row gutters">

            <div class="col-xs-12 col-sm-4 col-lg-4">
                <a href="/stroitelstvo-ban/finskaya-parnaya/" class="cart-item"
                   style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/sauna/fin.jpg);">
                    <div class="cart-item__title">
                        Финская
                        парная
                    </div>
                    <div class="cart-item__btn circle-btn center-svg">
                        <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <a href="/stroitelstvo-ban/turetskaya-sauna-hammam/" class="cart-item"
                     style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/sauna/turk.jpg);">
                    <div class="cart-item__title">
                        Турецкая
                        сауна (хаммам)
                    </div>
                    <div class="cart-item__btn circle-btn center-svg">
                        <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <a href="/stroitelstvo-ban/russkaya-banya/ " class="cart-item"
                     style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/sauna/rus.jpg);">
                    <div class="cart-item__title">
                        Русская баня
                    </div>
                    <div class="cart-item__btn circle-btn center-svg">
                        <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="calculate" id="calculate">
    <div class="container">
        <div class="calculate__inner">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-5">
                    <h2 class="calculate__title title-md">
                        Закажите расчет
                        стоимости бани
                    </h2>
                    <div class="calculate__text">
                        Обслуживание и ремонт бассейнов, хамамов, саун и SPA. Оборудование для бассейнов
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-7">

                        <?php echo do_shortcode( '[contact-form-7 id="207" title="Sauna cost" html_class="calculate__form"]' ); ?>

<!--                        <div class="calculate__form-row row">-->
<!--                            <div class="col-xs-12 col-sm-6">-->
<!--                                <input type="text" class="input" placeholder="Ваше имя">-->
<!--                            </div>-->
<!--                            <div class="col-xs-12 col-sm-6">-->
<!--                                <input type="tel" class="input" placeholder="Номер телефона">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="calculate__form-row row">-->
<!--                            <div class="col-xs-12 col-sm-6">-->
<!--                                <div class="calculate__form-btn btn">отправить заявку</div>-->
<!--                            </div>-->
<!--                            <div class="col-xs-12 col-sm-6">-->
<!--                                <div class="calculate__form-alarm">-->
<!--                                    Отправляя заявку, вы соглашаетесь-->
<!--                                    с политикой конфиденциальности-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="seo-post">
    <div class="container">
      <div class="post seo-post__text">
          <?php show_descr_bottom($cat); // выводим нижнее описание категории ?>
      </div>
</section>

<?php get_template_part('template-parts/partners'); ?>

<?php $tag = 'sauna' ?>
<?php include(locate_template('template-parts/reviews.php')); ?>


<?php get_footer(); ?>

