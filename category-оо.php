<?php
/*
Template Name: Category Page
*/
?>

<?php get_header(); ?>

    <section class="category-header">
        <div class="container">
            <?php get_template_part( 'breadcrumbs' ); ?>

            <h1 class="category-header__title title-md"><?php single_cat_title(); ?></h1>
            <div class="category-header__text">
                <?php do_shortcode( $category->description ); ?>
            </div>
        </div>
    </section>

    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-lg-3 category__item">
                    <a href="/" class="category__inner">
                        <div class="category__img">
                            <img src="<?php bloginfo("template_directory");?>/assets/img/products/product.jpg" alt="">
                        </div>
                        <div class="category__item-info">
                            <div class="category__title link">
                                <div class="link__text">Дезинфектор жидкий, канистра 33 кг</div>
                            </div>
                            <div class="category__description">Альгицид Aquatics представляет собой эффективный и безопасный…</div>
                            <span class="category__price">1500 P</span>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-3 category__item">
                    <a href="/" class="category__inner">
                        <div class="category__img">
                            <img src="<?php bloginfo("template_directory");?>/assets/img/products/product.jpg" alt="">
                        </div>
                        <div class="category__title link">
                        <span class="link__text">Альгицид Aquatics представляет собой эффективный и безопасный…</span>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-3 category__item">
                    <a href="/" class="category__inner">
                        <div class="category__img">
                            <img src="<?php bloginfo("template_directory");?>/assets/img/products/product.jpg" alt="">
                        </div>
                        <div class="category__title link">
                            <span class="link__text">Название</span>

                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-3 category__item">
                    <a href="/" class="category__inner">
                        <div class="category__img">
                            <img src="<?php bloginfo("template_directory");?>/assets/img/products/product.jpg" alt="">
                        </div>
                        <div class="category__title link">Название</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="category-post">
        <div class="container">
        <h2 class="title-sm category-post__title">Интернет-магазин химии для бассейнов БАССЕЙНМАГ.РФ</h2>

        <div class="category-post__annotation">Обслуживание домашнего бассейна либо бассейна общественного пользования
            представляет собой довольно сложную и дорогостоящую процедуру. Поэтому для покупателей важно найти такой
            магазин химии для бассейнов,
            который предлагает не только высокое качество, но и приемлемые цены.
        </div>
        <div class="category-post__text">
            В ассортименте нашего интернет-магазина химии для бассейна представлена продукция лучших российских и
            европейских производителей. Мы гарантируем, что весь товар соответствует самым высоким стандартам качества и
            экологичности.

            Вы сможете приобрести у нас современные препараты для бассейнов всех типов, включая эффективные средства на
            основе активного кислорода и хлора. Кроме средств для дезинфекции и очистки воды, наш магазин предлагает
            препараты для уничтожения водорослей, осветления воды и зимней консервации бассейна.
            Вам больше не нужно искать, где купить химию для бассейнов – в нашем магазине представлено все, что вам
            может понадобиться!

            Если при выборе средства у вас возникнут сложности, обратитесь к нашим специалистам. Они предоставят
            грамотные консультации и расскажут о характеристиках того или иного товара. Мы поможем вам выбрать именно
            тот товар, который оптимально подойдет для вашего бассейна.

            Оптовая продажа химии для бассейнов позволит вам хорошо сэкономить. У нас покупают химию как для домашних,
            так и общественных бассейнов. Благодаря широкому ассортименту, каждый покупатель сможет найти у нас все
            необходимое для качественного обслуживания бассейна.
            Делать покупки в нашем магазине - удобно, надежно и выгодно!

        </div></div>
    </section>

<?php get_footer(); ?>