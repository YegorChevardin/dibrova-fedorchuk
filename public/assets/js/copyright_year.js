var copyright_year = document.getElementById('copyright_year');

var check_year = setInterval(function() {
    var current_year = new Date().getFullYear();

    copyright_year.innerText = current_year;
}, 1000);
