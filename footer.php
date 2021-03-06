<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-9">
                    <div class="footer__inner">

                        <div class="footer__top">
                            <a href="/" class="footer__logo" title="Bricks"></a>
                            <nav class="footer__menu">
                                <?php wp_nav_menu( array(
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
                                    <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/icon-mail.svg' ); ?>

                                    <a href="mailto:infoats@mail.ru" class="footer__email-link">infoats@mail.ru</a>
                                </div>
                                <button class="footer__btn btn">
                                    Задать вопрос
                                </button>
                            </div>
                        </div>
                        <div class="footer__bottom">
                            ООО «АКВАТЕХСЕРВИС» © Все права защищены.
                            Строительство, обслуживание и ремонт бассейнов, хамамов, саун и spa.
                            Оборудование для бассейнов. Профессиональные химические средства для бассейнов
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 hidden-sm-down">
                    <div class="footer__contact">
                        <a href="tel:+7 (347) 266-97-86" class="footer__phone">+7 (347) 266-97-86</a>
                        <div class="footer__email">
                            <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/icon-mail.svg' ); ?>

                            <a href="mailto:infoats@mail.ru" class="footer__email-link">infoats@mail.ru</a>
                        </div>
                        <button class="footer__btn btn js-question-open">Задать вопрос</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<div class="modal js-question-modal">
    <div class="modal__wrapper">
        <button class="modal__close cross js-modal-close"></button>
        <div class="modal__title title-sm">Задайте вопрос</div>
        <div class="modal__form">
            <?php echo do_shortcode('[contact-form-7 id="609" title="question"]'); ?>
        </div>
    </div>
</div>


<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/lib/jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/lib/swiper/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/lib/fancybox/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/script.js"></script>
</body>

</html>