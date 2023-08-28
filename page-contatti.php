<?php get_header(); ?>

<main>

    <!-- hero -->
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:px-8 px-4 mx-auto lg:py-24 py-20 flex flex-col items-center">
        <h1 class="xl:text-5xl lg:text-4xl text-3xl font-serif uppercase lg:mt-24 mt-20 text-center"><?php the_field('titolo_hero_contatti'); ?></h1>
        <div class="xl:text-3xl lg:text-2xl text-xl font-serif lg:my-8 my-4 text-center">
            <?php the_field('testo_hero_contatti'); ?>
        </div>
    </section>

    <!-- banner -->
    <section class="w-full bg-dark-aran">
        <div class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:px-8 px-4 mx-auto lg:py-24 py-12 flex lg:flex-row flex-col justify-between">
            <div class="lg:w-4/12 w-full flex lg:gap-0 gap-4 lg:my-8 my-4">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/tel-footer.svg'; ?>" alt="" class="w-2/12 mt-3 max-h-8">
                <div class="flex flex-col w-9/12">
                    <?php 
                    $link_contatti_tel = get_field('telefono_banner_contatti');
                    if ($link_contatti_tel) :
                    $link_contatti_tel_url = $link_contatti_tel['url'];
                    $link_contatti_tel_title = $link_contatti_tel['title'];
                    $link_contatti_tel_target = $link_contatti_tel['target'] ? $link_contatti_tel['target'] : '_self'; ?>

                    <a class="w-full text-brown-aran xl:text-3xl lg:text-2xl text-xl font-serif my-2" href="<?php echo esc_url( $link_contatti_tel_url ); ?>" target="<?php echo esc_attr( $link_contatti_tel_target ); ?>"><?php echo esc_html( $link_contatti_tel_title); ?></a>
                    <?php endif; ?>
                    <p class="w-full text-white max-w-[25ch]"><?php echo esc_html( get_field('testo_telefono_banner_contatti')); ?></p>
                </div>
            </div>
            <div class="lg:w-4/12 w-full flex lg:gap-0 gap-4 lg:my-8 my-4">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/mail-footer.svg'; ?>" alt="" class="w-2/12 mt-3 max-h-6">
                <div class="flex flex-col w-9/12">
                <?php 
                    $link_contatti_mail = get_field('mail_banner_contatti');
                    if ($link_contatti_mail) :
                    $link_contatti_mail_url = $link_contatti_mail['url'];
                    $link_contatti_mail_title = $link_contatti_mail['title'];
                    $link_contatti_mail_target = $link_contatti_mail['target'] ? $link_contatti_mail['target'] : '_self'; ?>
                    <a class="w-full text-brown-aran xl:text-3xl lg:text-2xl text-xl font-serif my-2" href="<?php echo esc_url( $link_contatti_mail_url ); ?>" target="<?php echo esc_attr( $link_contatti_mail_target ); ?>"><?php echo esc_html( $link_contatti_mail_title); ?></a>
                    <?php endif; ?>
                    <p class="w-full text-white max-w-[25ch]"><?php echo esc_html( get_field('testo_mail_banner_contatti')); ?></p>
                </div>
            </div>
            <div class="lg:w-4/12 w-full flex lg:gap-0 gap-4 lg:my-8 my-4">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/indirizzo-footer.svg'; ?>" alt="" class="w-2/12 mt-3 max-h-8">
                <div class="flex flex-col w-9/12">
                <?php 
                    $link_contatti_ind = get_field('indirizzo_banner_contatti');
                    if ($link_contatti_ind) :
                    $link_contatti_ind_url = $link_contatti_ind['url'];
                    $link_contatti_ind_title = $link_contatti_ind['title'];
                    $link_contatti_ind_target = $link_contatti_ind['target'] ? $link_contatti_ind['target'] : '_self'; ?>
                    <a class="w-full text-brown-aran xl:text-3xl lg:text-2xl text-xl font-serif my-2" href="<?php echo esc_url( $link_contatti_ind_url ); ?>" target="<?php echo esc_attr( $link_contatti_ind_target ); ?>"><?php echo esc_html( $link_contatti_ind_title); ?></a>
                    <?php endif; ?>
                    <p class="w-full text-white max-w-[40ch]"><?php echo esc_html( get_field('testo_indirizzo_banner_contatti')); ?></p>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>