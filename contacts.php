<?php
/*
Template Name: Contacts Page
*/
?>
<?php get_header(); ?>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCacI9eBtbw4m3Vgcpiu6cE2ueBL3_huog">
</script>

<section class="contacts">
    <div class="contacts__map" id="map"></div>
    <div class="container">
    <div class="contacts__block">
        <div class="breadcrumbs breadcrumbs_blue">
            <a href="/" class="breadcrumbs__item">Главная</a>
            <a href="" class="breadcrumbs__item">Контакты</a>
        </div>
        <h1 class="contacts__title title-md">Контакты</h1>

        <div class="contacts__line">
            <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/geo.svg' ); ?>

            <div class="contacts__info">
                Уфа, Владивостокская улица, 3А
            </div>
        </div>
        <div class="contacts__line">
            <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/phone.svg' ); ?>

            <div class="contacts__info">
                +7 (347) 266-97-86
            </div>
        </div>
        <div class="contacts__line _mail">
            <?php echo file_get_contents(get_template_directory_uri() . '/assets/svg/icon-mail.svg' ); ?>

            <a href="mailto:briks-ufa@mail.ru" class="contacts__info link">
                <div class="link__text">briks-ufa@mail.ru</div>
            </a>
        </div>

        <div class="contacts__form-block">
            <div class="contacts__form-title">ЗАДАТЬ ВОПРОС</div>
            <form action="wp-admin/admin-post.php" method="post" class="contacts__form">
                <input type="text" class="input" placeholder="Ваше имя">
                <input type="text" class="input" placeholder="Ваш email">
                <textarea class="textarea" placeholder="Ваше сообщение"></textarea>
                    <button type="submit" class="contacts__form-btn btn">Отправить вопрос</button>
            </form>
        </div>
    </div>
    </div>
</section>

<?php get_footer(); ?>
