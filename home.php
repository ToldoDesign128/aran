<?php get_header(); ?>

<main class="py-24">
    <span class="absolute h-0.5 w-52 bg-stone-400" style="top: 40%;"></span>
    <section class="max-w-screen-xl m-auto py-24 flex">
        <h2 class="text-5xl font-serif uppercase"><?php wp_title('', true, 'right'); ?></h2>
    </section>

    <!-- Loop News -->
    <section class="max-w-screen-xl m-auto">
        <div class="flex flex-row gap-8">
            <?php
            $loop = new WP_Query(array(
                'post_type'         => 'post',
                'post_status'       => 'publish',
                'orderby'           => 'count',
                'order'             => 'ASC',
                'posts_per_page'    => 999,
            ));

            while ($loop->have_posts()) : $loop->the_post(); ?>

                <article class="basis-1/3 flex flex-col bg-stone-400">
                    <div class="">
                        <?php the_post_thumbnail("large"); ?>
                    </div>
                    <div class="">
                        <h3><?php echo get_the_title(); ?></h3>
                    </div>
                </article>

            <?php endwhile; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>