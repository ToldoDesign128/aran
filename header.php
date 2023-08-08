<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no" />
    <meta name="theme-color" content="#417BC7">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body>

    <!-- Main Navigation  -->
    <section class="fixed top-0 left-0 w-full z-40">

        <!-- Top Bar  -->
        <div class="bg-neutral-900 w-full">
            <div class="max-w-screen-xl mx-auto py-2 flex justify-between">
                <div class="w-4/12 flex justify-between">

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
                <div class="w-4/12 flex justify-between">

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
            <div class="max-w-screen-xl mx-auto py-5 flex justify-between">
                <a href="<?php echo get_home_url(); ?>" class="w-3/12">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.svg'; ?>" class="h-12"></img>
                </a>
                <nav class="w-8/12 flex">
                    <?php wp_nav_menu(array(
                        'theme_location'    => 'header',
                        'container'         =>  false,
                        'menu_class'        => 'flex justify-between uppercase text-lg tracking-wider items-center w-full',
                        'orderby'           => 'menu_order'
                    )); ?>
                </nav>
            </div>
        </header>
    </section>