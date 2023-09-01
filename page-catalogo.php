<?php get_header(); ?>

<main>

    <!-- hero -->
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:px-8 px-4 mx-auto lg:py-24 py-20 flex flex-col items-center">
        <h1 class="xl:text-5xl lg:text-4xl text-3xl font-serif uppercase lg:mt-24 mt-20 text-center"><?php the_field('titolo_catalogo'); ?></h1>
        <div class="xl:text-3xl lg:text-2xl text-xl font-serif lg:my-8 my-4 text-center">
            <?php the_field('testo_catalogo'); ?>
        </div>
    </section>

    <!-- banner -->
    <section class="w-full bg-stone-900">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/sfondo2.svg'; ?>" alt="" class="lg:block hidden absolute w-4/12 opacity-50" style="top: 80%; left: 55%">
        <div class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:px-8 px-4 mx-auto lg:py-24 py-12 flex lg:flex-row flex-col justify-between">
            <div class="lg:w-6/12 w-full flex flex-col">
                <?php
                $banner_catalogo = get_field('banner_catalogo');
                if ($banner_catalogo) : ?>
                    <div class="w-full flex lg:gap-0 gap-4 lg:my-8 my-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo1.svg'; ?>" alt="" class="w-2/12 mt-3 max-h-8">
                        <div class="flex flex-col w-9/12">
                            <h4 class="w-full text-brown-aran xl:text-3xl lg:text-2xl text-xl font-serif my-2"><?php echo esc_html($banner_catalogo['titolo_1_banner_catalogo']); ?></h4>
                            <p class="w-full text-white"><?php echo esc_html($banner_catalogo['testo_1_banner_catalogo']); ?></p>
                        </div>
                    </div>
                    <div class="w-full flex lg:gap-0 gap-4 lg:my-8 my-4">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo2.svg'; ?>" alt="" class="w-2/12 mt-3 max-h-8">
                        <div class="flex flex-col w-9/12">
                            <h4 class="w-full text-brown-aran xl:text-3xl lg:text-2xl text-xl font-serif my-2"><?php echo esc_html($banner_catalogo['titolo_2_banner_catalogo']); ?></h4>
                            <p class="w-full text-white"><?php echo esc_html($banner_catalogo['testo_2_banner_catalogo']); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <img src="<?php echo get_template_directory_uri() . ''; ?>" alt="" class="w-6/12">
        </div>
    </section>

    <!-- cta -->
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:px-8 px-4 mx-auto lg:py-24 py-12 flex flex-col items-center">
        <h5 class="xl:text-5xl lg:text-4xl text-3xl font-serif uppercase my-12 text-center">RICHIEDI <br> IL CATALOGO 2023</h5>
        <form class="w-full flex lg:flex-row flex-col justify-between lg:my-8 my-16">
            <button id="buttonCatalogoCasa" type="button" class="lg:w-custom w-full flex flex-col justify-between py-8 px-6 border border-dark-aran text-center items-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo3.svg'; ?>" alt="" class="w-10 m-auto my-6">
                <?php
                $card_1_catalogo = get_field('card_1_catalogo');
                if ($card_1_catalogo) : ?>
                    <p class="font-serif text-xl my-3"><?php echo esc_html($card_1_catalogo['titolo_card_1_catalogo']); ?></p>
                    <p><?php echo esc_html($card_1_catalogo['testo_card_1_catalogo']); ?></p>
                <?php endif; ?>

                <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo_arrow.svg'; ?>" alt="" class="w-6 m-auto my-6">
            </button>

            <button id="buttonCatalogoOnline" type="button" class="lg:w-custom w-full lg:mt-0 mt-4 py-8 px-12 flex flex-col justify-between border border-dark-aran text-center items-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo4.svg'; ?>" alt="" class="w-10 m-auto my-6">
                <?php
                $card_2_catalogo = get_field('card_2_catalogo');
                if ($card_2_catalogo) : ?>
                    <p class="font-serif text-xl my-3"><?php echo esc_html($card_2_catalogo['titolo_card_2_catalogo']); ?></p>
                    <p><?php echo esc_html($card_2_catalogo['testo_card_2_catalogo']); ?></p>
                <?php endif; ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo_arrow.svg'; ?>" alt="" class="w-6 m-auto my-6">
            </button>

            <!-- form catalogo online -->
            <div id="catalogoOnline" class="hidden lg:w-6/12 w-full m-auto">
                <?php
                gravity_form(6, false, false, false, '', false);
                ?>
            </div>

            <!-- form catalogo casa -->
            <div id="catalogoCasa" class="hidden lg:w-6/12 w-full m-auto">
                <?php
                gravity_form(7, false, false, false, '', false);
                ?>
            </div>

        </form>
    </section>

</main>
<script>
    // Catalogo Action

    document.getElementById("buttonCatalogoCasa").addEventListener("click", function() {
        // Aggiunge la classe "block" al div con id "catalogoCasa"
        document.getElementById("catalogoCasa").classList.remove("hidden");

        // Nasconde i pulsanti
        document.getElementById("buttonCatalogoCasa").classList.add("hidden");
        document.getElementById("buttonCatalogoOnline").classList.add("hidden");
    });

    document.getElementById("buttonCatalogoOnline").addEventListener("click", function() {
        // Aggiunge la classe "block" al div con id "catalogoOnline"
        document.getElementById("catalogoOnline").classList.remove("hidden");

        // Nasconde i pulsanti
        document.getElementById("buttonCatalogoCasa").classList.add("hidden");
        document.getElementById("buttonCatalogoOnline").classList.add("hidden");
    });
</script>
<?php get_footer(); ?>