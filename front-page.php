<?php get_header(); ?>

<main>
    <!-- Hero -->
    <section class="relative w-full lg:h-screen h-[60vh] text-center flex flex-col items-center lg:mt-0 mt-20">

        <!-- background hero -->
        <span class="w-full bg-neutral-500 h-full absolute z-0"></span>
        <?php
        $image_hero_home = get_field('sfondo_hero_home');
        if (!empty($image_hero_home)) : ?>
            <img src="<?php echo esc_url($image_hero_home['url']); ?>" alt="<?php echo esc_attr($image_hero_home['alt']); ?>" class="w-full mix-blend-multiply h-full object-cover absolute z-0" />
        <?php endif; ?>

        <div class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg max-w-screen mx-auto lg:my-auto my-24 md:px-8 px-4 z-10">
            <h1 class="xl:text-6xl text-4xl font-serif text-white uppercase my-5 z-10"><?php echo esc_html(get_field('titolo_hero_home')); ?></h1>
            <p class="text-white text-lg z-10"><?php echo esc_html(get_field('testo_hero_home')); ?></p>
        </div>

        <span id="hero_line" class="absolute w-0.5 lg:h-48 bg-stone-400 z-10"></span>
    </section>

    <!-- Sezione 1 -->
    <section id="image-section-home" class="lg:h-[130vh] h-[65vh] w-full py-24 text-center flex flex-col items-center relative overflow-x-hidden overflow-y-hidden">
        <p class="lg:block hidden absolute text-9xl font-serif uppercase text-stone-100 tracking-widest z-0">Made in Italy</p>
        <h2 class="lg:w-6/12 w-full 2xl:text-5xl lg:text-4xl text-2xl font-serif uppercase lg:mt-24 mt-0 z-10 px-4"><?php the_field('titolo_sezione_home'); ?></h2>

        <!-- immagini -->
        <?php
        $img_home_sez1 = get_field('sezione1_home_img1');
        if (!empty($img_home_sez1)) : ?>
            <img src="<?php echo esc_url($img_home_sez1['url']); ?>" alt="<?php echo esc_attr($img_home_sez1['alt']); ?>" class="lg:block absolute h-full hidden 2xl:top-[15%] xl:top-[20%] xl:left-[2%] 2xl:max-h-[30rem] xl:max-h-[24rem] 2xl:max-w-[18rem] xl:max-w-[15rem] object-cover" />
        <?php endif;
        $img_home_sez2 = get_field('sezione2_home_img2');
        if (!empty($img_home_sez2)) : ?>
            <img src="<?php echo esc_url($img_home_sez2['url']); ?>" alt="<?php echo esc_attr($img_home_sez2['alt']); ?>" class="absolute w-full 2xl:top-[32%] xl:top-[35%] top-[43%] xl:left-auto left-[1rem] 2xl:max-h-[30rem] xl:max-h-[24rem] max-h-[12rem] 2xl:max-w-[48rem] xl:max-w-[42rem] max-w-[16rem] object-cover" />
        <?php endif;
        $img_home_sez3 = get_field('sezione3_home_img3');
        if (!empty($img_home_sez3)) : ?>
            <img src="<?php echo esc_url($img_home_sez3['url']); ?>" alt="<?php echo esc_attr($img_home_sez3['alt']); ?>" class="absolute 2xl:top-[27%] xl:top-[30%] top-[42%] xl:right-[5%] right-[1rem] 2xl:max-h-[16rem] xl:max-h-[12rem] max-h-[4rem] 2xl:max-w-[16rem] xl:max-w-[12rem] max-w-[4rem] object-cover" />
        <?php endif;
        $img_home_sez4 = get_field('sezione4_home_img4');
        if (!empty($img_home_sez4)) : ?>
            <img src="<?php echo esc_url($img_home_sez4['url']); ?>" alt="<?php echo esc_attr($img_home_sez4['alt']); ?>" class="lg:block w-full hidden absolute 2xl:top-[90%] xl:top-[80%] xl:left-[5%] 2xl:max-h-[16rem] xl:max-h-[12rem] 2xl:max-w-[26rem] xl:max-w-[20rem] object-cover" />
        <?php endif;
        $img_home_sez5 = get_field('sezione5_home_img5');
        if (!empty($img_home_sez5)) : ?>
            <img src="<?php echo esc_url($img_home_sez5['url']); ?>" alt="<?php echo esc_attr($img_home_sez5['alt']); ?>" class="h-full absolute 2xl:top-[67%] xl:top-[70%] top-[60%] xl:right-[0%] right-0 2xl:max-h-[34rem] xl:max-h-[28rem] max-h-[12rem] 2xl:max-w-[20rem] xl:max-w-[14rem] max-w-[5rem] object-cover" />
        <?php endif; ?>
        <!-- Sfondo -->
        <img src="<?php echo get_template_directory_uri() . '/assets/img/sfondo.svg'; ?>" alt="" class="lg:block hidden absolute bottom-0 right-32 object-cover z-[-10]">
    </section>

    <!-- Sezione 2 -->
    <section class="relative w-full bg-neutral-900 lg:pt-16 pt-12">

        <div class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:px-8 px-4 mx-auto lg:pt-24 pt-12 flex lg:flex-row flex-col justify-between text-white">
            <h3 class="lg:w-6/12 w-full  lg:text-4xl text-2xl font-serif uppercase"><?php the_field('titolo_sezione_2_home'); ?></h3>
            <span id="banner_line" class="absolute h-px w-64 bg-stone-400"></span>
            <div class="lg:w-4/12 w-full lg:ml-4/12 ml-0 lg:pt-0 pt-20 flex flex-col">
                <p class="text-md"><?php the_field('testo_sezione_2_home'); ?></p>
                <?php
                $pulsante_home = get_field('cta_sezione_2_home');
                if ($pulsante_home) :
                    $pulsante_home_url = $pulsante_home['url'];
                    $pulsante_home_title = $pulsante_home['title'];
                    $pulsante_home_target = $pulsante_home['target'] ? $pulsante_home['target'] : '_self';
                ?>
                    <a class="lg:w-max w-full text-center text-white text-sm uppercase tracking-wider my-10 py-4 px-8 border border-white md:hover:border-dark-aran md:hover:bg-white md:hover:text-dark-aran transition-all" href="<?php echo esc_url($pulsante_home_url); ?>" target="<?php echo esc_attr($pulsante_home_target); ?>"><?php echo esc_html($pulsante_home_title); ?></a>
                <?php endif; ?>
            </div>
        </div>

        <div class="contatti-footer mt-10 ml-4 bg-stone-200">
            <div class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg flex lg:flex-row flex-col">
                <div class="lg:w-4/12 w-full flex lg:flex-row flex-col gap-4 xl:px-16 px-12 lg:py-24 py-16">
                    <?php
                    $card1 = get_field('card_1_home');
                    if ($card1) : ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icone-home.svg'; ?>" class="self-baseline w-8"></img>
                        <div class="flex flex-col lg:mt-0 mt-8">
                            <p class="w-full lg:text-4xl text-2xl font-serif"><?php echo esc_html($card1['titolo_card_1_home']); ?></p>
                            <p class="w-full mt-5"><?php echo esc_html($card1['testo_card_1_home']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="lg:w-4/12 w-full flex lg:flex-row flex-col gap-4 xl:px-16 px-12 lg:py-24 py-16 bg-stone-300">
                    <?php
                    $card2 = get_field('card_2_home');
                    if ($card2) : ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icone-home.svg'; ?>" class="self-baseline w-8"></img>
                        <div class="flex flex-col lg:mt-0 mt-8">
                            <p class="w-full lg:text-4xl text-2xl font-serif"><?php echo esc_html($card2['titolo_card_2_home']); ?></p>
                            <p class="w-full mt-5"><?php echo esc_html($card2['testo_card_2_home']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="lg:w-4/12 w-full flex lg:flex-row flex-col gap-4 xl:px-16 px-12 lg:py-24 py-16">
                    <?php
                    $card3 = get_field('card_3_home');
                    if ($card3) : ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icone-home.svg'; ?>" class="self-baseline w-8"></img><?php get_template_directory_uri() . "/assets/img/icone-home.svg"; ?>
                        <div class="flex flex-col lg:mt-0 mt-8">
                            <p class="w-full lg:text-4xl text-2xl font-serif"><?php echo esc_html($card3['titolo_card_3_home']); ?></p>
                            <p class="w-full mt-5"><?php echo esc_html($card3['testo_card_3_home']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </section>

    <!-- Sezione 3 -->
    <section class="w-full lg:pt-24 pt-12 pb-4 relative">
        <div class="text-center flex flex-col items-center">
            <p class="lg:block hidden absolute text-9xl font-serif uppercase text-stone-100 tracking-widest z-0">Collezione</p>
            <h4 class="lg:w-4/12 w-full xl:text-4xl text-3xl font-serif uppercase lg:mt-24 mt-12 z-10"><?php the_field('titolo_sezione_3_home'); ?></h4>
        </div>
        <!-- Gallery -->
        <section class="lg:py-20 py-8 z-10">
            <div id="slider-base" class="splide relative">
                <div class="splide__track z-20">
                    <?php
                    $rows_slide = get_field('slide_sezione_3_home');
                    if ($rows_slide) {
                        echo '<ul class="splide__list">';
                        foreach ($rows_slide as $row_slide) {
                            $image_slide = $row_slide['immagine_slide_sezione_3_home'];
                            $title_slide = $row_slide['titolo_prodotto_slide_sezione_3_home'];
                            echo '<li class="splide__slide">';
                            echo wp_get_attachment_image($image_slide, 'thumb_xlarge', "", ["class" => "object-cover", "alt" => "some"]);
                            echo '<p class="py-8 text-left md:text-2xl text-xl font-serif">';
                            echo $title_slide;
                            echo '</p>';
                            echo '</li>';
                        }
                        echo '</ul>';
                    }; ?>
                </div>
                <!-- Add the progress bar element -->
                <div class="my-slider-progress">
                    <div class="my-slider-progress-bar"></div>
                </div>
                <!-- Custom Arrow -->
                <div class="lg:block hidden splide__arrows">
                    <button class="splide__arrow splide__arrow--prev z-40">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/arrowsx.svg'; ?>" class="h-12"></img>
                    </button>
                    <button class="splide__arrow splide__arrow--next z-40">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/arrowdx.svg'; ?>" class="h-12"></img>
                    </button>
                </div>
                <span class="slider__line absolute w-px bg-brown-aran top-0 z-10"></span>
                <span class="slider__line2 absolute w-px bg-brown-aran top-0 z-10"></span>
            </div>

        </section>

        <!-- Sfondo -->
        <img src="<?php echo get_template_directory_uri() . '/assets/img/sfondo2.svg'; ?>" alt="" class="lg:block hidden absolute bottom-0 object-cover z-0" style="left: -15%; z-index: -10;">
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () =>
            (!!Splide) && (new Splide('#slider-base', {
                type: 'loop',
                padding: '5rem',
                focus: 'center',
                trimSpace: false,
                gap: 300,
                breakpoints: {
                    1024: {
                        padding: '1.2rem',
                        gap: 10
                    },
                },
            })).mount());

        // Slider progress bar

        var bar = slider.root.querySelector('.my-slider-progress-bar');

        // Updates the bar width whenever the carousel moves:
        slider.on('mounted move', function() {
            var end = slider.Components.Controller.getEnd() + 1;
            var rate = Math.min((slider.index + 1) / end, 1);
            bar.style.width = String(100 * rate) + '%';
        });
    </script>
</main>

<?php get_footer(); ?>