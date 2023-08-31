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
                <div class="m-auto my-4" id="calendar"></div>

                <div class="w-full my-4">
                    <select class="w-full text-center" name="environments" id="environments">
                        <option value="orario 1">orario 1</option>
                        <option value="orario 2">orario 2</option>
                        <option value="orario 3">orario 3</option>
                        <option value="orario 4">orario 4</option>
                        <option value="orario 5">orario 5</option>
                        <option value="orario 6">orario 6</option>
                    </select>
                </div>                

                <input type="submit" value="Step sucessivo">

            </div>
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
                <!-- Email -->
                <input class="w-full my-4" name="email" placeholder=" Email " type="email">
                <!-- Telefono -->
                <input class="w-full my-4" name="phone" placeholder=" Telefono " type="text">
                <!-- Textarea -->
                <textarea name="note" class="w-full my-4 border-b border-black " rows="5" placeholder="Note"></textarea>

                <!-- Shop id -->
                <input type="hidden">

                <input type="submit">

            </div>
        </form>
    </section>
    <script>
        let dateTomorrow = new Date();

        function getNextDate(date) {
            var d = new Date(date);
            d.setDate(d.getDate() + 1); // Aggiunge un giorno alla data corrente

            var month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();

            if (month.length < 2)
                month = '0' + month;
            if (day.length < 2)
                day = '0' + day;

            return [day, month, year].join('-');
        }

        // data in formato dd-mm-yy
        let dateTomorrowCalendar = getNextDate(dateTomorrow);

        // data in formato mm-dd-yy per vanilla calendar
        function convertiFormatoData(data) {
            // Dividi la stringa di data in un array di stringhe
            var partiData = data.split('-');

            // Riorganizza le parti della data nel formato desiderato
            var dataConvertita = partiData[1] + '-' + partiData[0] + '-' + partiData[2];

            return dataConvertita;
        }

        dataCalendario = convertiFormatoData(dateTomorrowCalendar);

        document.addEventListener('DOMContentLoaded', () => {
            const options = {
                actions: {
                    clickDay(event, dates) {
                        console.log(dates);
                    },
                },
                date: {
                    today: new Date(dataCalendario),
                },
                settings: {
                    range: {
                        disablePast: true,
                    }
                },
                CSSClasses: {
                    arrow: 'vanilla-calendar-arrow',
                }
            };

            const calendar = new VanillaCalendar('#calendar', options);
            calendar.init();
        });

        const shopID = 'A0001';
        // let = serviceID = document.querySelector()

        jQuery.get(`https://casatuaitalia.it/BookingApi/booking.php?action=getAvilability&shop_id=${shopID}&service_id=1&date_selected=31-08-2023`, function(data) {

            let data2 = {
                "status": true,
                "data": ["10:00", "10:30", "11:00", "11:30", "12:00", "15:00", "15:30", "16:00", "16:30", "17:00", "17:30", "18:00", "18:30", "19:00", "19:30"]
            }

            jQuery(".result").html(data);
            alert("Load was performed.");

        });
    </script>