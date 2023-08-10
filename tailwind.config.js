/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    'header.php',
    'footer.php',
    'home.php',
    'front-page.php',
    'index.php',
    'page.php',
    'page-complementi.php',
    'page-living.php',
    'page-offerte.php',
    'page-azienda.php',
    'page-catalogo.php',
    'page-consulenza.php',
    'single.php',
  ],
  theme: {
      fontFamily: {
        'serif': ['Bodoni Moda'],
    },
    extend: {
      colors: {
        'dark-aran': '#1D1D1B',
        'grey-aran': '#949494',
        'light-grey-aran': '#949494',
        'dark-aran': '#1D1D1B',
        'brown-aran': '#A19991',
      },
  }
},
  plugins: [],
}

