const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

let countDown = new Date('Jan 26, 2018 00:00:00').getTime(),
    x = setInterval(function() {

        let now = new Date().getTime(),
            distance = now - countDown;

        document.getElementById('days').innerText = Math.floor(distance / (day)),
            document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        //if (distance < 0) {
        //  clearInterval(x);
        //  'IT'S MY BIRTHDAY!;
        //}

    }, second)

/*var seconds_interval = setInterval(function() {
    var current_date = new Date().getTime() / 1000;
    var family_date = new Date(2018, 1, 26).getTime() / 1000;
    var differences = current_date - family_date;

    differences = Math.round(differences);

    differences = new Date(differences);

    seconds.innerText = differences;
}, 1);*/
