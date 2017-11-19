<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<?php
$args_qry = array('category' => 24, 'post_type' => 'post');
$postslist = get_posts($args_qry);
$posts_count = count($postslist);
if ($postslist) { ?>

    <section class="banner">
        <div class="swiper-container banner__wrap<?php if ($posts_count > 1) { ?> js-banner<?php } ?>">
            <div class="swiper-wrapper">
                <?php foreach ($postslist as $post) : setup_postdata( $post );  ?>
                    <div class="swiper-slide banner__cover" style="background-image: url(<?php the_post_thumbnail_url(array(1200, 800)); ?>);">
                        <div class="container">
                            <div class="banner__info">
                                <h3 class="banner__title">
                                    <?php the_title(); ?>
                                </h3>
                                <div class="banner__descr">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="banner__btn btn">узнать больше</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
            <?php if ($posts_count > 1) { ?>
                <div class="js-banner-pag"></div>
            <?php } ?>
        </div>
    </section>
    <?php  } ?>


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
                        <div class="cart-item__btn circle-btn center-svg">
                            <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-4">
                    <a href="" class="cart-item"
                       style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/services/services-2.jpg);">
                        <div class="cart-item__title">
                            Строительство хамамов и бань
                        </div>
                        <div class="cart-item__btn circle-btn center-svg">
                            <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-4">
                    <div class="cart-item"
                         style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/services/services-3.jpg);">
                        <div class="cart-item__title">
                            Ремонт
                            и обслуживание
                            бассейнов
                        </div>
                        <div class="cart-item__btn circle-btn center-svg">
                            <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-4">
                    <div class="cart-item"
                         style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/services/services-4.jpg);">
                        <div class="cart-item__title">
                            Химические
                            средства для
                            бассейнов
                        </div>
                        <div class="cart-item__btn circle-btn center-svg">
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
        </div>
    </section>

<?php get_template_part('template-parts/works'); ?>
<?php get_template_part('template-parts/partners'); ?>
<?php get_template_part('template-parts/reviews'); ?>


<?php get_footer(); ?>