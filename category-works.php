<?php
/*
Template Name: Category Works
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

    <section class="category category_works">
        <div class="container">

            <?php $news_query = new WP_Query; ?>
            <?php if ($children_categories): // если есть дочерние категории ?>
                <?php foreach ($children_categories as $children_category): ?>
                    <?php

                    //ссылка на рубрику
                    $link = get_category_link($children_category->cat_ID);
                    //берем первый пост категории, из него - обложку
                    $news_query->query(array(
                        'cat' => $children_category->cat_ID,
                        'posts_per_page' => 1,
                        'no_found_rows' => true,
                        'ignore_sticky_posts' => true,
                    ));
                    ?>
                    <div class="row category__row">
                        <?php while ($news_query->have_posts()) : $news_query->the_post() ?>
                            <div class="col-xs-4 col-sm-4 col-lg-3 category__item">

                                <a href="<?php echo $link; ?>" class="category__inner">
                                    <div class="category__img"
                                         style="background-image: url(<?php echo the_post_thumbnail_url('large'); ?>);"></div>
                                </a>

                            </div>
                            <div class="col-xs-8 col-sm-8 col-lg-9 category__item">
                                <a href="<?php echo $link; ?>" class="category__item-link"><h2 title="<?php the_title(); ?>"><?php the_title(); ?></h2></a>
                                <?php echo category_description($children_category->cat_ID); ?>...
                                <a href="<?php echo $link; ?>" class="link">Подробнее</a>
                            </div>
                        <?php endwhile ?>
                    </div>
                <?php endforeach; ?>
            <?php else: // иначе - выводим записи ?>
                <?php if (have_posts()) : ?>

                    <div class="row">

                        <?php while (have_posts()) : the_post(); ?>
                            <?php $post_id = get_the_ID();
                            $medias = get_post_gallery_images($post_id);

                            if ($medias) {
                                foreach ($medias as $attachment) { ?>
                                    <div class="col-xs-12 col-sm-4 col-lg-3 category__item">
                                        <a data-fancybox="group" href="<?php echo $attachment ?>"
                                           class="category__inner category__inner-link">
                                            <div class="category__img"
                                                 style="background-image: url(<?php echo $attachment ?>);">
                                            </div>
                                        </a>
                                    </div>
                                <?php }
                            } ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            <?php endif; // конец условия - если есть дочерние категории ?>
        </div>
    </section>


    <section class="category-post post">
        <div class="container">
            <?php show_descr_bottom($cat); // выводим нижнее описание категории ?>
        </div>
    </section>


<?php get_footer(); ?>