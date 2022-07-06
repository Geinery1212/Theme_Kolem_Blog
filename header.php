<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=bloginfo('template_url')?>/css/style.css?v=<?=time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>
    <?php
if (is_home()) {
    echo get_bloginfo('name');
} else if (is_single()) {
    echo the_title();
} else {
    echo get_bloginfo('name');
}
?>
    </title>
    <?php wp_head();?>
</head>

<body>
    <header class="header">
        <section class="header__first-row container">
        <div class="content-left">
            <?php if (function_exists('the_custom_logo') && has_custom_logo()): ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="content-left__logo_small content-left_no-margin" rel="home">
                        <?php bloginfo('name');?>
                    </a>
            <?php endif;?>
        </div>
            <!-- <div class="content-left">
                <a href="<?=bloginfo('url')?>"><img src="<?=bloginfo('template_url')?>/img/logo_obs_p10.png" class="content-left__logo_small content-left_no-margin" alt="Logo"></a>
                <p class="content-left__phrase">Lorem, ipsum.</p>
            </div> -->
            <div class="content-right">
                <a href="#" class="content-right__link">Acerca de</a>
                <a href="#" class="content-right__link content-right_no-margin">Contacto</a>
            </div>
        </section>
        <section class="header__second-row">
            <div class="container">
                <div class="content-left">
                <?php if (function_exists('the_custom_logo') && has_custom_logo()): ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php the_custom_logo();?>
                    </a>
                <?php else: ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name');?>
                    </a>
                <?php endif;?>
                    <div class="content-left__phrase content-left__phrase_right">
                        <h1 class="content-left__phrase-h1">Neque porro quisquam est qui </h1>
                        <h3 class="content-left__phrase-h3"> odio sed urna. Nunc nec tortor eros.</h3>
                    </div>
                </div>
                <div class="content-right">
                </div>
            </div>
        </section>
        <section class="header__third-row">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
                <div class="parallax-bg" data-swiper-parallax="-23%"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="title" data-swiper-parallax="-300">Slide 1</div>
                        <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                        <div class="text" data-swiper-parallax="-100">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
                                laoreet justo vitae porttitor porttitor.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="title" data-swiper-parallax="-300">Slide 2</div>
                        <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                        <div class="text" data-swiper-parallax="-100">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
                                laoreet justo vitae porttitor porttitor.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="title" data-swiper-parallax="-300">Slide 3</div>
                        <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                        <div class="text" data-swiper-parallax="-100">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
                                laoreet justo vitae porttitor porttitor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="header__fourth-row">
            <div class="container-lg">
                <span class="nav-bar" id="btn-menu"><i class="fa-solid fa-bars"></i><span
                        class="nav-bar-text">Menú</span></span>
                    <nav class="main-nav">
                    <?php
if (has_nav_menu('menu-top')) {
    wp_nav_menu(array(
        'theme_location' => 'menu-top',
        'depth' => 2,
        'container' => 'ul',
        'container_class' => '',
        'container_id' => '',
        'menu_class' => 'menu',
        'menu_id' => 'menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s"><li class="asd">%3$s</li></ul>',
    ));
}
?>
                    </nav>
            </div>
        </section>
    </header>