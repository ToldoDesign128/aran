<?php get_header(); ?>

<main>

    <!-- hero -->
    <section class="max-w-screen-xl mx-auto py-24 flex flex-col items-center">
        <h1 class="text-5xl font-serif uppercase mt-24 text-center"><?php the_field('titolo_catalogo'); ?></h1>
        <div class="text-3xl font-serif my-8 text center">
            <?php the_field('testo_catalogo'); ?>
        </div>
    </section>

</main>
<?php get_footer(); ?>