

// Set the date we're counting down to
var countDownDate = new Date("june 5,2020 00:00:00").getTime();

// Update the count down every 1 second
var xx = setInterval(function () {

    // Get today's date and time
    var nowx = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - nowx;

    // Time calculations for days, hours, minutes and seconds
    var dayx = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hourx = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutex = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var secondx = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demotimer").innerHTML = dayx + "<span style='color:orange;'> days</span> " + hourx + "<span style='color:orange;'>hrs </span>"
        + minutex + "<span style='color:orange;'>mins </span>" + secondx + "<span style='color:orange;'>s </span";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(xx);
        document.getElementById("demotimer").innerHTML = "";
    }
}, 1000);


var count = new Date('june 5,2020 00:00:00').getTime();
var x = setInterval(function () {
    var now = new Date().getTime();
    var d = count - now;
    var days = Math.floor(d / (1000 * 60 * 60 * 24));
    var hours = Math.floor((d % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((d % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((d % (1000 * 60)) / 1000);
    document.getElementById('days').innerHTML = days;
    document.getElementById('hours').innerHTML = hours;
    document.getElementById('minutes').innerHTML = minutes;
    document.getElementById('seconds').innerHTML = seconds;
}, 1000);