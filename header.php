<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php bloginfo("template_directory");?>/favicon.ico" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?php bloginfo("template_directory");?>/style.css">


</head>

<body>

<header class="header">
    <div class="container">
        <div class="header__top">
            Строительство, обслуживание и ремонт бассейнов, хамамов, саун и spa.
            Оборудование для бассейнов. Профессиональные химические средства для бассейнов
        </div>
        <div class="header__bottom">
            <div class="header__menu-icon hidden-sm-up">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/menu.svg' ); ?>
            </div>

            <a href="/" class="header__logo" title="bricks"></a>

            <nav class="header__menu hidden-xs-down">
                <?php wp_nav_menu( array(
                    'container' => false,
                )); ?>
<!--                <a href="" class="header__menu-item">О компании</a>-->
<!--                <a href="" class="header__menu-item">Строительство</a>-->
<!--                <a href="" class="header__menu-item">Средства для бассейнов</a>-->
<!--                <a href="" class="header__menu-item">Контакты</a>-->
            </nav>

            <div class="header__contact">
                <a href="tel:+7 (347) 266-97-86" class="header__phone hidden-xs-down">+7 (347) 266-97-86</a>
                <button class="header__callback">
                    <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/phone.svg' ); ?>
                    <div class="header__callback-link link hidden-xs-down">
                        <span class="link__text">Обратный звонок</span>
                    </div>
                </button>

            </div>
        </div>
    </div>
</header>
