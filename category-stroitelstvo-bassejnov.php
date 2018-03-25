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
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__about">
                    <!--<h2 class="advantages__title title-md">Бассейны "под ключ"</h2>-->
                    <div class="advantages__main-text text-md post">Проектирование и строительство бассейнов "под ключ" — основное направление деятельности компании «АкваТехСервис». Мы берем на себя всю работу — от подбора материалов и оборудования до монтажа и финишной отделки бассейна. Накопленный опыт позволяет нам браться за проекты любой сложности, учитывая все особенности участка и индивидуальные пожелания заказчика.<br><br>В основном мы проектируем и строим бассейны из бетона, но также делаем и бассейны из нержавеющей стали, а также осуществляем сборку и установку павильонов для уличных бассейнов всех видов, плавающих покрывал и автоматических жалюзей.
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
                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/pools/na-str-bass-1.jpg" alt="Строительство бассейнов из бетона в Татарстане">

                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__about">
                    <h2 class="advantages__title title-md">
                        Бассейны из бетона
                    </h2>
                    <div class="advantages__main-text text-md post">Строительство бассейнов из бетона — основной вид деятельности нашей компании.
Все реализуемые варианты проектов индивидуальны. У нас накоплен огромный опыт в реализации бассейнов под любые требования и пожелания, как больших общественных бассейнов, так и небольших стационарных бассейнов в частных домах. С примерами работ можете ознакомиться в соответствующем <a href="/nashi-raboty/">Разделе сайта</a>.
                    </div>
                </div>
            </div>
        </div>
        <div class="advantages__row row">
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__img">
                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/pools/Bassejny-iz-nerzhaveyushchej-stali.jpg" alt="Строительство бассейнов из нержавеющей стали в Татарстане">

                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__about">
                    <h2 class="advantages__title title-md">
                        Строительство бассейнов из нержавеющей стали
                    </h2>
                    <div class="advantages__main-text text-md post">Наша компания осуществляет проектирование, производство, монтаж и обслуживание бассейнов из нержавеющей стали.

                    </div>
                </div>
            </div>
        </div>
        <div class="advantages__row row">

            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__img">
                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/pools/na-str-bass-3-pavilion.jpg" alt="Строительство павильонов и жалюзей для бассейнов в Татарстане">

                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
                <div class="advantages__about">
                    <h2 class="advantages__title title-md">
                        Сборка и установка павильонов и жалюзей
                    </h2>
                    <div class="advantages__main-text text-md post">Осуществляем:<ul><li>сборку и установку открытых, раздвижных и закрытых  павильонов для уличных бассейнов любых форм и размеров.</li>
<li>сборку и установку плавающих покрывал и автоматических плавающих покрытий (автоматических жалюзей) для бассейнов.</li></ul>
<p>C примером выполненного бассейна с павильоном можно ознакомится <a href="/nashi-raboty/pavilon/">по ссылке</a>.</p>
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
        <div class="post seo-post__text">
            <?php show_descr_bottom($cat); // выводим нижнее описание категории ?>
        </div>
</section>

<?php get_template_part('template-parts/partners'); ?>


<?php $tag = 'pools' ?>
<?php include(locate_template('template-parts/reviews.php')); ?>


<?php get_footer(); ?>
