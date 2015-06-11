$(document).ready(function() {
    if($(".button-collapse").length > 0) {
        $(".button-collapse").sideNav();
    }

    if($('textarea').length > 0) {
        $('textarea').addClass('materialize-textarea');
    }

    var makeButton = function() {
        $(this).addClass('btn waves-effect');
    };

    $('input[type=submit]').each(makeButton);
    $('.button').each(makeButton);
    $('.tribe-events-button').each(makeButton);
});
