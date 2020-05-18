var seconds = document.getElementById('family_seconds');

var seconds_interval = setInterval(function() {
    var current_date = new Date().getTime() / 1000;
    var family_date = new Date(2018, 1, 26).getTime() / 1000;
    var differences = current_date - family_date;

    differences = Math.round(differences);

    seconds.innerText = differences;
}, 1);
