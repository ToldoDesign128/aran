<?php get_header(); ?>

<main>
    <!-- Hero -->
    <section class="w-full h-screen text-center flex flex-col items-center justify-center">

        <!-- background hero -->
        <span class="w-full bg-neutral-400 h-screen absolute z-0"></span>
        <?php
        $image_hero_home = get_field('sfondo_hero_home');
        if (!empty($image_hero_home)) : ?>
            <img src="<?php echo esc_url($image_hero_home['url']); ?>" alt="<?php echo esc_attr($image_hero_home['alt']); ?>" class="w-full mix-blend-multiply h-screen object-cover absolute z-0" />
        <?php endif; ?>

        <h1 class="xl:text-7xl text-5xl font-serif text-white uppercase my-5 z-10"><?php echo esc_html(get_field('titolo_hero_home')); ?></h1>
        <p class="text-white text-lg z-10"><?php echo esc_html(get_field('testo_hero_home')); ?></p>
        <span class="absolute w-0.5 h-52 bg-stone-400 z-10" style="top: 80%;"></span>
    </section>

    <!-- Sezione 1 -->
    <section id="image-section-home" class="w-full py-24 text-center flex flex-col items-center relative">
        <p class="absolute text-9xl font-serif uppercase text-stone-100 tracking-widest z-0">Made in Italy</p>
        <h2 class="w-6/12 text-5xl font-serif uppercase mt-24 z-10"><?php the_field('titolo_sezione_home'); ?></h2>

        <!-- immagini -->
        <?php
        $images_section_home = get_field('immagini_sezione_home');
        if ($images_section_home) : ?>
            <ul>
                <?php foreach ($images_section_home as $image_section_home) : ?>
                    <li>
                        <img src="<?php echo esc_url($image_section_home['sizes']['thumb_xlarge']); ?>" alt="<?php echo esc_attr($image_section_home['alt']); ?>" class="absolute" />
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <!-- Sfondo -->
        <img src="<?php echo get_template_directory_uri() . '/assets/img/sfondo.svg'; ?>" alt="" class="absolute bottom-0 right-32 object-cover">
    </section>

    <!-- Sezione 2 -->
    <section class="w-full bg-neutral-900 pt-24 relative">
        <span class="absolute h-px w-64 bg-stone-400" style="top: 45%;"></span>

        <div class="max-w-screen-xl mx-auto pt-32 flex justify-between text-white">
            <h3 class="w-6/12 text-5xl font-serif uppercase"><?php the_field('titolo_sezione_2_home'); ?></h3>
            <div class="w-4/12 ml-4/12 flex flex-col">
                <p class="text-sm"><?php the_field('testo_sezione_2_home'); ?></p>
                <?php
                $pulsante_home = get_field('cta_sezione_2_home');
                if ($pulsante_home) :
                    $pulsante_home_url = $pulsante_home['url'];
                    $pulsante_home_title = $pulsante_home['title'];
                    $pulsante_home_target = $pulsante_home['target'] ? $pulsante_home['target'] : '_self';
                ?>
                    <a class="w-max text-white text-sm uppercase tracking-wider my-10 py-4 px-8 border border-white md:hover:border-dark-aran md:hover:bg-white md:hover:text-dark-aran transition-all" href="<?php echo esc_url($pulsante_home_url); ?>" target="<?php echo esc_attr($pulsante_home_target); ?>"><?php echo esc_html($pulsante_home_title); ?></a>
                <?php endif; ?>
            </div>
        </div>

        <div class="contatti-footer mt-10 bg-stone-200">
            <div class="max-w-screen-xl flex">
                <div class="w-4/12 flex px-16 py-24">
                    <?php
                    $card1 = get_field('card_1_home');
                    if ($card1) : ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icone-home.svg'; ?>" class="self-baseline w-3/12 pr-12"></img>
                        <div class="flex flex-col">
                            <p class="w-12/12 text-4xl font-serif"><?php echo esc_html($card1['titolo_card_1_home']); ?></p>
                            <p class="w-12/12 mt-5"><?php echo esc_html($card1['testo_card_1_home']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="w-4/12 flex px-16 py-24 bg-stone-300">
                    <?php
                    $card2 = get_field('card_2_home');
                    if ($card2) : ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icone-home.svg'; ?>" class="self-baseline w-3/12 pr-12"></img>
                        <div class="flex flex-col">
                            <p class="w-12/12 text-4xl font-serif"><?php echo esc_html($card2['titolo_card_2_home']); ?></p>
                            <p class="w-12/12 mt-5"><?php echo esc_html($card2['testo_card_2_home']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="w-4/12 flex px-16 py-24">
                    <?php
                    $card3 = get_field('card_3_home');
                    if ($card3) : ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icone-home.svg'; ?>" class="self-baseline w-3/12 pr-12"></img><?php get_template_directory_uri() . "/assets/img/icone-home.svg"; ?>
                        <div class="flex flex-col">
                            <p class="w-12/12 text-4xl font-serif"><?php echo esc_html($card3['titolo_card_3_home']); ?></p>
                            <p class="w-12/12 mt-5"><?php echo esc_html($card3['testo_card_3_home']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </section>

    <!-- Sezione 3 -->
    <section class="w-full pt-24 pb-4 relative">
        <div class="text-center flex flex-col items-center">
            <p class="absolute text-9xl font-serif uppercase text-stone-100 tracking-widest z-0">Collezione</p>
            <h4 class="w-4/12 text-3xl font-serif uppercase mt-24 z-10"><?php the_field('titolo_sezione_3_home'); ?></h4>
        </div>
        <!-- Gallery -->
        <section class="py-20 z-10">
        <div class="splide relative">
            <div class="splide__track">
            <?php
                $rows_slide = get_field('slide_sezione_3_home');
                if ($rows_slide) {
                    echo '<ul class="splide__list">';
                    foreach ($rows_slide as $row_slide) {
                        $image_slide = $row_slide['immagine_slide_sezione_3_home'];
                        $title_slide = $row_slide['titolo_prodotto_slide_sezione_3_home'];
                        echo '<li class="splide__slide">';
                        echo wp_get_attachment_image($image_slide, 'thumb_xlarge');
                        echo '<p class="py-8 text-left text-3xl font-serif">';
                        echo $title_slide;
                        echo '</p>';
                        echo '</li>';
                    }
                    echo '</ul>';
                }; ?>
            </div>
            <!-- Custom Arrow -->
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/arrowsx.svg'; ?>" class="h-12"></img>
                </button>
                <button class="splide__arrow splide__arrow--next">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/arrowdx.svg'; ?>" class="h-12"></img>
                </button>
            </div>
            <span class="absolute w-px bg-brown-aran top-0" style="height: 400px; left: 17%;"></span>
            <span class="absolute w-px bg-brown-aran top-0" style="height: 400px; right: 17%;"></span>

            <!-- Progressive bar -->
            <div class="my-slider-progress">
                <div class="my-slider-progress-bar"></div>
            </div>
        </div>

    </section>

        <!-- Sfondo -->
        <img src="<?php echo get_template_directory_uri() . '/assets/img/sfondo2.svg'; ?>" alt="" class="absolute bottom-0 object-cover z-0" style="left: -15%; z-index: -10;">
    </section>
    
</main>

<?php get_footer(); ?>