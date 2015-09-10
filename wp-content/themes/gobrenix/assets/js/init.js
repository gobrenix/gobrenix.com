$(document).ready(function() {
    if($(".button-collapse").length > 0) {
        $(".button-collapse").sideNav();
    }

    if($('textarea').length > 0) {
        $('textarea').addClass('materialize-textarea');
    }
    
    [
        $('input[type=submit]'),
        $('.tribe-events-button')
        $('.button')
    ].forEach(function($btnNode) {
        $btnNode.each(function() {
            $(this).addClass('btn waves-effect');
        });
    });
});
