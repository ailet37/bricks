<div class="calc">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">

                <h5 class="section-title">Расчет стоимости натяжного потолка</h5>

                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div id="js-calc-image" class="calc__image"
                         data="textureMatteWhite"
                         style="background-image: url(wp-content/themes/bricks/assets/img/banner/banner-1.jpg)">
                    </div>
                    <p class="calc__description">Пример потолка</p>
                </div>

                <div class="col-lg-8 col-sm-6 col-xs-12">
                    <div class="calc__wrapper">

                        <form id="js-calc-form" class="calc__form">
                            <div class="calc__row">

                                <div class="calc__input-wrap">
                                    <label for="in1" class="calc__label">Площадь помещения
                                        м2:</label>
                                    <input id="in1" value="10" class="calc__input">
                                </div>

                                <div class="calc__amount js-corners" data-cost="50">
                                    <label class="calc__label" for="in2">Количество
                                        углов:</label>
                                    <input id="in2" value="4" class="calc__input">
                                    <a href="#" onclick="calcMinus(this);return false" class="calc__input-minus"
                                       data="in2">-</a>
                                    <a href="#" onclick="calcPlus(this);return false" class="calc__input-plus"
                                       data="in2">+</a>
                                </div>

                            </div>
                            <div class="calc__row">
                                <label class="calc__label">Фактура потолка</label>
                                <div class="calc__radio">
                                    <div class="calc__radio-wrapper">
                                        <input id="radMat1" checked="checked" type="radio" name="texture"
                                               value="textureMatte">
                                        <label for="radMat1" class="calc__radio-label">Матовая</label>
                                    </div>
                                    <div class="calc__radio-wrapper">
                                        <input id="radMat2" type="radio" name="texture" value="textureGloss">
                                        <label for="radMat2" class="calc__radio-label">Глянцевая</label>
                                    </div>
                                    <div class="calc__radio-wrapper">
                                        <input id="radMat3" type="radio" name="texture" value="textureSatin">
                                        <label for="radMat3" class="calc__radio-label">Сатиновая</label>
                                    </div>
                                    <div class="calc__radio-wrapper">
                                        <input id="radMat4" type="radio" name="texture" value="textureCloth">
                                        <label for="radMat4" class="calc__radio-label">Тканевая</label>
                                    </div>
                                </div>
                            </div>

                            <div class="calc__row">
                                <label class="calc__label">Цветность</label>
                                <div class="calc__radio">
                                    <div class="calc__radio-wrapper">
                                        <input id="radColor1" checked="checked" type="radio" name="color" value="White">
                                        <label for="radColor1" class="calc__radio-label">Белый</label>
                                    </div>

                                    <div class="calc__radio-wrapper">
                                        <input id="radColor2" type="radio" name="color" value="Color">
                                        <label for="radColor2" class="calc__radio-label">Цветной</label>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-lg-8 col-lg-offset-4 col-sm-12 col-xs-12">

                    <div class="calc__info">
                        <ul>
                            <li> Обход труб - бесплатно!</li>
                            <li> Декоративная лента - бесплатно!</li>
                        </ul>

                        <div class="calc__info-alarm">УКАЗАНА СТОИМОСТЬ ПОТОЛКА С УЧЕТОМ МОНТАЖА (ПОД КЛЮЧ)!</div>

                        <div class="calc__info-notice">Многие фирмы указывают стоимость только полотна и материалов
                            и
                            потому цена у них на сайтах оказывается гораздо ниже.
                            Уточняйте точную стоимость потолка под ключ, прежде чем заказать потолок!
                        </div>
                    </div>
                    <div class="calc__res">

                        <span class="calc__res-title">Цена:</span>
                        <div class="calc__price">
                            <span id="js-calc-price"></span>
                            <span class="rub">руб</span>
                        </div>
                        <div class="calc__res-alarm">
                            только до 28 декабря!
                        </div>


                        <form action="kontaktyi" method="post"
                              class="call_master_modal_form ajax_form af_example calc__res-form">

                            <span class="error_call_master_modal_phone"></span>
                            <input type="text" id="af_call_master_modal_phone"
                                   name="call_master_modal_phone" value="" placeholder="Ваш телефон"
                                   class="phone">

                            <button type="submit" class="btn submit">Выбрать замерщика</button>

                            <input type="hidden" name="af_action" value="bb21dfe23aee13b7a3c069eb21339610">
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-9">
                    <div class="footer__inner">

                        <div class="footer__top">
                            <a href="/" class="footer__logo" title="Bricks"></a>
                            <nav class="footer__menu">
                                <?php wp_nav_menu(array(
                                    'container' => false,
                                )); ?>
                                <!--                                <a href="" class="footer__menu-item">О компании</a>-->
                                <!--                                <a href="" class="footer__menu-item">Строительство</a>-->
                                <!--                                <a href="" class="footer__menu-item">Средства для бассейнов</a>-->
                                <!--                                <a href="" class="footer__menu-item">Контакты</a>-->
                            </nav>

                            <div class="footer__contact hidden-lg-up">
                                <a href="tel:+7 (347) 266-97-86" class="footer__phone">+7 (347) 266-97-86</a>
                                <div class="footer__email">
                                    <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/icon-mail.svg'); ?>

                                    <a href="mailto:briks-ufa@mail.ru" class="footer__email-link">briks-ufa@mail.ru</a>
                                </div>
                                <button class="footer__btn btn">
                                    Задать вопрос
                                </button>
                            </div>
                        </div>
                        <div class="footer__bottom">
                            ООО «БРИКС» © 2017. Все права защищены.
                            Строительство, обслуживание и ремонт бассейнов, хамамов, саун и spa.
                            Оборудование для бассейнов. Профессиональные химические средства для бассейнов
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 hidden-sm-down">
                    <div class="footer__contact">
                        <a href="tel:+7 (347) 266-97-86" class="footer__phone">+7 (347) 266-97-86</a>
                        <div class="footer__email">
                            <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/icon-mail.svg'); ?>

                            <a href="mailto:briks-ufa@mail.ru" class="footer__email-link">briks-ufa@mail.ru</a>
                        </div>
                        <button class="footer__btn btn">Задать вопрос</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript"
        src="<?php bloginfo("template_directory"); ?>/js/lib/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/lib/swiper/js/swiper.min.js"></script>
<script type="text/javascript"
        src="<?php bloginfo("template_directory"); ?>/js/lib/fancybox/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/script.js"></script>

</body>

</html>