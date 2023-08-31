<?php get_header(); ?>

<main>

    <!-- hero -->
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:px-8 px-4 mx-auto lg:py-24 py-20 flex flex-col items-center">
        <h1 class="xl:text-5xl lg:text-4xl text-3xl font-serif uppercase lg:mt-24 mt-20 text-center"><?php the_field('titolo_consulenza'); ?></h1>
        <div class="xl:text-3xl lg:text-2xl text-xl font-serif lg:my-8 my-4 text-center">
            <?php the_field('testo_consulenza'); ?>
        </div>
    </section>

    <!-- banner -->
    <section class="w-full bg-stone-900">
        <div class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:px-8 px-4 mx-auto lg:py-24 py-12 flex lg:flex-row flex-col justify-between">
                <?php
                $banner_consulenza = get_field('banner_consulenza');
                if ($banner_consulenza) : ?>
                    <div class="lg:w-4/12 w-full flex lg:gap-0 gap-4 lg:my-8 my-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/consulenza/stella.svg'; ?>" alt="" class="w-2/12 mt-3 max-h-8">
                        <div class="flex flex-col w-9/12">
                            <h4 class="w-full text-brown-aran xl:text-3xl lg:text-2xl text-xl font-serif my-2"><?php echo esc_html($banner_consulenza['titolo_1_banner_consulenza']); ?></h4>
                            <p class="w-full text-white"><?php echo esc_html($banner_consulenza['testo_1_banner_consulenza']); ?></p>
                        </div>
                    </div>
                    <div class="lg:w-4/12 w-full flex lg:gap-0 gap-4 lg:my-8 my-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/consulenza/omino.svg'; ?>" alt="" class="w-2/12 mt-3 max-h-8">
                        <div class="flex flex-col w-9/12">
                            <h4 class="w-full text-brown-aran xl:text-3xl lg:text-2xl text-xl font-serif my-2"><?php echo esc_html($banner_consulenza['titolo_2_banner_consulenza']); ?></h4>
                            <p class="w-full text-white"><?php echo esc_html($banner_consulenza['testo_2_banner_consulenza']); ?></p>
                        </div>
                    </div>
                    <div class="lg:w-4/12 w-full flex lg:gap-0 gap-4 lg:my-8 my-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/consulenza/like.svg'; ?>" alt="" class="w-2/12 mt-3 max-h-8">
                        <div class="flex flex-col w-9/12">
                            <h4 class="w-full text-brown-aran xl:text-3xl lg:text-2xl text-xl font-serif my-2"><?php echo esc_html($banner_consulenza['titolo_3_banner_consulenza']); ?></h4>
                            <p class="w-full text-white"><?php echo esc_html($banner_consulenza['testo_3_banner_consulenza']); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
        </div>
    </section>

    <?php get_template_part( 'template-parts/form-consulenza'); ?>

</main>
<?php get_footer(); ?>