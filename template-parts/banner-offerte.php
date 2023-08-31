<div id="offerte-splide" class="splide">
    <div class="splide__track">
        <?php
        $images_banner_offerta = get_field('banner_promo');
        if ($images_banner_offerta) : ?>
            <ul class="splide__list">
                <?php foreach ($images_banner_offerta as $image_banner_offerta) : ?>
                    <li class="splide__slide">
                        <img src="<?php echo esc_url($image_banner_offerta['url']); ?>" alt="<?php echo esc_attr($image_banner_offerta['alt']); ?>" class=" lg:max-h-[400px] max-h-[200px] w-full h-full object-cover" />
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () =>
        (!!Splide) && (new Splide('#offerte-splide', {
            type: 'loop',
            pagination: true,
        })).mount());
</script>