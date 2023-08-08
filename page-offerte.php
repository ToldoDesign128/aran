<?php get_header(); ?>

<main class="py-24">

    <section class="max-w-screen-xl mx-auto py-24 flex flex-col items-center">
    <?php
        $image_hero_home = get_field('banner_promo');
        if (!empty($image_hero_home)) : ?>
            <img src="<?php echo esc_url($image_hero_home['url']); ?>" alt="<?php echo esc_attr($image_hero_home['alt']); ?>"/>
        <?php endif; ?>

        <h1 class="text-5xl font-serif uppercase mt-24 text-center"><?php echo esc_html(get_field('titolo_offerte')); ?></h1>
        <p class="text-3xl w-3/5 font-serif mt-8 mb-24 text-center"><?php echo esc_html(get_field('testo_offerta')); ?></p>
        <!-- Cta -->
        <?php
                $pulsante = get_field('pulsante_footer', 'option');
                if ($pulsante) :
                    $pulsante_url = $pulsante['url'];
                    $pulsante_title = $pulsante['title'];
                    $pulsante_target = $pulsante['target'] ? $pulsante['target'] : '_self';
        ?>
            <a class="w-max text-sm uppercase tracking-wider py-4 px-8 border text-center" href="<?php echo esc_url($pulsante_url); ?>" target="<?php echo esc_attr($pulsante_target); ?>"><?php echo esc_html($pulsante_title); ?></a>
        <?php endif; ?>
    </section>  
</main>

<?php get_footer(); ?>