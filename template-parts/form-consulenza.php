    <!-- Form -->
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:px-8 px-4 mx-auto lg:py-24 py-12 flex flex-col items-center">
        <h5 class="xl:text-5xl lg:text-4xl text-3xl font-serif uppercase lg:mt-24 mt-12 text-center">RICHIEDI IL CATALOGO 2023</h5>

        <form id="FormConsulenza" action="">

            <!-- Primo step -->
            <div class="tab-form flex lg:flex-row flex-col justify-between lg:my-8 my-16">
                <button class="nextBtn lg:w-custom-32 w-full relative flex flex-col justify-between py-8 px-6 border border-dark-aran text-center items-center" onclick="nextPrev(1)">
                    <span class="absolute bg-stone-200 py-1 px-2" style="top: -14px;">Per te 10% di sconto</span>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/consulenza/store.svg'; ?>" alt="" class="w-10 m-auto my-6">
                    <?php
                    $card_1_consulenza = get_field('card_1_consulenza');
                    if ($card_1_consulenza) : ?>
                        <p class="font-serif text-xl my-3"><?php echo esc_html($card_1_consulenza['titolo_card_1_consulenza']); ?></p>
                        <p><?php echo esc_html($card_1_consulenza['testo_card_1_consulenza']); ?></p>
                    <?php endif; ?>

                    <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo_arrow.svg'; ?>" alt="" class="w-6 m-auto my-6">
                </button>
                <button class="nextBtn lg:w-custom-32 w-full lg:mt-0 mt-4 py-8 px-12 flex flex-col justify-between border border-dark-aran text-center items-center" onclick="nextPrev(1)">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/consulenza/cam.svg'; ?>" alt="" class="w-10 m-auto my-6">
                    <?php
                    $card_2_consulenza = get_field('card_2_consulenza');
                    if ($card_2_consulenza) : ?>
                        <p class="font-serif text-xl my-3"><?php echo esc_html($card_2_consulenza['titolo_card_2_consulenza']); ?></p>
                        <p><?php echo esc_html($card_2_consulenza['testo_card_2_consulenza']); ?></p>
                    <?php endif; ?>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo_arrow.svg'; ?>" alt="" class="w-6 m-auto my-6">
                </button>
                <button class="nextBtn lg:w-custom-32 w-full lg:mt-0 mt-4 py-8 px-12 flex flex-col justify-between border border-dark-aran text-center items-center" onclick="nextPrev(1)">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/consulenza/tel.svg'; ?>" alt="" class="w-10 m-auto my-6">
                    <?php
                    $card_3_consulenza = get_field('card_3_consulenza');
                    if ($card_3_consulenza) : ?>
                        <p class="font-serif text-xl my-3"><?php echo esc_html($card_3_consulenza['titolo_card_3_consulenza']); ?></p>
                        <p><?php echo esc_html($card_3_consulenza['testo_card_3_consulenza']); ?></p>
                    <?php endif; ?>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo_arrow.svg'; ?>" alt="" class="w-6 m-auto my-6">
                </button>
            </div>

            <!-- Secondo step -->
            <div class="tab-form lg:max-w-[60%] max-w-none flex flex-col justify-between mx-auto lg:my-8 my-16">
                <!-- Data -->
                <div id="calendar"></div>
                <!-- Orari -->
                <div class="w-full my-4">
                    <select class="w-full text-center" name="environments" id="environments">
                        <option value="orari 1">orari 1</option>
                        <option value="orari 2">orari 2</option>
                        <option value="orari 3">orari 3</option>
                        <option value="orari 4">orari 4</option>
                        <option value="orari 5">orari 5</option>
                        <option value="orari 6">orari 6</option>
                    </select>
                </div>
                <!-- Shop id -->
                <input type="hidden">

                <button type="submit"></button>

                <!-- Terzo step -->
                <div class="tab-form lg:max-w-[60%] max-w-none flex flex-col justify-between mx-auto lg:my-8 my-16">
                    <!-- Ambiente -->
                    <div class="w-full my-4">
                        <select class="w-full text-center" name="environments" id="environments">
                            <option value="ambiente 1">Ambiente 1</option>
                            <option value="ambiente 2">Ambiente 2</option>
                            <option value="ambiente 3">Ambiente 3</option>
                            <option value="ambiente 4">Ambiente 4</option>
                            <option value="ambiente 5">Ambiente 5</option>
                            <option value="ambiente 6">Ambiente 6</option>
                        </select>
                    </div>
                    <!-- Nome -->
                    <input class="w-full my-4" name="fullname" placeholder=" Nome e Cognome " type="text">
                    <!-- Telefono -->
                    <input class="w-full my-4" name="phone" placeholder=" Telefono " type="text">
                    <!-- Email -->
                    <input class="w-full my-4" name="email" placeholder=" Email " type="email">

                    <!-- Shop id -->
                    <input type="hidden">

                    <button type="submit"></button>

                </div>
        </form>
    </section>