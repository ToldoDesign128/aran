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


var elms = document.getElementsByClassName( '#slider-base' );

for ( var i = 0; i < elms.length; i++ ) {
  new Splide( elms[ i ] ,{
    type: 'loop',
  padding: '5rem',
  focus: 'center',
  trimSpace: false,
  gap: 300,
  breakpoints: {
    1024: { padding: '1.2rem', gap: 10 },
  },
  } ).mount();
}

var bar = sliderUno.root.querySelector('.my-slider-progress-bar');

// Updates the bar width whenever the carousel moves:
sliderUno.on('mounted move', function () {
  var end = sliderUno.Components.Controller.getEnd() + 1;
  var rate = Math.min((sliderUno.index + 1) / end, 1);
  bar.style.width = String(100 * rate) + '%';
});