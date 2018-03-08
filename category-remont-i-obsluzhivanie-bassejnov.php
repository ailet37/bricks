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
                <h1 title="<?php single_cat_title('', true ); ?>" class="teaser__title title-md">
                    <?php single_cat_title('', true ); ?>
                </h1>
                <div class="teaser__descr">
                    <?php show_descr_top($cat); // выводим верхнее описание категории ?>
                </div>
            </div>
        </div>
    </section>

    <section class="post">
        <div class="container">
            <?php show_descr_bottom($cat); // выводим нижнее описание категории ?>
        </div>
    </section>


<?php get_footer(); ?>