$(document).ready(function() {
    $('.card').hide().fadeIn(1000);

    $(".btn-details").click(function() {
        let button = $(this);
        $(this).closest(".card").find(".details").slideToggle(function() {
            if ($(this).is(":visible")) {
                button.text("Hide Details")
                    .css("background-color", "#dc3545")
                    .css("border-color", "#dc3545");
            } else {
                button.text("Show Details")
                    .css("background-color", "#0d6efd")
                    .css("border-color", "#0d6efd");
            }
        });
    });
});