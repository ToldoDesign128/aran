<?php get_header(); ?>

<main class="py-24">
    <span class="absolute h-0.5 w-72 bg-stone-400 top-3/4"></span>
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:m-auto md:px-8 px-4 lg:py-24 py-12 flex">
        <h2 class="text-5xl font-serif uppercase"><?php wp_title('', true, 'right'); ?></h2>
    </section>

    <!-- Loop News -->
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:m-auto md:px-8 px-4 py-8">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8">
            <?php
            $loop = new WP_Query(array(
                'post_type'         => 'living',
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

    <!-- FAQ -->
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:m-auto md:px-8 px-4 py-20">
        <h3 class="xl:text-4xl lg:text-3xl text-2xl font-serif lg:my-8 my-4"><?php echo esc_html( get_field('titolo_faq_living') ); ?></h3>
            <div class="flex flex-col">
                <?php
                if (have_rows('repeater_faq_living')) :

                    while (have_rows('repeater_faq_living')) : the_row();

                        $faq_domanda_living = get_sub_field('domanda_faq_living');
                        $faq_risposta_living = get_sub_field('risposta_faq_living');?>

                        <div class="accordion bg-light-grey-aran my-2 px-6 py-4">
                            <div class="flex flex-row justify-between items-center">
                                <p class="text-md"><?php echo $faq_domanda_living;?></p>
                                <button class="accordion__icon">
                                    <span class="accordion__icon__items"></span>
                                    <span class="accordion__icon__items"></span>
                                </button>
                            </div>                            
                                <div class="accordion__risposta py-4">
                                    <p class="text-sm"><?php echo $faq_risposta_living;?></p>
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