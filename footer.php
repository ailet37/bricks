

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