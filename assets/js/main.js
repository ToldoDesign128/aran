//main.js

//Hamburger menu
jQuery(".hamburger").click(function () {
  jQuery(".hamburger").toggleClass("is-active");
  jQuery("#menu-mobile").toggleClass("open");
});

//Accordion FAQ
jQuery('.accordion__icon').click(function () {
  var risposta = jQuery(this).closest('.accordion').find('.accordion__risposta');
  var pulsante = jQuery(this).closest('.accordion').find('.accordion__icon');

  risposta.toggleClass('open-panel');
  pulsante.toggleClass('pulsante-active');

  jQuery('.accordion__risposta').not(risposta).removeClass('open-panel');
});

//Splide
var splide = new Splide('.splide', {
  type: 'loop',
  padding: '5rem',
  focus: 'center',
  trimSpace: false,
  gap: 300,
});
var bar = splide.root.querySelector('.my-carousel-progress-bar');

// Updates the bar width whenever the carousel moves:
splide.on('mounted move', function () {
  var end = splide.Components.Controller.getEnd() + 1;
  var rate = Math.min((splide.index + 1) / end, 1);
  bar.style.width = String(100 * rate) + '%';
});

splide.mount();
