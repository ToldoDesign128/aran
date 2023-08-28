<?php get_header(); ?>

<main class="py-24">

    <!-- intro -->
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:m-auto md:px-8 px-4 lg:py-12 py-0 flex flex-col items-center">
        <h1 class="xl:text-5xl lg:text-4xl text-3xl font-serif uppercase lg:mt-24 mt-12 text-center"><?php echo esc_html(get_field('titolo_pagina_azienda')); ?></h1>
        <p class="xl:text-3xl text-2xl  font-serif mt-8 lg:mb-24 mb-12 text-center"><?php echo esc_html(get_field('testo_azienda_intro_azienda')); ?></p>
    </section>

    <!-- Testo Imagine -->
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:m-auto md:px-8 px-4">
        <?php
        if (have_rows('blocco_testo_immagine_azienda')) :

            while (have_rows('blocco_testo_immagine_azienda')) : the_row();

                $block_title = get_sub_field('titolo_blocco_testo_immagine');
                $block_text = get_sub_field('testo_blocco_testo_immagine');
                $block_image = get_sub_field('immagine_blocco_testo_immagine'); ?>

                <div class="blocco flex lg:flex-row flex-col flex-wrap justify-between items-center py-4">
                    <div class="blocco__testo lg:w-5/12 w-full h-full flex flex-col my-4">
                        <p class="xl:text-3xl text-2xl font-serif text-brown-aran my-5"><?php echo $block_title; ?></p>
                        <?php echo wpautop($block_text); ?>
                    </div>
                    <div class="blocco__img lg:w-6/12 w-full">
                        <?php echo wp_get_attachment_image($block_image, 'thumb_xlarge'); ?>
                    </div>
                </div>

        <?php endwhile;
        endif;
        ?>
    </section>

    <!-- Banner -->
    <section class="w-full bg-neutral-900 lg:py-12 py-8">
        <div class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:m-auto md:px-8 px-4 py-12 flex flex-wrap lg:flex-row flex-col justify-between">
            <div class="lg:w-4/12 lg:py-px py-12 w-full">
                <h2 class="xl:text-4xl lg:text-3xl text-2xl font-serif text-white uppercase"><?php echo esc_html(get_field('titolo_banner_azienda')); ?></h2>
                <p class="text-sm text-white mt-8"><?php echo esc_html(get_field('testo_banner_azienda')); ?></p>
            </div>
            <div class="lg:w-6/12 w-full flex flex-wrap">
                <?php
                if (have_rows('repeater_numeri_azienda')) :

                    while (have_rows('repeater_numeri_azienda')) : the_row();

                        $sub_value = get_sub_field('valore_repeater_banner_azienda');
                        $sub_value_text = get_sub_field('didascalia_repeater_banner_azienda'); ?>

                        <div class="lg:w-4/12 py-4 w-6/12">
                            <p class="text-3xl font-serif text-brown-aran"><?php echo $sub_value ?></p>
                            <p class="text-sm text-white"><?php echo $sub_value_text ?></p>
                        </div>

                <?php endwhile;
                endif;
                ?>

            </div>
        </div>

    </section>

    <!-- Designer -->
    <section>
        <h3 class="xl:text-5xl lg:text-4xl text-3xl font-serif uppercase lg:my-24 my-12 text-center">I DESIGNER</h3>
        <div class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:m-auto md:px-8 px-4">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8">
                <?php
                if (have_rows('cards_designer_azienda')) :

                    while (have_rows('cards_designer_azienda')) : the_row();

                        $designer_card_title = get_sub_field('nome_designer_azienda');
                        $designer_card_text = get_sub_field('testo_designer_azienda');
                        $designer_card_image = get_sub_field('immagine_designer_azienda'); ?>

                        <div class="border border-dark-aran">
                            <?php echo wp_get_attachment_image($designer_card_image, 'thumb_xlarge', "",array( "class" => "max-h-72 object-cover" )); ?>
                            <div class="p-8">
                                <p class="text-3xl font-serif text-center"><?php echo $designer_card_title;?></p>
                                <p class="text-sm text-center"><?php echo $designer_card_text;?></p>
                            </div>
                        </div>

                <?php endwhile;
                endif;
                ?>
            </div>
        </div>


    </section>

    <!-- FAQ -->
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:m-auto md:px-8 px-4 py-20">
        <h3 class="xl:text-4xl lg:text-3xl text-2xl font-serif lg:my-8 my-4"><?php echo esc_html( get_field('titolo_azienda_faq'));?></h3>
            <div class="flex flex-col">
                <?php
                if (have_rows('repeater_azienda_faq')) :

                    while (have_rows('repeater_azienda_faq')) : the_row();

                        $faq_domanda_azienda = get_sub_field('domanda_faq_azienda');
                        $faq_risposta_azienda = get_sub_field('risposta_faq_azienda');?>

                        <div class="accordion bg-light-grey-aran my-2 px-6 py-4">
                            <div class="flex flex-row justify-between items-center">
                                <p class="text-md"><?php echo $faq_domanda_azienda;?></p>
                                <button class="accordion__icon">
                                    <span class="accordion__icon__items"></span>
                                    <span class="accordion__icon__items"></span>
                                </button>
                            </div>                            
                                <div class="accordion__risposta py-4">
                                    <p class="text-sm"><?php echo $faq_risposta_azienda;?></p>
                                </div>
                        </div>

                <?php endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>