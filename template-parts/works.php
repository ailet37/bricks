<?php $category_works_id = get_cat_ID('Наши работы'); ?>

<?php

$children_categories = get_categories('child_of=' . $category_works_id . '');

?>

<?php if ($category_works_id) : ?>
    <section class="works">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-5">
                    <article class="works__post">
                        <h1 class="works__header-title title-md"
                            title="<?php echo get_cat_name($category_works_id) ?>"><?php echo get_cat_name($category_works_id) ?></h1>
                        <div class="works__text text-md">
                            <?php echo category_description($category_works_id); ?>
                        </div>
                        <a href="<?php echo get_category_link($category_works_id); ?>" class="link">
                        <span class="link__text">
                            Все работы
                        </span>
                        </a>
                    </article>

                </div>
                <div class="col-lg-1 hidden-sm-down">
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6">
                    <div class="works__wrap">
                        <div class="works__slider swiper-container js-works-slider">
                            <div class="swiper-wrapper">
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
                                        <?php while ($news_query->have_posts()) : $news_query->the_post() ?>
                                            <div class="swiper-slide works__banner"
                                                 style="background-image: url(<?php echo the_post_thumbnail_url('large'); ?>);">
                                                <a href="<?php echo $link; ?>" class="works__banner-link link"><?php echo $children_category->name; ?></a>
                                            </div>
                                        <?php endwhile ?>
                                    <?php endforeach; ?>
                                <?php endif; ?> 
                            </div>
                        </div>
                        <div class="works__slider-nav">
                            <button class="works__nav-prev circle-btn center-svg js-works-prev">
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                            </button>

                            <div class="works__slider-pag js-works-pag"></div>

                            <button class="works__nav-next circle-btn center-svg js-works-next">
                                <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/arrow.svg'); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>