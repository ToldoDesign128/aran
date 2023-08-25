
    
    <?php 
        include './layouts/partials/head.php';
    ?>
    <link href="/dist/css/vanilla-calendar.min.css" rel="stylesheet">    
    <script src="/dist/js/vanilla-calendar.min.js" defer></script>
    <?php 
        include './layouts/partials/head-last-css.php';
    ?>

</head>
<body>

<?php 
    include './layouts/partials/nav.php';
?>

    <main id="page-content" class="w-full space-y-22 lg:space-y-26 2xl:space-y-30 relative z-10">

        <section class="w-full h-auto flex items-center justify-start bg-center !bg-cover !bg-no-repeat bg-[url('/images/catalog-bg.jpg')] relative pt-55 sm:pt-64 pb-10">
            <div class="overlay bg-gradient-to-t from-black/70 to-transparent absolute top-0 left-0 w-full h-full z-10"></div>
            <div class="relative z-10 w-full container-narrow mx-auto">
                <h1 class="text-4.25xl sm:text-4xl lg:text-5xl xl:text-5.5xl 2.5xl:text-6xl font-bold text-white !leading-tight mb-2">
                    Richiedi il catalogo Casa Tua
                </h1>
                <h2 class="text-white font-semibold text-2xl max-w-[43ch]">
                    Ricevi gratis il nuovo catalogo Casa Tua Arredo 2023
                </h2>
            </div>                        
        </section>          
        
        <section class="w-full container-narrow mx-auto relative z-20 space-y-14 !mt-20 xl:!mt-8">                 
            <div class="w-full grid grid-cols-1 xl:grid-cols-2 gap-y-12 xl:gap-x-8">
                <div class="flex flex-col gap-y-12 justify-center">
                    <div class="w-full flex space-x-4">
                        <div class="flex flex-shrink-0">
                            <img alt="icon" class="relative left-0 group-hover:xl:left-1.5 transition-all !duration-400 !delay-75 w-8 h-8" src="/images/icons/icon-shop-perk-1.svg" width="30" height="30"/>
                        </div>
                        <div class="space-y-3">
                            <h4 class="font-semibold text-2.25xl">Scaricalo gratuitamente</h4>
                            <p class="text-customGray-paragraphs text-lg xl:text-base flex flex-col space-y-0">
                                <span class="flex flex-col">
                                    <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                    </span>
                                </span>                                                                                                                        
                            </p>
                        </div>
                    </div>
                    <div class="w-full flex space-x-4">
                        <div class="flex flex-shrink-0">
                            <img alt="icon" class="relative left-0 group-hover:xl:left-1.5 transition-all !duration-400 !delay-75 w-8 h-8" src="/images/icons/icon-contact-4.svg" width="30" height="30"/>
                        </div>
                        <div class="space-y-3">
                            <h4 class="font-semibold text-2.25xl">Ricevilo a casa tua o sulla tua e-mail</h4>
                            <p class="text-customGray-paragraphs text-lg xl:text-base flex flex-col space-y-0">
                                <span class="flex flex-col">
                                    <span>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                    </span>
                                </span>                                                                                                                         
                            </p>
                        </div>
                    </div>      
                </div>                             
                <div class="w-full flex">
                    <img alt="catalogo 2023" src="/images/catalogo.png" width="800" height="574" class="w-full h-auto"/>
                </div>      
            </div>
        </section>        

        <hr class="container-narrow !mt-12 mx-auto" />

        <section class="w-full max-w-screen overflow-hidden slider-section grid grid-cols-1 !mt-16">
            <div class="w-full container-narrow mx-auto text-center px-5">
                <h2 class="text-dark text-3xl md:text-3xl lg:text-3.5xl mb-6 font-semibold max-w-[50ch] mx-auto">
                    Richiedi il nostro catalogo gratuito e riceverai subito un <span class="text-primary-300">buono sconto del 10%</span> da utilizzare sul tuo prossimo acquisto*.
                </h2>         
                <p class="text-customGray-paragraphs text-base mt-3 mb-16 xl:mb-14 text-center">
                * Il buono sconto sarà valido fino al 31 dicembre 2023 su tutti i mobili componibili. Portalo con te quando vieni in negozio!                             
                </p>       
            </div>
            <div class="w-full mx-auto xl:grid xl:grid-cols-1 container-narrow xl:px-20">
                <div class="rounded-xl xl:col-span-6 pl-0 container-full-mobile mx-auto">
                
                    <div class="!max-w-full overflow-visible">           
                        <div class="hide-scrollbar grid grid-cols-1 sm:grid-cols-2 gap-y-4 sm:gap-y-0 gap-x-4 xl:gap-x-4.5 2xl:gap-x-6.5 3xl:gap-x-8 xl:!transform-none">
                            <button type="button" data-type="home" class="selector xl:mr-0 w-auto h-full xl:h-auto text-left sm:w-auto border bg-customGray-input-bg border-customGray-input-bg px-7 py-8 space-y-5 rounded-xl flex flex-col xl:hover:border-gray-200 xl:hover:!bg-white group transition-all relative">                            
                                <span>
                                    <img alt="icona" src="/images/icons/icon-home.svg" class="h-10 w-auto ml-0" />
                                </span>                                
                                <h4 class="font-semibold text-2xl pt-3 pr-8 xl:pr-0">Ricevi il catalogo a casa tua</h4>
                                <p class="text-customGray-paragraphs xl:text-base text-base md:text-sm pb-1.5">
                                    Inserisci il tuo indirizzo e ricevi la copia cartacea comodamente a casa<br><small>(spedizione in 5 giorni lavorativi)</small>
                                </p>
                                <img alt="icon" class="relative left-0 group-hover:xl:left-1.5 transition-all !duration-400 !delay-75 w-7.5 h-7.5" src="/images/icons/icon-arrow-circle.svg" width="30" height="30"/>                      
                                <span class="bg-primary-400 inline-block px-3 rounded-full font-medium py-0.5 text-white text-base absolute top-3 right-5 xl:right-[initial] xl:-top-5 xl:-translate-y-1/2 xl:left-[52%] xl:-translate-x-1/2 whitespace-nowrap">Per te 10% di sconto</span>          
                            </button>
                            <button type="button" data-type="email" class="selector xl:mr-0 w-auto h-full xl:h-auto text-left sm:w-auto bg-customGray-input-bg border border-customGray-input-bg px-7 py-8 space-y-5 rounded-xl flex flex-col xl:hover:border-gray-200 xl:hover:!bg-white group transition-all">
                                <span>
                                    <img alt="icona" src="/images/icons/icon-mail.svg" class="h-10 w-auto ml-0" />
                                </span>                                
                                <h4 class="font-semibold text-2xl pt-3 pr-8 xl:pr-0">Ricevi il catalogo digitale via e-mail</h4>
                                <p class="text-customGray-paragraphs xl:text-base text-base md:text-sm pb-1.5">
                                    Inserisci la tue e-mail e ti invieremo subito una copia digitale in PDF 
                                </p>
                                <img alt="icon" class="relative left-0 group-hover:xl:left-1.5 transition-all !duration-400 !delay-75 w-7.5 h-7.5" src="/images/icons/icon-arrow-circle.svg" width="30" height="30"/>                               
                            </button>                                               
                        </div>
                    </div>

                </div>                
                
            </div>          

        </section>


        
    </main>   

    <div id="catalog-popup" class="fixed bg-black/40 top-0 left-0 w-screen h-full transition-all !duration-500 p-5 md:px-14 xl:p-20 z-[1000] popup !mt-0 overflow-y-auto group opacity-0 pointer-events-none">

        <div class="popup-close fixed top-0 left-0 w-full h-full z-0"></div>

        <form action="/" method="POST" class="relative z-10 block pointer-events-none">

            <input type="hidden" name="type" />                

            <div class="popup-content max-w-lg bg-white py-6 mx-auto rounded-xl space-y-11 relative pointer-events-auto group-[.pointer-events-none]:!pointer-events-none">

                <button type="button" class="popup-close absolute top-5 right-5 flex z-20 hover:opacity-80 transition-all">
                    <img alt="icona" src="/images/icons/icon-close.svg" class="w-4.5 h-4.5 "/>
                </button>

                <div class="w-full px-6 xl:px-8 !mt-6">
                    <h2 class="text-dark text-2xl md:text-3xl lg:text-3.5xl w-full !leading-[1.15] font-semibold mb-0 text-center">
                        <span class="popup-title"></span>
                    </h2>                   
                </div>                        

                <div class="px-6 xl:px-8 !mt-3">
                    <p class="text-customGray-paragraphs text-base w-full col-span-2 text-center mb-8 !leading-tight">
                        Compila il form per richiedere il catalogo di Casa Tua
                    </p>
                    <div class="w-full relative space-y-5">
                        <div class="col-span-2">
                            <span class="text-customGray-paragraphs text-base w-full col-span-2 italic">
                                I tuoi dati
                            </span>
                        </div>
                        <div class="col-span-2 relative w-full block">                               
                            <div class="w-full flex flex-col relative bg-neutral-100 rounded-md">
                                <input name="fullname" class="pt-6 px-4 border !border-gray-200 focus:!bg-white focus:!ring-1 focus:!border-primary-300 focus:!ring-primary-300 rounded-lg bg-transparent outline-none h-[50px] xl:h-[55px] text-dark text-lg lg:text-base peer" placeholder=" " type="text" />
                                <label class="text-customGray-placeholder text-xxs absolute left-4 top-2.5 uppercase pointer-events-none peer-focus:!text-xxs peer-focus:!top-2.5 peer-focus:translate-y-0 peer-focus:uppercase peer-placeholder-shown:normal-case peer-placeholder-shown:text-base peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:text-customGray-placeholder transition-all w-full text-left">Cognome e Nome</label>
                            </div>
                            <!-- <span class="bg-red-400 relative -mt-1 rounded-b-md text-white text-xxs uppercase block w-full px-2 py-0.5">
                                Il campo è richiesto
                            </span> -->
                        </div>
                        <div class="col-span-2 relative w-full block">                               
                            <div class="w-full flex flex-col relative bg-neutral-100 rounded-md">
                                <input name="email" class="pt-6 px-4 border !border-gray-200 focus:!bg-white focus:!ring-1 focus:!border-primary-300 focus:!ring-primary-300 rounded-lg bg-transparent outline-none h-[50px] xl:h-[55px] text-dark text-lg lg:text-base peer" placeholder=" " type="email" />
                                <label class="text-customGray-placeholder text-xxs absolute left-4 top-2.5 uppercase pointer-events-none peer-focus:!text-xxs peer-focus:!top-2.5 peer-focus:translate-y-0 peer-focus:uppercase peer-placeholder-shown:normal-case peer-placeholder-shown:text-base peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:text-customGray-placeholder transition-all w-full text-left">E-mail</label>
                            </div>
                            <!-- <span class="bg-red-400 relative -mt-1 rounded-b-md text-white text-xxs uppercase block w-full px-2 py-0.5">
                                Il campo è richiesto
                            </span> -->
                        </div>
                        <div class="col-span-2 relative w-full block">                                
                            <div class="w-full flex flex-col relative bg-neutral-100 rounded-md">
                                <input name="phone" class="pt-6 px-4 border !border-gray-200 focus:!bg-white focus:!ring-1 focus:!border-primary-300 focus:!ring-primary-300 rounded-lg bg-transparent outline-none h-[50px] xl:h-[55px] text-dark text-lg lg:text-base peer" placeholder=" " type="text" />
                                <label class="text-customGray-placeholder text-xxs absolute left-4 top-2.5 uppercase pointer-events-none peer-focus:!text-xxs peer-focus:!top-2.5 peer-focus:translate-y-0 peer-focus:uppercase peer-placeholder-shown:normal-case peer-placeholder-shown:text-base peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:text-customGray-placeholder transition-all w-full text-left">Telefono</label>
                            </div>
                            <!-- <span class="bg-red-400 relative -mt-1 rounded-b-md text-white text-xxs uppercase block w-full px-2 py-0.5">
                                Il campo è richiesto
                            </span> -->
                        </div>                        

                        <div id="address-block" class="col-span-2 grid grid-cols-2 gap-y-5 gap-x-5 !hidden">

                            <div class="col-span-2">
                                <span class="text-customGray-paragraphs text-base w-full col-span-2 italic">
                                    Il tuo indirizzo
                                </span>
                            </div>

                            <div class="col-span-2 relative w-full block">                               
                                <div class="w-full flex flex-col relative bg-neutral-100 rounded-md">
                                    <input name="address" class="pt-6 px-4 border !border-gray-200 focus:!bg-white focus:!ring-1 focus:!border-primary-300 focus:!ring-primary-300 rounded-lg bg-transparent outline-none h-[50px] xl:h-[55px] text-dark text-lg lg:text-base peer" placeholder=" " type="text" />
                                    <label class="text-customGray-placeholder text-xxs absolute left-4 top-2.5 uppercase pointer-events-none peer-focus:!text-xxs peer-focus:!top-2.5 peer-focus:translate-y-0 peer-focus:uppercase peer-placeholder-shown:normal-case peer-placeholder-shown:text-base peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:text-customGray-placeholder transition-all w-full text-left">Indirizzo</label>
                                </div>
                                <!-- <span class="bg-red-400 relative -mt-1 rounded-b-md text-white text-xxs uppercase block w-full px-2 py-0.5">
                                    Il campo è richiesto
                                </span> -->
                            </div>
                            <div class="col-span-2 xl:col-span-1 relative w-full block">                               
                                <div class="w-full flex flex-col relative bg-neutral-100 rounded-md">
                                    <input name="city" class="pt-6 px-4 border !border-gray-200 focus:!bg-white focus:!ring-1 focus:!border-primary-300 focus:!ring-primary-300 rounded-lg bg-transparent outline-none h-[50px] xl:h-[55px] text-dark text-lg lg:text-base peer" placeholder=" " type="text" />
                                    <label class="text-customGray-placeholder text-xxs absolute left-4 top-2.5 uppercase pointer-events-none peer-focus:!text-xxs peer-focus:!top-2.5 peer-focus:translate-y-0 peer-focus:uppercase peer-placeholder-shown:normal-case peer-placeholder-shown:text-base peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:text-customGray-placeholder transition-all w-full text-left">Comune</label>
                                </div>
                                <!-- <span class="bg-red-400 relative -mt-1 rounded-b-md text-white text-xxs uppercase block w-full px-2 py-0.5">
                                    Il campo è richiesto
                                </span> -->
                            </div>
                            <div class="col-span-2 xl:col-span-1 relative w-full block">                                
                                <div class="w-full flex flex-col relative bg-neutral-100 rounded-md">
                                    <input name="cap" class="pt-6 px-4 border !border-gray-200 focus:!bg-white focus:!ring-1 focus:!border-primary-300 focus:!ring-primary-300 rounded-lg bg-transparent outline-none h-[50px] xl:h-[55px] text-dark text-lg lg:text-base peer" placeholder=" " type="number" />
                                    <label class="text-customGray-placeholder text-xxs absolute left-4 top-2.5 uppercase pointer-events-none peer-focus:!text-xxs peer-focus:!top-2.5 peer-focus:translate-y-0 peer-focus:uppercase peer-placeholder-shown:normal-case peer-placeholder-shown:text-base peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:text-customGray-placeholder transition-all w-full text-left">Cap</label>
                                </div>
                                <!-- <span class="bg-red-400 relative -mt-1 rounded-b-md text-white text-xxs uppercase block w-full px-2 py-0.5">
                                    Il campo è richiesto
                                </span> -->
                            </div>

                        </div>                            
                        
                        <div class="block w-full relative text-left">

                            <div class="relative w-auto inline-flex justify-center items-center">
                                <span class="flex items-center relative flex-shrink-0">
                                    <input aria-describedby="privacy" id="privacy-consulenza" name="privacy-consulenza" type="checkbox" class="focus:ring-primary-400 opacity-0 text-primary-400 border-neutral-300 border-2 rounded-[5px] cursor-pointer h-[25px] w-[25px]">                                          
                                    <div class="absolute w-full h-full top-0 left-0 border bg-neutral-100 rounded-md pointer-events-none flex justify-center items-center">
                                        <div class="!border-2 md:!border !border-transparent p-[2px] md:p-[3px] h-full w-full rounded-md opacity-0 relative z-10 flex items-center justify-center">
                                            <div class="bg-primary-400 w-full h-full rounded-sm"></div>
                                        </div>
                                    </div>
                                </span>
                                <span class="flex ml-3 text-sm relative flex-grow">
                                    <label for="privacy-consulenza" class="cursor-pointer text-dark text-base font-normal">
                                        Accetto la <a href="https://casatuaitalia.it/informativa-privacy-agli-utenti-1" target="_blank" class="underline text-primary-400 hover:opacity-80 transition-all">Privacy Policy</a>
                                    </label>                                                
                                </span>
                            </div>

                            <!-- <span class="bg-red-400 relative top-2 text-white rounded-md text-xxs uppercase block w-full px-2 py-0.5">
                                IL campo è richiesto
                            </span> -->

                        </div>

                    </div>                        
                </div>                    

                <hr class="" />

                <div class="px-6 xl:px-8 !mt-9">
                    <button type="button" class="bg-primary hover:bg-primary-300 py-3 px-6 xl:px-8 items-center space-x-3 rounded-full transition-all inline-flex mb-3 w-full justify-center">                       
                        <span class="text-white text-lg font-normal">
                            Ricevi il catalogo
                        </span>
                    </button>  
                </div>

            </div>

        </form>

    </div>

    <script src="/dist/js/moment-with-locales.min.js"></script>

    <script>

        window.addEventListener('load', () => {           

            /* Calendar */

            const options = {
                type: 'default',
                settings: {
                    lang: 'it-IT',
                    range: {
                        disablePast: true,
                    },
                    visibility: {
                        theme: 'light',
                    },
                },
            };

            const calendar = new VanillaCalendar('#calendar', options);
            calendar.init();

            /* */            

            let types = {
                home: 'Ricevi il catalogo via posta',
                email: 'Ricevi il catalogo via e-mail',
            }

            document.querySelectorAll('.selector').forEach(el => {                

                el.addEventListener('click', () => {

                    document.querySelector('#catalog-popup').classList.remove('opacity-0', 'pointer-events-none')
                    document.querySelector('body').classList.add('overflow-hidden')

                    let type = types[el.dataset.type]

                    if(el.dataset.type == 'home') {
                        document.querySelector('#address-block').classList.remove('!hidden')
                    }

                    document.querySelector('[name="type"]').value = type
                    document.querySelector('.popup-title').innerHTML = type

                })
            })

            document.querySelectorAll('.popup-close').forEach(el => {

                el.addEventListener('click', () => {
                    document.querySelector('#catalog-popup').classList.add('opacity-0', 'pointer-events-none')
                    document.querySelector('body').classList.remove('overflow-hidden')
                    setTimeout(() => {
                        document.querySelector('#address-block').classList.add('!hidden')
                    }, 400)        
                })
            })

        })

    </script>


<?php 
    include './layouts/partials/search-mobile.php';
    include './layouts/partials/footer.php';
?>

