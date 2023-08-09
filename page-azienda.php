<?php get_header(); ?>

<main class="py-24">

    <section class="max-w-screen-xl mx-auto py-12 flex flex-col items-center">
        <h1 class="text-5xl font-serif uppercase mt-24 text-center"><?php echo esc_html(get_field('titolo_pagina_azienda')); ?></h1>
        <p class="text-3xl font-serif mt-8 mb-24 text-center"><?php echo esc_html(get_field('testo_azienda_intro_azienda')); ?></p>
    </section>

    <section class="max-w-screen-xl mx-auto">
        <?php
        $rows = get_field('blocco_testo_immagine_destra_azienda');
        if ($rows) {
            echo '<div class="flex justify-between items-center">';
            foreach ($rows as $row) {
                $title_block_dx = $row['titolo_blocco_testo_immagine_destra'];
                $text_block_dx = $row['testo_blocco_testo_immagine_destra'];
                $image_block_dx = $row['immagine_blocco_testo_immagine_destra'];
                echo '<div class="w-5/12 h-full flex flex-col">';
                echo '<p class="text-3xl font-serif text-brown-aran my-5">';
                echo esc_html($title_block_dx);
                echo '</p>';
                echo wpautop($text_block_dx);
                echo '</div>';
                echo '<div  class="w-6/12">';
                echo wp_get_attachment_image($image_block_dx, 'thumb_xlarge');
                echo '</div>';

            }
            echo '</div>';
        } ?>
    </section>

    <section class="max-w-screen-xl mx-auto my-12">
        <?php
        $rows = get_field('blocco_testo_immagine_sinistra_azienda');
        if ($rows) {
            echo '<div class="flex justify-between items-center">';
            foreach ($rows as $row) {
                $title_block_sx = $row['titolo_blocco_testo_immagine_sinistra'];
                $text_block_sx = $row['testo_blocco_testo_immagine_sinistra'];
                $image_block_sx = $row['immagine_blocco_testo_immagine_sinistra'];
                echo '<div  class="w-6/12">';
                echo wp_get_attachment_image($image_block_sx, 'thumb_xlarge');
                echo '</div>';
                echo '<div class="w-5/12 h-full flex flex-col">';
                echo '<p class="text-3xl font-serif text-brown-aran my-5">';
                echo esc_html($title_block_sx);
                echo '</p>';
                echo wpautop($text_block_sx);
                echo '</div>';

            }
            echo '</div>';
        } ?>
    </section>
</main>

<?php get_footer(); ?>