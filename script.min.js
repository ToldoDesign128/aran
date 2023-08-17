//main.js

//Hamburger menu
jQuery(".hamburger").click(function () {
  jQuery(".hamburger").toggleClass("is-active");
  jQuery("#menu-mobile").toggleClass("open");
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
