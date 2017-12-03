<?php $category_sliders_id = get_cat_ID('Слайдеры'); ?>

<?php
$args_qry = array('category' => $category_sliders_id, 'post_type' => 'post');
$posts_list = get_posts($args_qry);
$posts_count = count($posts_list);
if ($posts_list) { ?>
    <section class="banner">
        <div class="swiper-container banner__wrap<?php if ($posts_count > 1) { ?> js-banner<?php } ?>">
            <div class="swiper-wrapper">
                <?php foreach ($posts_list as $post) : setup_postdata( $post );  ?>
                    <div class="swiper-slide banner__cover" style="background-image: url(<?php the_post_thumbnail_url(array(1200, 800)); ?>);">
                        <div class="container">
                            <div class="banner__info">
                                <h3 class="banner__title">
                                    <?php the_title(); ?>
                                </h3>
                                <div class="banner__descr">
                                    <?php the_excerpt(); ?>
                                </div>
                                <?php $link = get_post_meta($post->ID, 'Link', true ); ?>
                                <?php if ($link) : ?>
                                    <a href="<?php echo $link ?>" class="banner__btn btn">узнать больше</a>
                                <?php endif; ?>
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