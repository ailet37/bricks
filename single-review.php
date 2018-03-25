<?php
/**
 * The Template for displaying all single reviews
 *
 *
 */
?>
<?php get_header(); ?>

<section class="product-page">
    <div class="container">
        <?php get_template_part('breadcrumbs'); ?>

        <h1 class="product-page__title title-md" title="<?php the_title(); ?>">
            <?php the_title(); ?>
        </h1>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-lg-4">

                <div class="product-page__item">
                    <div class="product-page__img"
                         style="background-image: url(<?php the_post_thumbnail_url(600, 600); ?>);"></div>

                    <?php $price = get_post_meta($post->ID, 'Цена', true ); ?>

                    <?php if ($price) : ?>
                        <div class="product-page__order">

                            <div class="product-page__info">
                                <div class="product-page__label">ЦЕНА</div>
                                <div class="product-page__price"><?php echo $price; ?> руб</div>
                            </div>
                            <div class="product-page__btn btn js-order-open">Заказать</div>
                        </div>
                    <?php endif; ?>

                </div>

            </div>

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-xs-12 col-sm-8 col-lg-8">

                    <div class="product-page__post post">

                        <div class="product-page__text post">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>

