    <!-- Form -->
    <section class="2xl:max-w-screen-2xl xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md md:px-8 px-4 mx-auto lg:py-24 py-12 flex flex-col items-center">
        <h5 class="xl:text-5xl lg:text-4xl text-3xl font-serif uppercase lg:mt-24 mt-12 mb-8 text-center">RICHIEDI IL CATALOGO 2023</h5>

        <form id="FormConsulenza" class="w-full" action="">

            <!-- Primo step -->
            <div id="stepUnoConsulenza" class="flex lg:flex-row flex-col justify-between lg:my-8 my-16">

                <button type="button" value="Appuntamento" class="nextBtn lg:w-custom-32 w-full flex flex-col justify-between py-8 px-6 border border-dark-aran text-center items-center">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/consulenza/store.svg'; ?>" alt="" class="w-10 m-auto my-6">
                    <?php
                    $card_1_consulenza = get_field('card_1_consulenza');
                    if ($card_1_consulenza) : ?>
                        <p class="font-serif text-xl my-3"><?php echo esc_html($card_1_consulenza['titolo_card_1_consulenza']); ?></p>
                        <p><?php echo esc_html($card_1_consulenza['testo_card_1_consulenza']); ?></p>
                    <?php endif; ?>

                    <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo_arrow.svg'; ?>" alt="" class="w-6 m-auto my-6">
                </button>

                <button type="button" value="Videoconferenza" class="nextBtn lg:w-custom-32 w-full lg:mt-0 mt-4 py-8 px-12 flex flex-col justify-between border border-dark-aran text-center items-center">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/consulenza/cam.svg'; ?>" alt="" class="w-10 m-auto my-6">
                    <?php
                    $card_2_consulenza = get_field('card_2_consulenza');
                    if ($card_2_consulenza) : ?>
                        <p class="font-serif text-xl my-3"><?php echo esc_html($card_2_consulenza['titolo_card_2_consulenza']); ?></p>
                        <p><?php echo esc_html($card_2_consulenza['testo_card_2_consulenza']); ?></p>
                    <?php endif; ?>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/catalogo_arrow.svg'; ?>" alt="" class="w-6 m-auto my-6">
                </button>

                <button type="button" value="Consulenza" class="nextBtn lg:w-custom-32 w-full lg:mt-0 mt-4 py-8 px-12 flex flex-col justify-between border border-dark-aran text-center items-center">
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
            <div id="stepDueConsulenza" class="hidden lg:max-w-[60%] max-w-none flex-col justify-between mx-auto lg:my-8 my-16">
                <!-- Data -->
                <div class="m-auto my-4" id="calendar" required></div>

                <div class="w-full my-4">
                    <select class="w-full text-center" placeholder="Orari" name="orari" id="orari">
                        <option value="orario 1">orario 1</option>
                        <option value="orario 2">orario 2</option>
                        <option value="orario 3">orario 3</option>
                        <option value="orario 4">orario 4</option>
                        <option value="orario 5">orario 5</option>
                        <option value="orario 6">orario 6</option>
                    </select>
                </div>

                <div class="w-full flex flex-row justify-between my-8">
                    <button type="button" class="prevBtn lg:w-[48.5%] uppercase font-sm tracking-wider text-center border border-dark-aran py-4 px-8 lg:hover:bg-dark-aran lg:hover:border-white lg:hover:text-white transition-all">Step precedente</button>
                    <button type="button" class="nextBtnDue lg:w-[48.5%] uppercase font-sm tracking-wider text-center border border-dark-aran py-4 px-8 lg:hover:bg-dark-aran lg:hover:border-white lg:hover:text-white transition-all">Step sucessivo</button>
                </div>


            </div>
            <!-- Terzo step -->
            <div id="stepTreConsulenza" class="hidden lg:max-w-[60%] max-w-none flex-col justify-between mx-auto lg:my-8 my-16">
                <!-- Ambiente -->
                <div class="w-full my-4">
                    <select class="w-full text-center" placeholder="Ambienti" name="environments" id="environments" multiple="multiple">
                        <option value="ambiente 1">Ambiente 1</option>
                        <option value="ambiente 2">Ambiente 2</option>
                        <option value="ambiente 3">Ambiente 3</option>
                        <option value="ambiente 4">Ambiente 4</option>
                        <option value="ambiente 5">Ambiente 5</option>
                        <option value="ambiente 6">Ambiente 6</option>
                    </select>
                </div>
                <!-- Nome -->
                <input class="w-full my-4" name="fullname" placeholder=" Nome e Cognome " type="text" required>
                <!-- Email -->
                <input class="w-full my-4" name="email" placeholder=" Email " type="email" required>
                <!-- Telefono -->
                <input class="w-full my-4" name="phone" placeholder=" Telefono " type="text" required>
                <!-- Textarea -->
                <textarea name="note" class="w-full my-4 border-b border-black " rows="5" placeholder="Note"></textarea>

                <!-- Shop id -->
                <input type="hidden">
                <!-- Submit -->
                <div class="w-full flex flex-row justify-between my-8">
                    <button type="button" class="prevBtnDue lg:w-[48.5%] uppercase font-sm tracking-wider text-center border border-dark-aran py-4 px-8 lg:hover:bg-dark-aran lg:hover:border-white lg:hover:text-white transition-all">Step precedente</button>
                    <button type="submit" class="lg:w-[48.5%] uppercase font-sm tracking-wider text-center border border-dark-aran py-4 px-8 lg:hover:bg-dark-aran lg:hover:border-white lg:hover:text-white transition-all">Invia</button>
                </div>
            </div>
        </form>
    </section>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/formConsulenza.js"></script>