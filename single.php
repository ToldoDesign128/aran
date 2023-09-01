<?php get_header(); ?>

<main>
    <!-- Hero -->
    <section class="w-full lg:h-[90vh] h-full flex lg:flex-row flex-col pt-24">
        <div class="lg:w-6/12 w-full">
            <?php the_post_thumbnail('thumb_xxlarge', ['class' => 'object-cover h-full']); ?>
        </div>
        <div class="xl:w-5/12 lg:w-4/12 w-full flex flex-col justify-center lg:ml-[8.3%] px-4">
            <h2 class="text-3xl font-serif uppercase my-12"><?php echo get_the_title(); ?></h2>
            <p><?php echo esc_html(get_field('sottotitolo_1')); ?></p>
            <p class="text-xl font-serif mt-4 mb-8"><?php echo esc_html(get_field('composizioni_disponibili')); ?></p>
            <p><?php echo esc_html(get_field('sottotitolo_2')); ?></p>
            <p class="text-xl font-serif mt-4 mb-8"><?php echo esc_html(get_field('sottotitolo_testo')); ?></p>
        </div>
    </section>
    <!-- Banner -->
    <section class="w-full bg-neutral-900 lg:py-24 py-12">
        <div class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:px-8 px-4 mx-auto flex lg:flex-row flex-col flex-wrap justify-between">
            <p class="lg:w-4/12 w-full text-3xl text-white font-serif lg:my-0 my-8"><?php echo esc_html(get_field('banner_titolo')); ?></p>
            <div class="lg:w-7/12 w-full text-sm text-white lg:my-0 my-8"><?php the_field('testo_banner'); ?></div>
        </div>
    </section>
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:px-8 px-4 mx-auto py-20">
        <?php
        $image = get_field('immagine_1_single');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full m-h-[32rem] aspect-video object-cover" />
        <?php endif; ?>
        <div class="w-full grid grid-cols-2 lg:gap-8 gap-4 lg:mt-8 mt-4">
            <?php
            $image2 = get_field('immagine_2_single');
            if (!empty($image2)) : ?>
                <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" class="w-full aspect-square object-cover"/>
            <?php endif;
            $image3 = get_field('immagine_3_single');
            if (!empty($image3)) : ?>
                <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" class="w-full aspect-square object-cover"/>
            <?php endif; ?>
        </div>
    </section>
    <!-- Gallery -->
    <section class="lg:py-20 py-8 relative z-10">
        <div id="slider-base" class="splide">
            <div class="splide__track z-20 lg:mb-12 mb-8">
                <?php
                $images_single = get_field('slider_single');
                $size_single = 'thumb_xlarge';
                if ($images_single) : ?>
                    <ul class="splide__list">
                        <?php foreach ($images_single as $image_id_single) : ?>
                            <li class="splide__slide">
                                <?php echo wp_get_attachment_image($image_id_single, $size_single, "", ["class" => "object-cover", "alt" => "some"]); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <!-- Add the progress bar element -->
            <div class="my-slider-progress">
                <div class="my-slider-progress-bar"></div>
            </div>
            <!-- Custom Arrow -->
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev z-40">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/arrowsx.svg'; ?>" class="h-12"></img>
                </button>
                <button class="splide__arrow splide__arrow--next z-40">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/arrowdx.svg'; ?>" class="h-12"></img>
                </button>
            </div>
            <span class="absolute w-px bg-brown-aran top-0" style="height: 400px; left: 17%;"></span>
            <span class="absolute w-px bg-brown-aran top-0" style="height: 400px; right: 17%;"></span>
        </div>

    </section>

</main>

<?php get_footer(); ?>