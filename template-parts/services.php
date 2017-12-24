<?php $category_services_id = get_cat_ID('Наши услуги'); ?>

<?php if ($category_services_id) {
$args_qry = array('category' => $category_services_id, 'post_type' => 'post', 'orderby' => 'ID', 'order'=>'ASC');
$category_posts_list = get_posts($args_qry);
if ($category_posts_list) { ?>

    <section class="services">
        <div class="container">
            <div class="row gutters">
                <div class="col-xs-12 col-sm-12 col-lg-4">
                    <div class="services__description">
                        <h2 class="services__title title-md" title="<?php echo get_cat_name( $category_services_id ) ?>"><?php echo get_cat_name( $category_services_id ) ?></h2>
                        <div class="services__text text-md">
                            <?php echo category_description( $category_services_id ); ?>
                        </div>
                    </div>
                </div>

                <?php foreach ($category_posts_list as $post) : setup_postdata($post); ?>

                    <?php if ($post === reset($category_posts_list)) { ?>
                        <div class="col-xs-12 col-sm-12 col-lg-8">
                            <?php $link = get_post_meta($post->ID, 'Link', true); ?>
                            <a href="<?php echo $link ?>" title="<?php the_title(); ?>" class="cart-item cart-item_lg"
                               style="background-image: url(<?php the_post_thumbnail_url(array(1200, 1200)); ?>);">
                                <div class="cart-item__title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="cart-item__btn circle-btn center-svg">
                                    <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                                </div>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="col-xs-12 col-sm-4 col-lg-4">
                            <?php $link = get_post_meta($post->ID, 'Link', true); ?>
                            <a href="<?php echo $link ?>" title="<?php the_title(); ?>" class="cart-item"
                               style="background-image: url(<?php the_post_thumbnail_url(array(800, 800)); ?>);">
                                <div class="cart-item__title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="cart-item__btn circle-btn center-svg">
                                    <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php } } ?>