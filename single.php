<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<?php get_header(); ?>

<section class="product-page">
    <div class="container ">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-lg-4">

                <div class="product-page__title title-sm hidden-sm-up">
                    <?php get_template_part('breadcrumbs'); ?>
                    <?php the_title(); ?>
                </div>

                <div class="product-page__item">
                    <div class="product-page__img"
                         style="background-image: url(<?php the_post_thumbnail_url(200, 200); ?>);"></div>

                    <?php $price = get_post_meta($post->ID, 'Цена', true ); ?>

                    <div class="product-page__order">
                        <?php if ($price) : ?>
                        <div class="product-page__info">
                            <div class="product-page__label">ЦЕНА</div>
                            <div class="product-page__price"><?php echo $price; ?> руб</div>
                        </div>
                        <?php endif; ?>
                        <div class="product-page__btn btn">Заказать</div>
                    </div>

                </div>

            </div>

            <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-xs-12 col-sm-8 col-lg-8">

                <div class="product-page__post post">
                    <?php get_template_part('breadcrumbs'); ?>

                    <h1 class="product-page__title title-md" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </h1>

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

