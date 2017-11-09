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

            <div class="breadcrumbs">
                <a href="/" class="breadcrumbs__item">Главная</a>
                <a href="" class="breadcrumbs__item _active"><?php single_cat_title(); ?></a>

            </div>

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
                        <?php $link = get_category_link($children_category->cat_ID); ?>

                        <div class="col-xs-12 col-sm-4 col-lg-3 category__item">
                            <a href="<?php echo $link; ?>" class="category__inner">
                                <div class="category__img" style="background-image: url();">
                                    <img src="<?php bloginfo("template_directory"); ?>/assets/img/products/product.jpg"
                                         alt="">
                                </div>
                                <div class="category__item-info">
                                    <div class="category__title link">
                                        <div class="link__text"><?php echo $children_category->name; ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                <?php else: // иначе - выводим записи ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-xs-12 col-sm-4 col-lg-3 category__item">
                                <a href="<?php the_permalink(); ?>" class="category__inner" title="<?php the_title(); ?>">
                                    <div class="category__img"
                                         style="background-image: url(<?php the_post_thumbnail_url(200, 200); ?>);">
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
                                            <span class="category__price"><?php echo $price; ?> ₽</span>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; // конец условия - если есть дочерние категории ?>
            </div>
        </div>
    </section>


    <section class="category-post post">
        <div class="container">
            <?php show_descr_bottom($cat); // выводим нижнее описание категории ?>
        </div>
    </section>



<?php get_footer(); ?>