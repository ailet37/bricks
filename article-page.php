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
            <h1 title="<?php the_title_attribute(); ?>" class="teaser__title title-md">
                <?php echo get_the_title(); ?>
            </h1>
            <div class="teaser__descr">
                Обслуживание домашнего бассейна либо бассейна общественного пользования представляет собой довольно
                сложную и дорогостоящую процедуру. Поэтому для покупателей важно найти такой магазин химии для
                бассейнов, который предлагает не только высокое качество, но и приемлемые цены.
            </div>
        </div>
    </div>
</section>

<section class="post">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

<!--        <p class="post__annotation text-md">-->
<!--            Обслуживание домашнего бассейна либо бассейна общественного пользования представляет собой довольно-->
<!--            сложную и дорогостоящую процедуру. Поэтому для покупателей важно найти такой магазин химии для-->
<!--            бассейнов, который предлагает не только высокое качество, но и приемлемые цены.-->
<!--        </p>-->
<!---->
<!--        <h2 class="post__title-md">-->
<!--            Басики-->
<!--        </h2>-->
<!---->
<!--        <p>-->
<!--            Обслуживание домашнего бассейна либо бассейна общественного пользования представляет собой довольно-->
<!--            сложную и дорогостоящую процедуру. Поэтому для покупателей важно найти такой магазин химии для-->
<!--            бассейнов, который предлагает не только высокое качество, но и приемлемые цены.  Обслуживание домашнего бассейна либо бассейна общественного пользования представляет собой довольно-->
<!--            сложную и дорогостоящую процедуру. Поэтому для покупателей важно найти такой магазин химии для-->
<!--            бассейнов, который предлагает не только высокое качество, но и приемлемые цены.-->
<!--        </p>-->
<!---->
<!--        <h3>Басики</h3>-->
<!---->
        <blockquote>
            Обслуживание домашнего бассейна либо бассейна общественного пользования представляет
            собой довольно сложную и дорогостоящую процедуру. Поэтому для покупателей важно найти такой магазин
            химии для бассейнов, который предлагает не только высокое качество, но и приемлемые цены.
        </blockquote>

<!---->
<!--        <h4>fjskjfksfs</h4>-->
    </div>
</section>


<?php get_footer(); ?>
