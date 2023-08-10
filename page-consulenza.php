<?php get_header(); ?>

<main>

    <!-- hero -->
    <section class="max-w-screen-xl mx-auto py-24 flex flex-col items-center">
        <h1 class="text-5xl font-serif uppercase mt-24 text-center"><?php the_field('titolo_catalogo'); ?></h1>
        <div class="text-3xl font-serif my-8 text center">
            <?php the_field('testo_catalogo'); ?>
        </div>
    </section>

    <!-- banner -->
    <section class="w-full bg-stone-900">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/sfondo2.svg'; ?>" alt="" class="absolute w-4/12 opacity-50" style="top: 80%; left: 55%">
        <div class="max-w-screen-xl mx-auto py-24 flex justify-between">
            <div class="w-6/12 flex flex-col">
                <?php
                $banner_catalogo = get_field('banner_catalogo');
                if ($banner_catalogo) : ?>
                    <div class="w-full flex my-8">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo1.svg'; ?>" alt="" class="w-2/12 mt-3" style="max-height: 2.4rem;">
                        <div class="flex flex-col w-9/12">
                            <h4 class="w-full text-brown-aran text-3xl font-serif my-2"><?php echo esc_html($banner_catalogo['titolo_1_banner_catalogo']); ?></h4>
                            <p class="w-full text-white"><?php echo esc_html($banner_catalogo['testo_1_banner_catalogo']); ?></p>
                        </div>
                    </div>
                    <div class="w-full flex my-8">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo2.svg'; ?>" alt="" class="w-2/12 mt-3" style="max-height: 2.4rem;">
                        <div class="flex flex-col w-9/12">
                            <h4 class="w-full text-brown-aran text-3xl font-serif my-2"><?php echo esc_html($banner_catalogo['titolo_2_banner_catalogo']); ?></h4>
                            <p class="w-full text-white"><?php echo esc_html($banner_catalogo['testo_2_banner_catalogo']); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <img src="<?php echo get_template_directory_uri() . ''; ?>" alt="" class="w-6/12">
        </div>
    </section>

    <!-- cta -->
    <section class="max-w-screen-xl mx-auto py-12 flex flex-col items-center">
        <h5 class="font-serif text-5xl my-12">RICHIEDI IL CATALOGO 2023</h5>
        <div class="flex justify-between my-8">
            <div class="relative flex flex-col justify-between py-8 px-6 border border-dark-aran text-center items-center" style="width: 48%;">
                <span class="absolute bg-stone-200 py-1 px-2" style="top: -14px;">Per te 10% di sconto</span>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo3.svg'; ?>" alt="" class="w-10 m-auto my-6">
                <?php
                $card_1_catalogo = get_field('card_1_catalogo');
                if ($card_1_catalogo) : ?>
                    <p class="font-serif text-xl my-3"><?php echo esc_html($card_1_catalogo['titolo_card_1_catalogo']); ?></p>
                    <p><?php echo esc_html($card_1_catalogo['testo_card_1_catalogo']); ?></p>
                <?php endif; ?>
    
                <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo_arrow.svg'; ?>" alt="" class="w-6 m-auto my-6">
            </div>
            <div class="py-8 px-12 flex flex-col justify-between border border-dark-aran text-center items-center" style="width: 48%;">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo4.svg'; ?>" alt="" class="w-10 m-auto my-6">
                <?php
                $card_2_catalogo = get_field('card_2_catalogo');
                if ($card_2_catalogo) : ?>
                    <p class="font-serif text-xl my-3"><?php echo esc_html($card_2_catalogo['titolo_card_2_catalogo']); ?></p>
                    <p><?php echo esc_html($card_2_catalogo['testo_card_2_catalogo']); ?></p>
                <?php endif; ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo_arrow.svg'; ?>" alt="" class="w-6 m-auto my-6">
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>