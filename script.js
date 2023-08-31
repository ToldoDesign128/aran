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
// ${form.value.location.code} è il codice delle location, dovrebbe darcelo axera = A0001
// ${form.value.consultancy} il tipo di consulenza, valori: [telefono, online, negozio]
// ${date} la data selezionata dall'utente in formato DD-MM-YYYY


let dateTomorrow = new Date();

document.addEventListener('DOMContentLoaded', () => {
    const options = {
        date: {
            today: dateTomorrow,
        },
    };
    
    const calendar = new VanillaCalendar('#calendar');
    calendar.init();
});




const shopID = 'A0001';
// let = serviceID = document.querySelector()


 jQuery.get(`https://casatuaitalia.it/BookingApi/booking.php?action=getAvilability&shop_id=${shopID}&service_id=1&date_selected=31-08-2023`, function (data) {

    let data2 = {"status":true,"data":["10:00","10:30","11:00","11:30","12:00","15:00","15:30","16:00","16:30","17:00","17:30","18:00","18:30","19:00","19:30"]}

    jQuery(".result").html(data);
    alert("Load was performed.");
    
});

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

    return [day, month, year ].join('-');
}
 
console.log(getNextDate(dateTomorrow));
