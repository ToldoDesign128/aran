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
    'page-contatti.php',
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
        'light-grey-aran': '#EDEDED',
        'brown-aran': '#A19991',
      },
      spacing: {
        'custom': '48%',
        'custom-30': '48%',
      },
      aspectRatio: {
        '3/1': '3 / 1',
      },
  }
},
  plugins: [],
}

