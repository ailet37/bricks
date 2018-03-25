<?php $category_reviews_id = get_cat_ID('Отзывы'); ?>

<?php if ($category_reviews_id) {
    $args_qry = array(
        'category' => $category_reviews_id,
        'post_type' => 'review',
        'posts_per_page' => ($tag == 'main' ? 3 : 100),
        'tag' => $tag
    );
    $posts_list = get_posts($args_qry);
    ?>
    <?php if ($posts_list) : ?>
        <section class="reviews">
            <div class="container">

                <?php if ($tag == 'main') { ?>

                    <div class="reviews__header">
                        <h3 class="reviews__title title-md">Отзывы клиентов</h3>
                        <a href="/otzyvy/" class="reviews__btn">
                            <span class="reviews__btn-text">Все <span class="hidden-xs-down">отзывы</span></span>
                            <div class="circle-btn center-svg">
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                            </div>
                        </a>
                    </div>
                <?php } ?>

                <div class="row">
                    <?php foreach ($posts_list as $post) : setup_postdata($post); ?>
                        <div class="col-xs-12 col-sm-4 col-lg-4 reviews__item">
                            <div class="reviews__review">
                                <a href="<?php the_permalink(); ?>" class="reviews__img">
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
                                </a>

                                <div class="reviews__text">
                                    <?php the_content(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="reviews__link link">
                                    <!--                        --><?php //echo file_get_contents(get_template_directory_uri() . '/assets/svg/attachment.svg'); ?>

                                    <span class="reviews__link-text link__text">Оригинал отзыва</span>
                                </a>
                            </div>
                            <div class="reviews__author">
                                <?php the_title(); ?>
                            </div>
                            <div class="reviews__position">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php endif;
} ?>