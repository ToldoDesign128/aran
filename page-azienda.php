<?php get_header(); ?>

<main class="py-24">

    <section class="max-w-screen-xl mx-auto py-12 flex flex-col items-center">
        <h1 class="text-5xl font-serif uppercase mt-24 text-center"><?php echo esc_html(get_field('titolo_pagina_azienda')); ?></h1>
        <p class="text-3xl font-serif mt-8 mb-24 text-center"><?php echo esc_html(get_field('testo_azienda_intro_azienda')); ?></p>
    </section>  
</main>

<?php get_footer(); ?>