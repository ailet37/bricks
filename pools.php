<?php
/*
Template Name: Pools Page
*/
?>
<?php get_header(); ?>

<section class="teaser">
    <div class="container">
        <?php get_template_part('breadcrumbs'); ?>
        <div class="teaser__info">
            <div class="teaser__title title-md">
                <?php the_title(); ?>
            </div>
            <div class="teaser__descr">
                <?php the_excerpt(); ?>
            </div>
            <a href="#calculate" class="teaser__btn btn">РАССЧИТАТЬ СТОИМОСТЬ</a>
        </div>
    </div>
</section>

<section class="advantages">
    <div class="container">
        <div class="advantages__row row">
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__about">
                    <h2 class="advantages__title title-md">Строительство
                        бассейнов</h2>
                    <div class="advantages__main-text text-md">Вы сможете приобрести у нас современные препараты для
                        бассейнов всех типов, включая эффективные средства на основе активного кислорода и хлора.
                        Кроме средств для дезинфекции и очистки воды, наш магазин предлагает препараты для уничтожения
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__wrap">
                    <div class="advantages__line">
                        <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/advantages/adv-1.svg'); ?>
                        <div class="advantages__text">
                            Строительство открытых бассейнов, сборка и установка павильонов, плавающих покрывал и
                            жалюзей для них
                        </div>
                    </div>
                    <div class="advantages__line">
                        <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/advantages/adv-3.svg'); ?>
                        <div class="advantages__text">
                            Строительство бассейнов в домах
                        </div>
                    </div>
                    <div class="advantages__line">
                        <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/advantages/adv-2.svg'); ?>
                        <div class="advantages__text">
                            Бассейны в рамках строительства банного комплекса
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="advantages__row row">

            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__img">
                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/pools/pools-3.jpg" alt="">

                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__about">
                    <h2 class="advantages__title title-md">
                        Стационарные
                        бассейны
                    </h2>
                    <div class="advantages__main-text text-md">Вы сможете приобрести у нас современные препараты для
                        бассейнов всех типов, включая эффективные средства на основе активного кислорода и хлора.
                        Кроме средств для дезинфекции и очистки воды, наш магазин предлагает препараты для уничтожения
                    </div>
                </div>
            </div>
        </div>
        <div class="advantages__row row">
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__img">
                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/pools/pools-3.jpg" alt="">

                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__about">
                    <h2 class="advantages__title title-md">
                        Сборные бассейны
                    </h2>
                    <div class="advantages__main-text">Вы сможете приобрести у нас современные препараты для бассейнов
                        всех типов, включая эффективные средства на основе активного кислорода и хлора.
                        Кроме средств для дезинфекции и очистки воды, наш магазин предлагает препараты для уничтожения
                    </div>
                </div>
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
                        стоимости бассейна
                    </h2>
                    <div class="calculate__text">
                        Обслуживание и ремонт бассейнов, хамамов, саун и SPA. Оборудование для бассейнов
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-7">
                        <?php echo do_shortcode( '[contact-form-7 id="205" title="Pools cost" html_class="calculate__form"]' ); ?>
<!--                        <div class="calculate__form-row row">-->
<!--                            <div class="col-xs-12 col-sm-6">-->
<!--                                <input id="after" type="text" class="input calculate__form-input"-->
<!--                                       placeholder="Длина,см">-->
<!--                                <input type="text" class="input calculate__form-input" placeholder="Ширина,см">-->
<!--                                <input type="text" class="input calculate__form-input" placeholder="Глубина,см">-->
<!--                            </div>-->
<!--                            <div class="col-xs-12 col-sm-6">-->
<!--                                <select name="" id="" class="select">-->
<!--                                    <option value="">Выберите материал</option>-->
<!--                                    <option value="">материальчик</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                        </div>-->
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

<section class="steps">
    <div class="container">
        <h2 class="steps__title title-md">Примерные этапы
            строительства бассейна
        </h2>
        <div class="steps__wrap row">
            <div class="steps__row col-xs-12 col-sm-4 col-lg-2">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/steps/steps-project.svg'); ?>
                <div class="steps__text">
                    Проектирование бассейна
                </div>
            </div>
            <div class="steps__row col-xs-12 col-sm-4 col-lg-2">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/steps/steps-prepare.svg'); ?>
                <div class="steps__text">
                    Подготовка основания
                </div>
            </div>
            <div class="steps__row col-xs-12 col-sm-4 col-lg-2">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/steps/steps-pipes.svg'); ?>
                <div class="steps__text">
                    Укладка закладных
                    элементов
                </div>
            </div>
            <div class="steps__row col-xs-12 col-sm-4 col-lg-2">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/steps/steps-armin.svg'); ?>
                <div class="steps__text">
                    Сооружение опалубки
                    и армирование
                    котлована
                </div>
            </div>
            <div class="steps__row col-xs-12 col-sm-4 col-lg-2">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/steps/steps-isolation.svg'); ?>
                <div class="steps__text">
                    Устройство
                    гидроизоляции
                    и бетонирование
                </div>
            </div>
            <div class="steps__row col-xs-12 col-sm-4 col-lg-2">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/steps/steps-finishing.svg'); ?>
                <div class="steps__text">
                    Отделочные работы
                </div>
            </div>
        </div>
    </div>
</section>

<section class="seo-post">
    <div class="container">
        <div class="seo-post__text">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
</section>

<?php get_template_part('template-parts/partners'); ?>


<?php $tag = 'pools' ?>
<?php include(locate_template('template-parts/reviews.php')); ?>


<?php get_footer(); ?>
