<footer class="w-full">

    <!-- Info -->
    <section class="bg-neutral-900 flex">


        <!-- Contatti -->
        <div class="w-6/12 flex flex-wrap py-14">

            <!-- Testo -->
            <p class="contatti-footer w-full text-white text-5xl font-serif uppercase my-8 pr-16"><?php echo esc_html(get_field('testo_footer', 'option')); ?></p>

            <!-- icone -->
            <div class="contatti-footer w-auto flex flex-col gap-2 mr-6">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/tel-footer.svg'; ?>" class="max-h-8 my-5">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/mail-footer.svg'; ?>" class="max-h-8 my-5">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/indirizzo-footer.svg'; ?>" class="max-h-8 my-5">
            </div>

            <!-- link -->
            <div class="w-8/12 flex flex-col">
                <!-- Telefono -->
                <?php
                $telefono = get_field('telefono_footer', 'option');
                if ($telefono) :
                    $telefono_url = $telefono['url'];
                    $telefono_title = $telefono['title'];
                    $telefono_target = $telefono['target'] ? $telefono['target'] : '_self';
                ?>
                    <a class="w-full text-white text-3xl font-serif my-5" href="<?php echo esc_url($telefono_url); ?>" target="<?php echo esc_attr($telefono_target); ?>"><?php echo esc_html($telefono_title); ?></a>

                    <!-- Mail -->
                <?php endif;
                $mail = get_field('mail_footer', 'option');
                if ($mail) :
                    $mail_url = $mail['url'];
                    $mail_title = $mail['title'];
                    $mail_target = $mail['target'] ? $mail['target'] : '_self';
                ?>
                    <a class="w-full text-white text-3xl font-serif my-5" href="<?php echo esc_url($mail_url); ?>" target="<?php echo esc_attr($mail_target); ?>"><?php echo esc_html($mail_title); ?></a>

                    <!-- Indirizzo -->
                <?php endif;
                $indirizzo = get_field('indirizzo_footer', 'option');
                if ($indirizzo) :
                    $indirizzo_url = $indirizzo['url'];
                    $indirizzo_title = $indirizzo['title'];
                    $indirizzo_target = $indirizzo['target'] ? $indirizzo['target'] : '_self';
                ?>
                    <a class="w-8/12 text-white text-3xl font-serif my-5" href="<?php echo esc_url($indirizzo_url); ?>" target="<?php echo esc_attr($indirizzo_target); ?>"><?php echo esc_html($indirizzo_title); ?></a>

            </div>
            <!-- Cta -->
        <?php endif;
                $pulsante = get_field('pulsante_footer', 'option');
                if ($pulsante) :
                    $pulsante_url = $pulsante['url'];
                    $pulsante_title = $pulsante['title'];
                    $pulsante_target = $pulsante['target'] ? $pulsante['target'] : '_self';
        ?>
            <a class="contatti-footer w-max text-white text-sm uppercase tracking-wider my-8 py-4 px-8 border border-white md:hover:border-dark-aran md:hover:bg-white md:hover:text-dark-aran transition-all" href="<?php echo esc_url($pulsante_url); ?>" target="<?php echo esc_attr($pulsante_target); ?>"><?php echo esc_html($pulsante_title); ?></a>
        <?php endif; ?>

        </div>

        <!-- Mappa -->
        <div class="w-6/12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2769.0720148918317!2d11.130705799999998!3d46.04966179999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4782741d5e116d57%3A0xee0e7b4b1bdc04e4!2sVia%20Enrico%20Fermi%2C%2070%2C%2038123%20Trento%20TN!5e0!3m2!1sit!2sit!4v1690903869500!5m2!1sit!2sit" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Menu -->
    <section class="border-b border-neutral-900">
        <div class="max-w-screen-xl mx-auto py-12 flex justify-between">
            <a href="<?php echo get_home_url(); ?>" class="w-3/12">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.svg'; ?>" class="h-12"></img>
            </a>
            <nav class="w-8/12 flex">
                <?php wp_nav_menu(array(
                    'theme_location'    => 'header',
                    'container'         =>  false,
                    'menu_class'        => 'flex justify-between uppercase text-lg tracking-wider items-center w-full',
                    'orderby'           => 'menu_order'
                )); ?>
            </nav>
        </div>
    </section>

    <!-- Privacy Cookie Credits -->
    <section class="max-w-screen-xl mx-auto py-5 flex justify-between">

        <!-- Privacy e Cookie -->
        <div class="w-auto">
            <?php
            $privacy = get_field('privacy_footer', 'option');
            if ($privacy) :
                $privacy_url = $privacy['url'];
                $privacy_title = $privacy['title'];
                $privacy_target = $privacy['target'] ? $privacy['target'] : '_self';
            ?>
                <a class="text-sm" href="<?php echo esc_url($privacy_url); ?>" target="<?php echo esc_attr($privacy_target); ?>"><?php echo esc_html($privacy_title); ?></a>
            <?php endif;
            $cookie = get_field('cookie_footer', 'option');
            if ($cookie) :
                $cookie_url = $cookie['url'];
                $cookie_title = $cookie['title'];
                $cookie_target = $cookie['target'] ? $cookie['target'] : '_self';
            ?>
                <a class="mx-4 text-sm" href="<?php echo esc_url($cookie_url); ?>" target="<?php echo esc_attr($cookie_target); ?>"><?php echo esc_html($cookie_title); ?></a>
            <?php endif; ?>
        </div>

        <!-- Credits -->
        <div class="w-auto">
            <?php
            $credits = get_field('credits_footer', 'option');
            if ($credits) :
                $credits_url = $credits['url'];
                $credits_title = $credits['title'];
                $credits_target = $credits['target'] ? $credits['target'] : '_self';
            ?>
                <a class="text-sm" href="<?php echo esc_url($credits_url); ?>" target="<?php echo esc_attr($credits_target); ?>"><?php echo esc_html($credits_title); ?></a>
            <?php endif; ?>
        </div>

    </section>

</footer>
<?php wp_footer(); ?>
</body>