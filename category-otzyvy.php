<?php
/*
Template Name: Otzyvy
*/
?>

<?php get_header(); ?>

<?php
$cat = get_query_var('cat');
$children_categories = get_categories('parent=' . $cat . '');
?>

    <section class="category-header">
        <div class="container">

            <?php get_template_part('breadcrumbs'); ?>

            <h1 class="category-header__title title-md"><?php single_cat_title(); ?></h1>

            <p class="category-header__text">
                <?php show_descr_top($cat); // выводим верхнее описание категории ?>
            </p>

        </div>
    </section>

    <?php include(locate_template('template-parts/reviews.php')); ?>


    <section class="category-post post">
        <div class="container">
            <?php show_descr_bottom($cat); // выводим нижнее описание категории ?>
        </div>
    </section>


<?php get_footer(); ?>