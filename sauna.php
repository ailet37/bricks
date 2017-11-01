<?php
/*
Template Name: Sauna Page
*/
?>
<?php get_header(); ?>

<section class="teaser">
    <div class="container">
        <?php get_template_part('breadcrumbs'); ?>
        <div class="teaser__info">
            <div class="teaser__title title-md">
                Строительство
                бань, саун, хамамов
            </div>
            <div class="teaser__descr">
                Обслуживание домашнего бассейна либо бассейна общественного пользования представляет собой довольно
                сложную и дорогостоящую процедуру. Поэтому для покупателей важно найти такой магазин химии для
                бассейнов, который предлагает не только высокое качество, но и приемлемые цены.
            </div>
            <div class="teaser__btn btn">РАССЧИТАТЬ СТОИМОСТЬ</div>
        </div>
    </div>
</section>

<section class="advantages">
    <div class="container">
        <div class="advantages__row row">
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__about">
                    <h2 class="advantages__title title-md">
                        Бани из бруса
                    </h2>
                    <div class="advantages__main-text text-md">
                        Вы сможете приобрести у нас современные препараты для бассейнов всех типов, включая эффективные
                        средства на основе активного кислорода и хлора.
                        Кроме средств для дезинфекции и очистки воды, наш магазин предлагает препараты для уничтожения
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
                    <div class="advantages__main-text text-md">Вы сможете приобрести у нас современные препараты для
                        бассейнов всех типов, включая эффективные средства на основе активного кислорода и хлора.
                        Кроме средств для дезинфекции и очистки воды, наш магазин предлагает препараты для уничтожения
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__img">
                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/sauna/sauna-2.jpg" alt="">
                </div>
            </div>

        </div>
        <div class="advantages__row row">
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__about">
                    <h2 class="advantages__title title-md">
                        Бани из
                        оцилиндрованного
                        бревна
                    </h2>
                    <div class="advantages__main-text">Вы сможете приобрести у нас современные препараты для бассейнов
                        всех типов, включая эффективные средства на основе активного кислорода и хлора.
                        Кроме средств для дезинфекции и очистки воды, наш магазин предлагает препараты для уничтожения
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__img">
                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/sauna/sauna-3.jpg" alt="">

                </div>
            </div>
        </div>
    </div>
</section>

<section class="services sauna-types">
    <div class="container">
        <h2 class="sauna-types__title title-md">Какие типы бань мы делаем?</h2>
        <div class="row gutters">

            <div class="col-xs-12 col-sm-4 col-lg-4">
                <a href="" class="cart-item"
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
                <div class="cart-item"
                     style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/sauna/turk.jpg);">
                    <div class="cart-item__title">
                        Турецкая
                        сауна
                    </div>
                    <div class="cart-item__btn circle-btn center-svg">
                        <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-lg-4">
                <div class="cart-item"
                     style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/sauna/rus.jpg);">
                    <div class="cart-item__title">
                        Русская
                        баня
                    </div>
                    <div class="cart-item__btn circle-btn center-svg">
                        <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="calculate">
    <div class="container">
        <div class="calculate__inner">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-5">
                    <h2 class="calculate__title title-md">
                        Закажите расчет
                        стоимости бассейна
                    </h2>
                    <div class="calculate__text">
                        Обслуживание и ремонт бассейнов, хамамов, саун и SPA. Оборудование для бассейнов
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-7">
                    <form class="calculate__form">

                        <div class="calculate__form-row row">
                            <div class="col-xs-12 col-sm-6">
                                <input type="text" class="input" placeholder="Ваше имя">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input type="tel" class="input" placeholder="Номер телефона">
                            </div>
                        </div>
                        <div class="calculate__form-row row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="calculate__form-btn btn">отправить заявку</div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="calculate__form-alarm">
                                    Отправляя заявку, вы соглашаетесь
                                    с политикой конфиденциальности
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="seo-post">
    <div class="container">

        <h1 class="seo-post__title title-md"><?php echo get_the_title(); ?></h1>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="seo-post__text">
                    <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>

</section>

<?php get_template_part('template-parts/partners'); ?>
<?php get_template_part('template-parts/reviews'); ?>


<?php get_footer(); ?>

