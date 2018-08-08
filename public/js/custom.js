$('nav a, #down').click(function (e) {
  e.preventDefault();
  var id = $(this).attr('href');
  targetOffset = $(id).offset().top;

  $('html, body').animate({
    scrollTop: targetOffset
  }, 500);


});

// Set the date we're counting down to
var countDownDate = new Date("October 27, 2018 17:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("countdown").innerHTML =
    "<div class='countdown'>" +
    "<div><div>" + days + "</div><div>Dias</div></div>" +
    "<div><div>" + hours + "</div><div>Horas</div></div>" +
    "<div><div>" + minutes + "</div><div>Minutos</div></div>" +
    "<div><div>" + seconds + "</div><div>Segundos</div></div>" +
    "</div>";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "É HOJE";
  }
}, 1000);