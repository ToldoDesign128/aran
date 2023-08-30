<?php get_header(); ?>

<main class="py-24">

    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:m-auto md:px-8 px-4 pt-12 flex flex-col items-center">
        <div id="slider" class="splide">
            <div class="splide__track">
                <?php
                $images_banner_offerta = get_field('banner_promo');
                if ($images_banner_offerta) : ?>
                    <ul class="splide__list">
                        <?php foreach ($images_banner_offerta as $image_banner_offerta) : ?>
                            <li class="splide__slide">
                                <img src="<?php echo esc_url($image_banner_offerta['url']); ?>" alt="<?php echo esc_attr($image_banner_offerta['alt']); ?>" class="lg:aspect-3/1 aspect-auto object-cover" />
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>


        <h1 class="xl:text-5xl lg:text-4xl text-2xl font-serif uppercase lg:mt-24 mt-12 text-center"><?php echo esc_html(get_field('titolo_offerte')); ?></h1>
        <p class="xl:text-3xl lg:text-2xl text-xl lg:w-3/5 w-full font-serif mt-8 text-center"><?php echo esc_html(get_field('testo_offerta')); ?></p>
        <!-- Cta -->
        <?php
        $pulsante = get_field('pulsante_footer', 'option');
        if ($pulsante) :
            $pulsante_url = $pulsante['url'];
            $pulsante_title = $pulsante['title'];
            $pulsante_target = $pulsante['target'] ? $pulsante['target'] : '_self';
        ?>
            <a class="lg:w-max w-full text-sm uppercase tracking-wider my-12 py-4 px-8 border border-dark-aran text-center md:hover:border-white md:hover:bg-dark-aran md:hover:text-white transition-all" href="<?php echo esc_url($pulsante_url); ?>" target="<?php echo esc_attr($pulsante_target); ?>"><?php echo esc_html($pulsante_title); ?></a>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>