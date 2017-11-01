<section class="works">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-5">
                <article class="works__post">
                    <h2 class="works__header-title title-md">Наши работы</h2>
                    <p class="works__text text-md">
                        Мы поможем Вам выбрать оптимальный размер,
                        тип и форму будущего бассейна в зависимости от индивидуальных особенностей объекта и Ваших
                        пожеланий.
                    </p>
                    <a href="" class="link">
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
                            <div class="swiper-slide works__banner"></div>
                            <div class="swiper-slide works__banner"></div>
                            <div class="swiper-slide works__banner"></div>
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