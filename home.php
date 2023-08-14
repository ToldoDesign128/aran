<?php get_header(); ?>

<main class="py-24">
    <span class="absolute h-0.5 w-72 bg-stone-400" style="top: 40%;"></span>
    <section class="max-w-screen-xl m-auto py-24 flex">
        <h2 class="text-5xl font-serif uppercase"><?php wp_title('', true, 'right'); ?></h2>
    </section>

    <!-- Loop News -->
    <section class="max-w-screen-xl m-auto py-8">
        <div class="grid grid-cols-3 gap-8">
            <?php
            $loop = new WP_Query(array(
                'post_type'         => 'post',
                'post_status'       => 'publish',
                'orderby'           => 'count',
                'order'             => 'ASC',
                'posts_per_page'    => 999,
            ));

            while ($loop->have_posts()) : $loop->the_post(); ?>

                <a href="<?php echo the_permalink(); ?>">
                    <article>
                        <div>
                            <?php the_post_thumbnail('medium_large', ['class' => 'object-cover max-h-60']); ?>
                        </div>
                        <div class="mt-3 text-lg">
                            <h3><?php echo get_the_title(); ?></h3>
                        </div>
                    </article>
                </a>

            <?php endwhile; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>