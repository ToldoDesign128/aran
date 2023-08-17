<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no" />
    <meta name="theme-color" content="#417BC7">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5B7BWHSB');
    </script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5B7BWHSB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Main Navigation  -->
    <section class="fixed top-0 left-0 w-full z-40" style="max-width: 100vw;">

        <!-- Top Bar  -->
        <div class="lg:block hidden bg-neutral-900 w-full">
            <div class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg mx-auto py-2 px-5 flex justify-between">
                <div class="xl:w-4/12 lg:w-5/12 flex justify-between">

                    <!-- Telefono  -->
                    <?php
                    $link = get_field('link_1', 'option');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a class="text-white text-sm" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/telefono-header.svg'; ?>" class="inline mr-2 max-h-4 mt-negative"><?php echo esc_html($link_title); ?></a>

                        <!-- Indirizzo  -->
                    <?php endif;
                    $link2 = get_field('link_2', 'option');
                    if ($link2) :
                        $link2_url = $link2['url'];
                        $link2_title = $link2['title'];
                        $link2_target = $link2['target'] ? $link2['target'] : '_self';
                    ?>
                        <a class="text-white text-sm" href="<?php echo esc_url($link2_url); ?>" target="<?php echo esc_attr($link2_target); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/indirizzo-header.svg'; ?>" class="inline mr-2 max-h-4 mt-negative"><?php echo esc_html($link2_title); ?></a>
                    <?php endif; ?>
                </div>
                <div class="xl:w-4/12 lg:w-5/12 flex justify-between">

                    <!-- Catalogo  -->
                    <?php
                    $link3 = get_field('link_3', 'option');
                    if ($link3) :
                        $link3_url = $link3['url'];
                        $link3_title = $link3['title'];
                        $link3_target = $link3['target'] ? $link3['target'] : '_self';
                    ?>
                        <a class="text-white text-sm" href="<?php echo esc_url($link3_url); ?>" target="<?php echo esc_attr($link3_target); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo-header.svg'; ?>" class="inline mr-2 max-h-4 mt-negative"><?php echo esc_html($link3_title); ?></a>

                        <!-- Appuntamento  -->
                    <?php endif;
                    $link4 = get_field('link_4', 'option');
                    if ($link4) :
                        $link4_url = $link4['url'];
                        $link4_title = $link4['title'];
                        $link4_target = $link4['target'] ? $link4['target'] : '_self';
                    ?>
                        <a class="text-white text-sm" href="<?php echo esc_url($link4_url); ?>" target="<?php echo esc_attr($link4_target); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/appuntamento-header.svg'; ?>" class="inline mr-2 max-h-4 mt-negative"><?php echo esc_html($link4_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <header class="w-full bg-white">
            <div class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md sm:max-w-screen-sm max-w-sm md:mx-auto mx-1 py-5 md:px-5 px-1 flex justify-between">

                <a href="<?php echo get_home_url(); ?>" class="flex items-center">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.svg'; ?>" class="h-12"></img>
                </a>

                <button class="lg:hidden w-auto hamburger hamburger--collapse" type="button" aria-label="Menu" aria-controls="navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <div class="lg:w-8/12 w-full lg:flex hidden">
                    <nav class="w-full flex">
                        <?php wp_nav_menu(array(
                            'theme_location'    => 'header',
                            'container'         =>  false,
                            'menu_class'        => 'flex justify-between uppercase text-lg tracking-wider items-center w-full',
                            'orderby'           => 'menu_order'
                        )); ?>
                    </nav>
                </div>

            </div>
        </header>

        <!-- Header mobile -->
        <header id="menu-mobile" class="hidden bg-neutral-900 flex-col py-12">
            <nav class="w-full md:max-w-screen-md sm:max-w-screen-sm max-w-sm md:mx-auto mx-1 md:px-5 px-1 flex justify-between items-center">
                <?php wp_nav_menu(array(
                    'theme_location'    => 'header',
                    'container'         =>  false,
                    'menu_class'        => 'text-white w-full flex flex-col items-center uppercase text-lg tracking-wider',
                    'orderby'           => 'menu_order'
                )); ?>
            </nav>
            <div class="w-full md:max-w-screen-md sm:max-w-screen-sm max-w-sm md:mx-auto md:px-5 px-1 w-full flex flex-col items-center">

                <!-- Catalogo  -->
                <?php
                $link3 = get_field('link_3', 'option');
                if ($link3) :
                    $link3_url = $link3['url'];
                    $link3_title = $link3['title'];
                    $link3_target = $link3['target'] ? $link3['target'] : '_self';
                ?>
                    <a class="text-white text-sm w-full flex justify-center items-center py-2" href="<?php echo esc_url($link3_url); ?>" target="<?php echo esc_attr($link3_target); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo-header.svg'; ?>" class="inline mr-2 max-h-4 lg:mt-negative"><?php echo esc_html($link3_title); ?></a>

                    <!-- Appuntamento  -->
                <?php endif;
                $link4 = get_field('link_4', 'option');
                if ($link4) :
                    $link4_url = $link4['url'];
                    $link4_title = $link4['title'];
                    $link4_target = $link4['target'] ? $link4['target'] : '_self';
                ?>
                    <a class="text-white text-sm w-full flex justify-center items-center py-2" href="<?php echo esc_url($link4_url); ?>" target="<?php echo esc_attr($link4_target); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/appuntamento-header.svg'; ?>" class="inline mr-2 max-h-4 lg:mt-negative"><?php echo esc_html($link4_title); ?></a>
                <?php endif; ?>
            </div>
        </header>
    </section>