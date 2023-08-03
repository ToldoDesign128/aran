<?php get_header(); ?>

<main>
    <!-- Hero -->
    <section class="w-full h-screen text-center flex flex-col items-center justify-center">
        <h1 class="text-5xl font-serif uppercase my-5"><?php echo esc_html(get_field('titolo_hero_home')); ?></h1>
        <p><?php echo esc_html(get_field('testo_hero_home')); ?></p>
        <span class="absolute w-0.5 h-52 bg-stone-400" style="top: 80%;"></span>
    </section>

    <!-- Sezione 1 -->
    <section class="w-full py-24 h-screen text-center flex flex-col items-center">
        <p class="absolute text-9xl font-serif uppercase text-stone-100 tracking-widest z-0">Made in Italy</p>
        <h2 class="w-4/12 text-3xl font-serif uppercase mt-24 z-10"><?php the_field('titolo_sezione_home'); ?></h2>
    </section>

    <!-- Sezione 2 -->
    <section class="w-full bg-neutral-900 relative">
        <span class="absolute h-0.5 w-52 bg-stone-400" style="top: 40%;"></span>

        <div class="max-w-screen-xl mx-auto pt-32 flex justify-between text-white">
            <h3 class="w-4/12 text-3xl font-serif uppercase"><?php the_field('titolo_sezione_2_home'); ?></h3>
            <div class="w-4/12 ml-4/12 flex flex-col">
                <p class="text-sm"><?php the_field('testo_sezione_2_home'); ?></p>
                <?php
                $pulsante_home = get_field('cta_sezione_2_home');
                if ($pulsante_home) :
                    $pulsante_home_url = $pulsante_home['url'];
                    $pulsante_home_title = $pulsante_home['title'];
                    $pulsante_home_target = $pulsante_home['target'] ? $pulsante_home['target'] : '_self';
                ?>
                    <a class="w-max text-white text-sm uppercase tracking-wider my-10 py-4 px-8 border border-white" href="<?php echo esc_url($pulsante_home_url); ?>" target="<?php echo esc_attr($pulsante_home_target); ?>"><?php echo esc_html($pulsante_home_title); ?></a>
                <?php endif; ?>
            </div>
        </div>

        <div class="contatti-footer mt-10 bg-stone-200">
            <div class="max-w-screen-xl flex">
                <div class="w-4/12 flex px-8 py-24">
                    <?php
                    $card1 = get_field('card_1_home');
                    if ($card1) : ?>
                        <span class="w-4/12"></span> <!-- da sostituire con l'icona -->
                        <div class="flex flex-col">
                            <p class="w-12/12 text-xl font-serif"><?php echo esc_html($card1['titolo_card_1_home']); ?></p>
                            <p class="w-12/12 mt-5 font-serif"><?php echo esc_html($card1['testo_card_1_home']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="w-4/12 flex px-8 py-24 bg-stone-300">
                    <?php
                    $card2 = get_field('card_2_home');
                    if ($card2) : ?>
                        <span class="w-4/12"></span> <!-- da sostituire con l'icona -->
                        <div class="flex flex-col">
                            <p class="w-12/12 text-xl font-serif"><?php echo esc_html($card2['titolo_card_2_home']); ?></p>
                            <p class="w-12/12 mt-5 font-serif"><?php echo esc_html($card2['testo_card_2_home']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="w-4/12 flex px-8 py-24">
                    <?php
                    $card3 = get_field('card_3_home');
                    if ($card3) : ?>
                        <span class="w-4/12"></span> <!-- da sostituire con l'icona -->
                        <div class="flex flex-col">
                            <p class="w-12/12 text-xl font-serif"><?php echo esc_html($card3['titolo_card_3_home']); ?></p>
                            <p class="w-12/12 mt-5 font-serif"><?php echo esc_html($card3['testo_card_3_home']); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </section>

    <!-- Sezione 3 -->
    <section class="w-full py-24 h-screen text-center flex flex-col items-center">
        <p class="absolute text-9xl font-serif uppercase text-stone-100 tracking-widest z-0">Collezione</p>
        <h4 class="w-4/12 text-3xl font-serif uppercase mt-24 z-10"><?php the_field('titolo_sezione_3_home'); ?></h4>
    </section>
</main>

<?php get_footer(); ?>