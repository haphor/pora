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
            url: "wait.php",
            data: $(this).serialize(), // get all form field value in serialize form
            success: function(response) {
                $("#show_message").html(response).fadeIn();
                $("#wait-form").fadeOut();
            }
        });
    });
    return false;
});