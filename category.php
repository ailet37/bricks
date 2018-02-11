<?php
/*
Template Name: Category
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

    <section class="category">
        <div class="container">
            <div class="row">
                <?php if ($children_categories): // если есть дочерние категории ?>
                    <?php foreach ($children_categories as $children_category): ?>
                        <?php

                        //ссылка на рубрику
                        $link = get_category_link($children_category->cat_ID);

                        //берем первый пост категории, из него - обложку
                        $products = get_posts(array(
                                'post_type' => 'product',
                                'category' => $children_category->cat_ID,
                                'numberposts' => 1)
                        ); ?>
                        <?php foreach( $products as $post ) :
                            setup_postdata($post); ?>
                            <div class="col-xs-12 col-sm-4 col-lg-3 category__item">
                                <a href="<?php echo $link; ?>" class="category__inner">
                                    <div class="category__img" style="background-image: url(<?php echo the_post_thumbnail_url('large'); ?>);"></div>
                                    <div class="category__item-info">
                                        <div class="category__title link">
                                            <div class="link__text"><?php echo $children_category->name; ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                <?php else: // иначе - выводим записи ?>
                    <?php

                    $products = get_posts(array('post_type' => 'product'));

                    if ($products)
                        foreach( $products as $post ) :

                            setup_postdata($post); ?>
                            <div class="col-xs-12 col-sm-4 col-lg-3 category__item">
                                <a href="<?php the_permalink(); ?>" class="category__inner" title="<?php the_title(); ?>">
                                    <div class="category__img"
                                         style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">
                                    </div>
                                    <div class="category__item-info">
                                        <div class="category__title link">
                                            <div class="link__text"><?php the_title(); ?></div>
                                        </div>
                                        <div class="category__description">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <?php $price = get_post_meta($post->ID, 'Цена', true ); ?>
                                        <?php if ($price) : ?>
                                            <span class="category__price"><?php echo $price; ?> руб</span>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>

                        <?php endforeach;
                    wp_reset_postdata();

                 endif; // конец условия - если есть дочерние категории ?>
            </div>
        </div>
    </section>


    <section class="category-post post">
        <div class="container">
            <?php show_descr_bottom($cat); // выводим нижнее описание категории ?>
        </div>
    </section>


<?php get_footer(); ?>