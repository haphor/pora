// Set the date we're counting down to
var countDownDate = new Date("Feb 14, 2022 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="timer"
    document.getElementById("launch_countdown").innerHTML =
        '<div><span class="timer-indicator">' + days + '</span><span class="timer-label">Days</span></div> :' +
        '<div><span class="timer-indicator">' + hours + '</span><span class="timer-label">Hours</span></div> :' +
        '<div><span class="timer-indicator">' + minutes + '</span><span class="timer-label">Minutes</span></div> :' +
        '<div><span class="timer-indicator">' + seconds + '</span><span class="timer-label">Seconds</span></div>';

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("launch_countdown").innerHTML = "WE ARE NOW LIVE";
    }
}, 1000);

$(document).on('click', 'a[href^="#"]', function(event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
});



$(document).ready(function($) {
    // hide messages 
    $("#error").hide();
    $("#show_message").hide();
    // on submit...
    $('#wait-form').submit(function(e) {
        e.preventDefault();
        $("#error").hide();
        // email required
        var email = $("input#userEmail").val();
        if (email == "") {
            $("#error").fadeIn().text("Email required");
            $("input#userEmail").focus();
            return false;
        }
        // ajax
        $.ajax({
            type: "POST",
            url: "inc/wait.php",
            data: $(this).serialize(), // get all form field value in serialize form
            success: function(response) {
                $("#show_message").html(response).fadeIn();
                $("#wait-form").fadeOut();
            }
        });
    });
    return false;
});
$(document).ready(function($) {
    // hide messages 
    $("#footer_error").hide();
    $("#footer_show_message").hide();
    // on submit...
    $('#join-form').submit(function(e) {
        e.preventDefault();
        $("#footer_error").hide();
        // email required
        var email = $("input#footerUserEmail").val();
        if (email == "") {
            $("#footer_error").fadeIn().text("Email required");
            $("input#footerUserEmail").focus();
            return false;
        }
        // ajax
        $.ajax({
            type: "POST",
            url: "inc/wait.php",
            data: $(this).serialize(), // get all form field value in serialize form
            success: function(response) {
                $("#footer_show_message").html(response).fadeIn();
                $("#join-form").fadeOut();
            }
        });
    });
    return false;
});