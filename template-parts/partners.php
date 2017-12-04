<?php $category_partners_id = get_cat_ID('Партнеры'); ?>

<section class="partners">
    <div class="container">
        <div class="row">
            <?php if ($category_partners_id) : ?>
            <div class="col-xs-12 col-sm-12 col-lg-5">
                <h2 class="partners__header-title title-md"><?php echo get_cat_name( $category_partners_id ) ?></h2>
                <div class="text-md">
                    <?php echo category_description( $category_partners_id ); ?>
                </div>
                <a href="/o-kompanii/" class="partners__btn btn">БОЛЬШЕ О КОМПАНИИ</a>
            </div>
            <div class="col-lg-1 hidden-sm-down">
            </div>
            <?php endif; ?>
            <div class="col-xs-12 col-sm-12 col-lg-6">
                <div title="Наши партнеры" class="partners__title">Наши партнеры</div>

                <div class="partners__wrap">

                    <div class="partners__row">
                        <a href="http://aqualeonpro.ru/" target="_blank" class="partners__item">
                            <img src="<?php bloginfo("template_directory"); ?>/assets/img/partners/partners-1.png"
                                 alt="" class="center">
                        </a>
                        <a href="http://aquatics.su/" target="_blank" class="partners__item">
                            <img src="<?php bloginfo("template_directory"); ?>/assets/img/partners/partners-2.png"
                                 alt="" class="center">
                        </a>
                        <a href="http://cosba.ru/" target="_blank" class="partners__item">
                            <img src="<?php bloginfo("template_directory"); ?>/assets/img/partners/partners-3.png"
                                 alt="" class="center">
                        </a>

                    </div>
                    <div class="partners__row">
                        <a href="http://www.acon.ru/" target="_blank" class="partners__item">
                            <img src="<?php bloginfo("template_directory"); ?>/assets/img/partners/partners-4.png"
                                 alt="" class="center">
                        </a>
                        <a href="https://grilld.ru/" target="_blank" class="partners__item">
                            <img src="<?php bloginfo("template_directory"); ?>/assets/img/partners/partners-5.png"
                                 alt="" class="center">
                        </a>
<!--                        <div class="partners__item">-->
<!--                            <img src="--><?php //bloginfo("template_directory"); ?><!--/assets/img/partners/partners-1.png"-->
<!--                                 alt="">-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

