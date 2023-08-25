
<?php 
    include './layouts/partials/head.php';
?>

    <link href="/dist/css/vanilla-calendar.min.css" rel="stylesheet">    
    <link href="/dist/css/selectr.min.css" rel="stylesheet" type="text/css">
    <script src="/dist/js/selectr.min.js" defer type="text/javascript"></script>
    <script src="/dist/js/vanilla-calendar.min.js" defer></script>
    <?php 
        include './layouts/partials/head-last-css.php';
    ?>

</head>
<body>

<?php 
    include './layouts/partials/nav.php';
?>

    <main class="w-full space-y-22 lg:space-y-26 2xl:space-y-30 relative z-10">

        <section class="w-full h-auto flex items-center justify-start bg-center !bg-cover !bg-no-repeat bg-[url('/images/consulenza-bg.jpg')] relative pt-55 sm:pt-64 pb-10">
            <div class="overlay bg-gradient-to-t from-black/70 to-transparent absolute top-0 left-0 w-full h-full z-10"></div>
            <div class="relative z-10 w-full container-narrow mx-auto">
                <h1 class="text-4.25xl sm:text-4xl lg:text-5xl xl:text-5.5xl 2.5xl:text-6xl font-bold text-white !leading-tight mb-2">
                    Prenota una consulenza gratuita
                </h1>
                <h2 class="text-white font-semibold text-2xl max-w-[43ch]">
                    Scegli se preferisci un appuntamento in negozio oppure una consulenza al telefono o in videoconferenza.
                </h2>
            </div>                        
        </section>

        <section class="w-full container-narrow mx-auto relative z-20 space-y-14">                 
            <div class="w-full grid grid-cols-1 xl:grid-cols-3 gap-y-12 xl:gap-x-8 xl:gap-y-18">
                <div class="w-full flex space-x-4">
                    <div class="flex flex-shrink-0">
                        <img alt="icon" class="relative left-0 group-hover:xl:left-1.5 transition-all !duration-400 !delay-75 w-8 h-8" src="/images/icons/icon-shop-perk-1.svg" width="30" height="30"/>
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-semibold text-2.25xl">Consulenza gratuita</h4>
                        <p class="text-customGray-paragraphs text-lg xl:text-base flex flex-col space-y-0">
                            <span class="flex flex-col">
                                <span>
                                    Per realizzare il tuo nuovo progetto di arredamento.
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
                        <h4 class="font-semibold text-2.25xl">Con arredatori esperti</h4>
                        <p class="text-customGray-paragraphs text-lg xl:text-base flex flex-col space-y-0">
                            <span class="flex flex-col">
                                <span>
                                Che ti aiuteranno a realizzare i tuoi desideri di casa.
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
                        <h4 class="font-semibold text-2.25xl">In negozio o online</h4>
                        <p class="text-customGray-paragraphs text-lg xl:text-base flex flex-col space-y-0">
                            <span class="flex flex-col">
                                <span>
                                Scegli comodamente la modalità che preferisci.
                                </span>
                            </span>                                                                                                                         
                        </p>
                    </div>
                </div>            
            </div>
        </section>        

        <hr class="container-narrow !mt-22 mx-auto" />

        <section class="w-full max-w-screen overflow-hidden slider-section grid grid-cols-1 !mt-22">
            <div class="w-full container-narrow mx-auto text-center px-5">
                <h2 class="text-dark text-3xl md:text-4xl lg:text-4.5xl mb-12 font-semibold">
                    Prenota una consulenza
                </h2>                
            </div>
            <div class="w-full mx-auto xl:grid xl:grid-cols-1 container-narrow-xl">
                <div class="rounded-xl xl:col-span-6 pl-0 container-full-mobile mx-auto">
                
                    <div class="swiper swiper-perks-one !max-w-full overflow-visible">           
                        <div class="swiper-wrapper hide-scrollbar xl:grid xl:grid-cols-6 xl:gap-x-4.5 2xl:gap-x-6.5 3xl:gap-x-8 xl:!transform-none">
                            <button type="button" data-type="negozio" class="selector swiper-slide mr-2 xl:mr-0 w-[70vw] sm:w-[300px] lg:w-[300px] h-full xl:h-auto text-left xl:w-auto xl:col-span-2 border bg-customGray-input-bg border-customGray-input-bg px-7 py-8 space-y-5 rounded-xl flex flex-col xl:hover:border-gray-200 xl:hover:!bg-white group transition-all relative">                            
                                <span>
                                    <img alt="icona" src="/images/icons/consulenza/negozio.svg" class="h-10 w-auto ml-0" />
                                </span>                                
                                <h4 class="font-semibold text-2xl pt-3">Appuntamento in negozio</h4>
                                <p class="text-customGray-paragraphs xl:text-base text-base md:text-sm pb-1.5">
                                    Prenota una consulenza in un punto vendita con un nostro arredatore.
                                </p>
                                <img alt="icon" class="relative left-0 group-hover:xl:left-1.5 transition-all !duration-400 !delay-75 w-7.5 h-7.5" src="/images/icons/icon-arrow-circle.svg" width="30" height="30"/>                      
                                <span class="bg-primary-400 inline-block px-3 rounded-full font-medium py-0.5 text-white text-base absolute top-3 right-5 xl:right-[initial] xl:-top-5 xl:-translate-y-1/2 xl:left-[52%] xl:-translate-x-1/2 whitespace-nowrap">Per te 10% di sconto</span>          
                            </button>
                            <button type="button" data-type="online" class="selector swiper-slide mr-2 xl:mr-0 w-[70vw] sm:w-[300px] lg:w-[300px] h-full xl:h-auto text-left xl:w-auto xl:col-span-2 bg-customGray-input-bg border border-customGray-input-bg px-7 py-8 space-y-5 rounded-xl flex flex-col xl:hover:border-gray-200 xl:hover:!bg-white group transition-all">
                                <span>
                                    <img alt="icona" src="/images/icons/consulenza/webcam.svg" class="h-10 w-auto ml-0" />
                                </span>                                
                                <h4 class="font-semibold text-2xl pt-3">Videoconferenza online</h4>
                                <p class="text-customGray-paragraphs xl:text-base text-base md:text-sm pb-1.5">
                                    Progetta il tuo ambiente condividendo lo schermo con un nostro arredatore.
                                </p>
                                <img alt="icon" class="relative left-0 group-hover:xl:left-1.5 transition-all !duration-400 !delay-75 w-7.5 h-7.5" src="/images/icons/icon-arrow-circle.svg" width="30" height="30"/>                               
                            </button>
                            <button type="button" data-type="telefono" class="selector swiper-slide mr-2 xl:mr-0 w-[70vw] sm:w-[300px] lg:w-[300px] h-full xl:h-auto text-left xl:w-auto xl:col-span-2 bg-customGray-input-bg border border-customGray-input-bg px-7 py-8 space-y-5 rounded-xl flex flex-col xl:hover:border-gray-200 xl:hover:!bg-white group transition-all">
                                <span>
                                    <img alt="icona" src="/images/icons/consulenza/telefono.svg" class="h-10 w-auto ml-0" />    
                                </span>
                                <h4 class="font-semibold text-2xl pt-3">Consulenza telefonica</h4>
                                <p class="text-customGray-paragraphs xl:text-base text-base md:text-sm pb-1.5">
                                    Lasciati consigliare dall'esperienza dei nostri arredatori.
                                </p>
                                <img alt="icon" class="relative left-0 group-hover:xl:left-1.5 transition-all !duration-400 !delay-75 w-7.5 h-7.5" src="/images/icons/icon-arrow-circle.svg" width="30" height="30"/>                                
                            </button>                            
                        </div>
                    </div>

                </div>                
                
            </div>

            <div class="w-full container px-0 relative h-[2px] mt-14 sm:mt-18 xl:mt-0 mx-auto">
                <div class="absolute top-0 w-full !h-[2px] -left-[1px] w-[calc(100%+2px]]">
                    <div class="swiper-scrollbar swiper-scrollbar-perks-one !left-0 overflow-hidden !h-[2px] !w-full"></div>
                </div>
            </div>

        </section>
        
    </main>   

    <div id="appointment-popup" class="fixed bg-black/40 top-0 left-0 w-screen h-full transition-all !duration-500 p-5 md:px-14 xl:p-20 z-[1000] popup group !mt-0 overflow-y-auto opacity-0 pointer-events-none">

        <div class="popup-close fixed top-0 left-0 w-full h-full z-0"></div>

        <form action="/" method="POST" class="relative z-10 block pointer-events-none">

            <input type="hidden" name="type" />

            <div class="popup-content-first max-w-lg bg-white py-6 mx-auto rounded-xl space-y-11 relative pointer-events-auto group-[.pointer-events-none]:!pointer-events-none">

                <button type="button" class="popup-close absolute top-5 right-5 flex z-20 hover:opacity-80 transition-all">
                    <img alt="icona" src="/images/icons/icon-close.svg" class="w-4.5 h-4.5 "/>
                </button>

                <div class="w-full px-6 xl:px-8 !mt-4">
                    <h2 class="text-dark text-2xl md:text-3xl lg:text-3.5xl w-full !leading-[1.15] font-semibold mb-5 text-center">
                        <span class="popup-title"></span>
                    </h2>
                    <div class="w-full relative flex items-center justify-center">
                        <div class="w-full relative flex items-center justify-center">
                            <div class="bg-primary-300 aspect-square w-8 h-8 flex items-center justify-center text-white font-medium text-sm rounded-full border-2 !leading-none border-primary-300">
                                <span>1</span>
                            </div>
                            <div class="w-[112px] h-[2px] bg-customGray-input relative flex items-center">
                                <div class="w-1/2 h-full bg-primary-300"></div>
                            </div>
                            <div class="bg-transparent aspect-square w-8 h-8 flex items-center justify-center text-dark font-medium text-sm rounded-full border-2 !leading-none border-customGray-input">
                                <span>2</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full relative flex pt-1">
                        <span class="text-primary text-sm block w-1/2 text-right pr-8">Luogo e data</span>                       
                        <span class="text-dark text-sm block w-1/2 pl-11">I tuoi dati</span>
                    </div>
                </div>                         
                
                <hr class="!mt-4" />

                <div class="px-6 xl:px-8">
                    <h3 class="text-dark text-2xl xl:text-1.5xl font-semibold w-full text-center">
                        Seleziona un punto vendita
                    </h3>
                    <p class="text-customGray-paragraphs text-base w-full col-span-2 text-center">Abbiamo 13 negozi in tutta Italia</p>
                    <div class="w-full flex flex-col relative bg-neutral-100 rounded-md mt-3">
                        <select name="shop" class="pt-6 px-4 border !border-gray-200 focus:!bg-white focus:!ring-1 focus:!border-primary-300 focus:!ring-primary-300 rounded-lg bg-transparent outline-none h-[50px] xl:h-[55px] text-dark text-lg lg:text-base peer appearance-none">
                            <option value="">Seleziona un punto vendita</option>
                            <option value="negozio 1">Negozio 1</option>
                            <option value="negozio 2">Negozio 2</option>
                        </select>                           
                        <label class="text-customGray-placeholder absolute left-4 pointer-events-none !text-xxs !top-2.5 translate-y-0 uppercase peer-placeholder-shown:normal-case peer-placeholder-shown:text-base peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:text-customGray-placeholder transition-all w-full text-left">Punto vendita</label>
                    </div> 
                </div>

                <div class="px-6 xl:px-8">
                    <h3 class="text-dark text-2xl xl:text-1.5xl font-semibold w-full text-center">
                        Seleziona una data
                    </h3>
                    <p class="text-customGray-paragraphs text-base w-full col-span-2 text-center mb-4">Siamo aperti anche nei weekend!</p>
                    <div id="calendar"></div>
                </div>

                <div class="px-6 xl:px-8">
                    <h3 class="text-dark text-2xl xl:text-1.5xl font-semibold w-full text-center">
                        Seleziona un orario
                    </h3>
                    <p class="text-customGray-paragraphs text-base w-full col-span-2 text-center">Qui sotto vedrai gli orari disponibili</p>
                    <div class="w-full flex flex-col relative bg-neutral-100 rounded-md mt-3">
                        <select name="shop" class="pt-6 px-4 border !border-gray-200 focus:!bg-white focus:!ring-1 focus:!border-primary-300 focus:!ring-primary-300 rounded-lg bg-transparent outline-none h-[50px] xl:h-[55px] text-dark text-lg lg:text-base peer appearance-none">
                            <option value="">Seleziona un orario</option>
                            <option value="negozio 1">10:00</option>
                            <option value="negozio 2">10:30</option>
                        </select>                           
                        <label class="text-customGray-placeholder absolute left-4 pointer-events-none !text-xxs !top-2.5 translate-y-0 uppercase peer-placeholder-shown:normal-case peer-placeholder-shown:text-base peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:text-customGray-placeholder transition-all w-full text-left">Orario</label>
                    </div> 
                </div> 

                <hr class="" />

                <div class="px-6 xl:px-8 !mt-9">
                    <button type="button" id="goToStep2" class="bg-primary hover:bg-primary-300 py-3 px-6 xl:px-8 items-center space-x-3 rounded-full transition-all inline-flex mb-3 w-full justify-center">                       
                        <span class="text-white text-lg font-normal">
                            Continua
                        </span>
                    </button>  
                </div>

            </div>

            <div class="popup-content-second max-w-lg bg-white py-6 mx-auto rounded-xl space-y-11 relative pointer-events-auto hidden">

                <button type="button" class="popup-close absolute top-5 right-5 flex z-20 hover:opacity-80 transition-all">
                    <img alt="icona" src="/images/icons/icon-close.svg" class="w-4.5 h-4.5 "/>
                </button>

                <div class="w-full px-6 xl:px-8 !mt-4">
                    <h2 class="text-dark text-2xl md:text-3xl lg:text-3.5xl w-full !leading-[1.15] font-semibold mb-5 text-center">
                        <span class="popup-title"></span>
                    </h2>
                    <div class="w-full relative flex items-center justify-center">
                        <div class="w-full relative flex items-center justify-center">
                            <div class="bg-primary-300 aspect-square w-8 h-8 flex items-center justify-center text-white font-medium text-sm rounded-full border-2 !leading-none border-primary-300">
                                <span>1</span>
                            </div>
                            <div class="w-30 h-[2px] bg-customGray-input relative flex items-center">
                                <div class="w-full h-full bg-primary-300"></div>
                            </div>
                            <div class="bg-primary-300 aspect-square w-8 h-8 flex items-center justify-center text-white font-medium text-sm rounded-full border-2 !leading-none border-primary-300">
                                <span>2</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full relative flex pt-1">
                        <span class="text-primary text-sm block w-1/2 text-right pr-8">Luogo e data</span>                       
                        <span class="text-primary text-sm block w-1/2 pl-11">I tuoi dati</span>
                    </div>
                </div>                         
                
                <hr class="!mt-4" />

                <div class="px-6 xl:px-8">
                    <h3 class="text-dark text-2xl xl:text-1.5xl font-semibold w-full text-center">
                        A quali ambienti sei interessato?
                    </h3>
                    <p class="text-customGray-paragraphs text-base w-full col-span-2 text-center">Puoi selezionarne più di uno</p>
                    <div class="w-full flex flex-col relative bg-neutral-100 rounded-md mt-3">
                        <select name="environments" id="environments" class="pt-6 px-4 border !border-gray-200 focus:!bg-white focus:!ring-1 focus:!border-primary-300 focus:!ring-primary-300 rounded-lg bg-transparent outline-none h-[50px] xl:h-[55px] text-dark text-lg lg:text-base peer appearance-none">                               
                            <option value="ambiente 1">Ambiente 1</option>
                            <option value="ambiente 2">Ambiente 2</option>
                            <option value="ambiente 3">Ambiente 3</option>
                            <option value="ambiente 4">Ambiente 4</option>
                            <option value="ambiente 5">Ambiente 5</option>
                            <option value="ambiente 6">Ambiente 6</option>
                        </select>                           
                        <label class="text-customGray-placeholder absolute left-4 pointer-events-none !text-xxs !top-2.5 translate-y-0 uppercase peer-placeholder-shown:normal-case peer-placeholder-shown:text-base peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:text-customGray-placeholder transition-all w-full text-left">Ambienti</label>
                    </div> 
                </div>

                <div class="px-6 xl:px-8">
                    <h3 class="text-dark text-2xl xl:text-1.5xl font-semibold w-full text-center mb-2">
                        I tuoi dati
                    </h3>
                    <p class="text-customGray-paragraphs text-base w-full col-span-2 text-center mb-6 !leading-tight">Ti contatteremo per confermare il tuo appuntamento</p>
                    <div class="w-full relative space-y-5">
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
                        <div class="col-span-2 relative w-full block">                               
                            <div class="w-full flex flex-col relative bg-neutral-100 rounded-md">
                                <textarea name="product-problem" class="pt-6 px-4 border h-30 !border-gray-200 focus:!bg-white focus:!ring-1 focus:!border-primary-300 focus:!ring-primary-300 rounded-lg bg-transparent outline-none text-dark text-lg lg:text-base peer" placeholder=" "></textarea>
                                <label class="text-customGray-placeholder text-xxs absolute left-4 top-4 uppercase pointer-events-none peer-focus:!text-xxs peer-focus:!top-2.5 peer-focus:translate-y-0 peer-focus:uppercase peer-placeholder-shown:normal-case peer-placeholder-shown:text-base peer-placeholder-shown:text-customGray-placeholder transition-all w-full text-left">Note</label>
                            </div>
                            <!-- <span class="bg-red-400 relative -mt-1 rounded-b-md text-white text-xxs uppercase block w-full px-2 py-0.5">
                                Il campo è richiesto
                            </span> -->
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
                            Invia richiesta
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

            new Selectr('#environments', {
                searchable: false,
                multiple: true,
                customClass: 'select-css',
                placeholder: 'Seleziona un\'ambiente'
            });

            /* */

            document.querySelector('#goToStep2').addEventListener('click', () => {

                document.querySelector('.popup-content-first').classList.add('hidden')
                document.querySelector('.popup-content-second').classList.remove('hidden')

            })

            let types = {
                negozio: 'Appuntamento in negozio',
                online: 'Videoconferenza online',
                telefono: 'Consulenza telefonico'
            }

            document.querySelectorAll('.selector').forEach(el => {
                el.addEventListener('click', () => {
                    document.querySelector('#appointment-popup').classList.remove('opacity-0', 'pointer-events-none')
                    document.querySelector('body').classList.add('overflow-hidden')

                    let type = types[el.dataset.type]

                    document.querySelector('[name="type"]').value = type
                    document.querySelectorAll('.popup-title').forEach(el => {
                        el.innerHTML = type
                    })                    
                })
            })

            document.querySelectorAll('.popup-close').forEach(el => {
                el.addEventListener('click', () => {
                    document.querySelector('#appointment-popup').classList.add('opacity-0', 'pointer-events-none')
                    document.querySelector('body').classList.remove('overflow-hidden')
                    setTimeout(() => {
                        document.querySelector('.popup-content-first').classList.remove('hidden')
                        document.querySelector('.popup-content-second').classList.add('hidden')
                    }, 400)
                    
                })
            })

        })

    </script>


<?php 
    include './layouts/partials/search-mobile.php';
    include './layouts/partials/footer.php';
?>

