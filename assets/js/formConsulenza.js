// Passaggio a step 2
document.addEventListener('DOMContentLoaded', function() {
    var nextBtns = document.querySelectorAll('.nextBtn');

    nextBtns.forEach(function(nextBtn) {
        nextBtn.addEventListener('click', function() {
            var stepUno = document.getElementById('stepUnoConsulenza');
            var stepDue = document.getElementById('stepDueConsulenza');

            if(stepUno.classList.contains('flex')) {
                stepUno.classList.remove('flex');
                stepUno.classList.add('hidden');
            }

            if(stepDue.classList.contains('hidden')) {
                stepDue.classList.remove('hidden');
                stepDue.classList.add('flex');
            }
        });
    });
});


// Passaggio a step 3
document.addEventListener('DOMContentLoaded', function () {
    var nextBtn = document.querySelector('.nextBtnDue');

    nextBtn.addEventListener('click', function () {
        var stepUno = document.getElementById('stepDueConsulenza');
        var stepDue = document.getElementById('stepTreConsulenza');

        if (stepUno.classList.contains('flex')) {
            stepUno.classList.remove('flex');
            stepUno.classList.add('hidden');
        }
        
        if (stepDue.classList.contains('hidden')) {
            stepDue.classList.remove('hidden');
            stepDue.classList.add('flex');
        }

    });
});

// Button Step precedente
document.addEventListener('DOMContentLoaded', function () {
    var nextBtn = document.querySelector('.prevBtn');

    nextBtn.addEventListener('click', function () {
        var stepUno = document.getElementById('stepUnoConsulenza');
        var stepDue = document.getElementById('stepDueConsulenza');

        if (stepUno.classList.contains('hidden')) {
            stepUno.classList.remove('hidden');
            stepUno.classList.add('flex');
        }
        
        if (stepDue.classList.contains('flex')) {
            stepDue.classList.remove('flex');
            stepDue.classList.add('hidden');
        }

    });
});

// Button Step precedente
document.addEventListener('DOMContentLoaded', function () {
    var nextBtn = document.querySelector('.prevBtnDue');

    nextBtn.addEventListener('click', function () {
        var stepUno = document.getElementById('stepDueConsulenza');
        var stepDue = document.getElementById('stepTreConsulenza');

        if (stepUno.classList.contains('hidden')) {
            stepUno.classList.remove('hidden');
            stepUno.classList.add('flex');
        }
        
        if (stepDue.classList.contains('flex')) {
            stepDue.classList.remove('flex');
            stepDue.classList.add('hidden');
        }

    });
});


jQuery("#FormConsulenza").validate();
jQuery('select').multipleSelect();

let dateTomorrow = new Date();

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

    return [day, month, year].join('-');
}

// data in formato dd-mm-yy
let dateTomorrowCalendar = getNextDate(dateTomorrow);

// data in formato mm-dd-yy per vanilla calendar
function convertiFormatoData(data) {
    // Dividi la stringa di data in un array di stringhe
    var partiData = data.split('-');

    // Riorganizza le parti della data nel formato desiderato
    var dataConvertita = partiData[1] + '-' + partiData[0] + '-' + partiData[2];

    return dataConvertita;
}

dataCalendario = convertiFormatoData(dateTomorrowCalendar);

document.addEventListener('DOMContentLoaded', () => {
    const options = {
        actions: {
            clickDay(event, dates) {
                const selectedDate = dates;

                console.log(selectedDate);
            },
        },
        date: {
            today: new Date(dataCalendario),
        },
        settings: {
            range: {
                disablePast: true,
            },
            visibility: {
                theme: 'light',
            },
        },
        CSSClasses: {
            arrow: 'vanilla-calendar-arrow',
        }
    };


    const calendar = new VanillaCalendar('#calendar', options);
    calendar.init();
});


const shopID = 'A0001';
// let = serviceID = document.querySelector()

jQuery.get(`https://casatuaitalia.it/BookingApi/booking.php?action=getAvilability&shop_id=${shopID}&service_id=1&date_selected=31-08-2023`, function (data) {

    let data2 = {
        "status": true,
        "data": ["10:00", "10:30", "11:00", "11:30", "12:00", "15:00", "15:30", "16:00", "16:30", "17:00", "17:30", "18:00", "18:30", "19:00", "19:30"]
    }

    jQuery(".result").html(data);
    alert("Load was performed.");

});