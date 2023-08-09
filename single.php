<?php get_header(); ?>

<main>
    <!-- Hero -->
    <section class="w-full flex pt-24" style="height: 90vh;">
        <div class="w-6/12">
            <?php the_post_thumbnail('thumb_xxlarge', ['class' => 'object-cover h-full']); ?>
        </div>
        <div class="w-3/12 flex flex-col justify-center" style="margin-left: 8.33333%;">
            <h2 class="text-3xl font-serif uppercase mb-12"><?php echo get_the_title(); ?></h2>
            <p>Composizioni disponibili</p>
            <p class="text-xl font-serif mt-4 mb-8"><?php echo esc_html(get_field('composizioni_disponibili')); ?></p>
            <p><?php echo esc_html(get_field('sottotitolo')); ?></p>
            <p class="text-xl font-serif mt-4 mb-8"><?php echo esc_html(get_field('sottotitolo_testo')); ?></p>
        </div>
    </section>
    <!-- Banner -->
    <section class="w-full bg-neutral-900 py-28">
        <div class="max-w-screen-xl m-auto flex justify-between">
            <p class="w-2/12 text-3xl text-white font-serif"><?php echo esc_html(get_field('banner_titolo')); ?></p>
            <div class="w-9/12 text-sm text-white"><?php the_field('testo_banner'); ?></div>
        </div>
    </section>
    <section class="max-w-screen-xl m-auto py-20">
        <?php
        $image = get_field('immagine_1_single');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full aspect-video object-cover" style="max-height: 32rem;" />
        <?php endif; ?>
        <div class="w-full flex justify-between mt-8">
            <?php
            $image2 = get_field('immagine_2_single');
            if (!empty($image2)) : ?>
                <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" class="object-cover" style="width: 48.5%; max-height: 32rem;" />
            <?php endif;
            $image3 = get_field('immagine_3_single');
            if (!empty($image3)) : ?>
                <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" class="object-cover" style="width: 48.5%; max-height: 32rem;" />
            <?php endif; ?>
        </div>
    </section>
    <section class="py-20">
        <div class="splide">
            <div class="splide__track">
                <?php
                $images_single = get_field('slider_single');
                $size_single = 'thumb_large';
                if ($images_single) : ?>
                    <ul class="splide__list">
                        <?php foreach ($images_single as $image_id_single) : ?>
                            <li class="splide__slide">
                                <?php echo wp_get_attachment_image($image_id_single, $size_single); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>

    </section>

</main>

<?php get_footer(); ?>