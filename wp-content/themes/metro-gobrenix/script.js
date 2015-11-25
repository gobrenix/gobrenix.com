var $ = jQuery;
$(document).ready(function() {
    window.gobrenix = window.gobrenix || {};
    gobrenix.isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (
                gobrenix.isMobile.Android() ||
                gobrenix.isMobile.BlackBerry() ||
                gobrenix.isMobile.iOS() ||
                gobrenix.isMobile.Opera() ||
                gobrenix.isMobile.Windows()
            );
        }
    };

    gobrenix.devices = {
        Mobile: function() {
            return !!(screen.width <= 768);
        }
    }

    if(gobrenix.isMobile.any() && gobrenix.devices.Mobile()) {
        $('header nav').append($('#topside .menu').find('a'));
    }

    $('.openmenuresp').click(function() {
		$('nav').slideToggle();
		var text = $(this).text() == 'Close Menu' ? 'Open Menu' : 'Close Menu';
		$(this).text(text);
	});
});
