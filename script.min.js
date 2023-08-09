//main.js

//Splide

var splide = new Splide(".splide", {
  type: "loop",
  perPage: 3,
  breakpoints: {
    1200: { perPage: 2 },
    640: { perPage: 1 },
  },
  focus: 0,
  omitEnd: true,
});

splide.mount();