<?php
/*
Template Name: Articles Page
*/
?>
<?php get_header(); ?>

<section class="teaser">
    <div class="container">
        <?php get_template_part('breadcrumbs'); ?>
        <div class="teaser__info">
            <h1 title="<?php the_title_attribute(); ?>" class="teaser__title title-md">
                <?php echo get_the_title(); ?>
            </h1>
            <div class="teaser__descr">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
</section>

<section class="post">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>


<?php get_footer(); ?>
