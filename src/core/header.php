<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
<!--    <meta id="vp" name="viewport" content="width=device-width">-->
    <meta id="vp" name="viewport" content="width=1200px">
    <title>Info-tech</title>
    <?php wp_head(); ?>
</head>
<?php global $redux_demo; ?>
<body>
<header class="header">
    <div class="header__wrapper">
        <a class="header__logo logo" href="<?php echo pll_home_url(); ?>">
            <img src="<?php the_field('logo', 'option')['url']; ?>"
                 alt=""
                 class="logo__img">
        </a>
        <?php wp_nav_menu( [
            'theme_location'  => 'primary',
            'menu'            => 'primary',
            'container'       => 'nav',
            'container_class' => 'header__menu menu',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="menu__list">%3$s</ul>',
            'depth'           => 0,
        ] ); ?>
        <a target="_blank" href="tel:<?php the_field('phone', 'option'); ?>"
           class="header__phone">
            <?php the_field('phone', 'option'); ?>
        </a>
        <button class="header__callback js-callback">
            Обратный звонок
        </button>
        <div class="header__lang lang">
            <?php get_template_part('templates/components/lang-up')?>
        </div>
        <img class="header__mobile" src="<?php echo get_template_directory_uri(); ?>/img/main/main-menu.svg">
        <img class="header__close d-none" src="<?php echo get_template_directory_uri(); ?>/img/main/close-menu.svg">

        <?php get_template_part('templates/components/tablet-menu'); ?>

    </div>

</header>
<?php get_template_part('templates/components/callback'); ?>
<div class="background d-none"></div>