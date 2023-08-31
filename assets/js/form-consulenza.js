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
