<!DOCTYPE html>

<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
    <link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/assets/img/favicons/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/assets/img/favicons/favicon-16x16.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php bloginfo("template_directory"); ?>/assets/img/favicons/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/style.css">
	<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter48175787 = new Ya.Metrika({ id:48175787, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/48175787" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>
<?php wp_head(); ?>
<body>

<header class="header">
    <div class="container">
        <div class="header__top">
            Строительство, обслуживание и ремонт бассейнов, хамамов, саун и spa.
            Оборудование для бассейнов. Профессиональные химические средства для бассейнов
        </div>
        <div class="header__bottom">
            <div class="header__menu-icon hidden-sm-up js-open-mobile-menu">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/menu.svg'); ?>
            </div>

            <a href="/" class="header__logo" title="bricks"></a>

            <nav class="header__menu js-menu">
                <?php wp_nav_menu(array(
                    'container' => false,
                )); ?>

                <button class="cross hidden-sm-up js-close-mobile-menu"></button>
            </nav>

            <div class="header__contact">
                <a href="tel:+7 (347) 266-97-86" class="header__phone hidden-xs-down">+7 (347) 266-97-86</a>
                <button class="header__callback js-callback-open">
                    <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/phone.svg'); ?>
                    <div class="header__callback-link link hidden-xs-down">
                        <span class="link__text">Обратный звонок</span>
                    </div>
                </button>

            </div>
        </div>
    </div>
</header>

<div class="modal js-callback-modal">
    <div class="modal__wrapper">
        <button class="modal__close cross js-modal-close"></button>
        <div class="modal__title title-sm">Заказать обратный звонок</div>
        <div class="modal__form">
            <?php echo do_shortcode('[contact-form-7 id="263" title="callback_form"]'); ?>
        </div>
    </div>
</div>



