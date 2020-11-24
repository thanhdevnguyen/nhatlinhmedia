var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

$(document).ready(function () {
    // animation when click arrow down
    $('.arrow.down a, .arrow.up a').click(function (e) {
        e.preventDefault();
        let id = $(this).attr('href');
        $('html, body').stop().animate({
            scrollTop: $(id).offset().top
        }, 1000);
    });

    // Menu
    $('#menuToggle').click(function () {
        $('#menu').addClass('open');
        if ( w < 769) {
            $('body').addClass('fix');
        }

    });
    $('#close-menu').click(function () {
        $('#menu').removeClass('open');
        if ( w < 769) {
            $('body').removeClass('fix');
        }
    });

    // arrow back
    $('.arrow.back').on('click', function(e){
        e.preventDefault();
        window.history.back();
    });

    $('video').after('<span class="ctrl-icon play-icon"><i class="fa fa-play" aria-hidden="true"></i></span>' +
      '<span style="display: none" class="ctrl-icon stop-icon"><i class="fa fa-times" aria-hidden="true"></i></span>')

    // custom control video
    let video = document.querySelectorAll('video');
    for (let i = 0; i < video.length; i++) {
        video[i].addEventListener('ended', function (e) {
            $(this).next('.play-icon').show();
            $(this).closest('.video').find('.stop-icon').hide();
        });

        video[i].addEventListener('paused', function (e) {
            alert(432);
            $(this).next('.play-icon').show();
            $(this).closest('.video').find('.stop-icon').hide();
        });
    }
});

/*customer control video html5*/
jQuery(function ($) {
    $('video').each(function () {
        let player = this;
        let play = $(player).next('.play-icon');
        let stop = $(player).closest('.video').find('.stop-icon');
        $(play).click(function () {
            let stop_icon = $(this).next('.stop-icon');
            $( player)[0].play();
            $(this).hide();
            console.log(stop_icon);
            $(stop_icon).show();
        });

        $(stop).click(function () {
            let play_icon = $(this).prev('.play-icon');
            $( player)[0].pause();
            $(this).hide();
            $(play_icon).show();
        });
    });
});