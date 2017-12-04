<?php $category_works_id = get_cat_ID('Наши работы'); ?>

<?php if ($category_works_id) : ?>
<section class="works">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-5">
                <article class="works__post">
                    <h2 class="works__header-title title-md" title="<?php echo get_cat_name( $category_works_id ) ?>"><?php echo get_cat_name( $category_works_id ) ?></h2>
                    <div class="works__text text-md">
                        <?php echo category_description( $category_works_id ); ?>
                    </div>
                    <a href="<?php echo get_category_link( $category_works_id ); ?>" class="link">
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
                            <div class="swiper-slide works__banner" style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/works/1.jpg);"></div>
                            <div class="swiper-slide works__banner" style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/works/2.jpg);"></div>
                            <div class="swiper-slide works__banner" style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/works/3.jpg);"></div>
                            <div class="swiper-slide works__banner" style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/works/4.jpg);"></div>
                            <div class="swiper-slide works__banner" style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/works/5.jpg);"></div>
                            <div class="swiper-slide works__banner" style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/works/6.jpg);"></div>
                            <div class="swiper-slide works__banner" style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/works/7.jpg);"></div>
                            <div class="swiper-slide works__banner" style="background-image: url(<?php bloginfo("template_directory"); ?>/assets/img/works/8.jpg);"></div>
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