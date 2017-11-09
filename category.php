<?php
/*
Template Name: Category Root Page
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

            <p class="category-header__text"><?php do_shortcode($category->description); ?></p>

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
                                <a href="<?php the_permalink(); ?>" class="category__inner">
                                    <div class="category__img"
                                         style="background-image: url(<?php the_post_thumbnail_url(200, 200); ?>);">
                                        <!--                                <img src="-->
                                        <?php //the_post_thumbnail_url( 200,200 ); ?><!--" alt="">-->
                                    </div>
                                    <div class="category__item-info">
                                        <div class="category__title link">
                                            <div class="link__text"><?php the_title(); ?></div>
                                        </div>
                                        <div class="category__description">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>

                    <?php endif; ?>
                <?php endif; // конец условия - если есть дочерние категории ?>

            </div>
        </div>
    </section>


    <section class="category-post">
        <div class="container">
            <h2 class="title-sm category-post__title">Интернет-магазин химии для бассейнов БАССЕЙНМАГ.РФ</h2>

            <div class="category-post__annotation">Обслуживание домашнего бассейна либо бассейна общественного
                пользования
                представляет собой довольно сложную и дорогостоящую процедуру. Поэтому для покупателей важно найти такой
                магазин химии для бассейнов,
                который предлагает не только высокое качество, но и приемлемые цены.
            </div>
            <div class="category-post__text">
                В ассортименте нашего интернет-магазина химии для бассейна представлена продукция лучших российских и
                европейских производителей. Мы гарантируем, что весь товар соответствует самым высоким стандартам
                качества и
                экологичности.

                Вы сможете приобрести у нас современные препараты для бассейнов всех типов, включая эффективные средства
                на
                основе активного кислорода и хлора. Кроме средств для дезинфекции и очистки воды, наш магазин предлагает
                препараты для уничтожения водорослей, осветления воды и зимней консервации бассейна.
                Вам больше не нужно искать, где купить химию для бассейнов – в нашем магазине представлено все, что вам
                может понадобиться!

                Если при выборе средства у вас возникнут сложности, обратитесь к нашим специалистам. Они предоставят
                грамотные консультации и расскажут о характеристиках того или иного товара. Мы поможем вам выбрать
                именно
                тот товар, который оптимально подойдет для вашего бассейна.

                Оптовая продажа химии для бассейнов позволит вам хорошо сэкономить. У нас покупают химию как для
                домашних,
                так и общественных бассейнов. Благодаря широкому ассортименту, каждый покупатель сможет найти у нас все
                необходимое для качественного обслуживания бассейна.
                Делать покупки в нашем магазине - удобно, надежно и выгодно!

            </div>
        </div>
    </section>

<?php get_footer(); ?>