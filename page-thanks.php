<?php get_header(); ?>

<main>
    <section class="h-screen flex flex-col items-center w-full">
        <div class="my-12">
            <h1><?php the_field('titolo_pagina_ringraziamenti'); ?></h1>
        </div>
        <div class="my-12">
            <?php the_field('testo_pagina_ringraziamenti'); ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>