<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<?php include(locate_template('template-parts/slider.php')); ?>


<?php include(locate_template('template-parts/services.php')); ?>


<?php
$post = get_post(41);
$content = $post->post_content;
?>

<?php if ($content) : ?>
    <section class="seo-post">
        <div class="container">
            <h1 class="seo-post__title title-md"><?php the_title(); ?></h1>
            <div class="seo-post__text post">
                <?php echo $content ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_template_part('template-parts/works'); ?>
<?php get_template_part('template-parts/partners'); ?>

<?php $tag = 'main' ?>
<?php include(locate_template('template-parts/reviews.php')); ?>


<?php get_footer(); ?>