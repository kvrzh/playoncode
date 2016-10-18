/**
 * Created by Anton on 07.09.2016.
 */

$(document).ready(function () {


    $('.message a').click(function (event) {
        event.preventDefault();
        $('.popup,.popup-cont')
            .fadeOut(500);
    });

    $('.popup, .popup-cont')
        .fadeIn(1000);
    $('.popup,#popup-close').click(function () {
        $('.popup,.popup-cont')
            .fadeOut(500);
    });

    var i = $('.firstsect p').outerHeight(true);
    var j = $('.secondsect p').outerHeight(true);
    $('.firstsect i').css('line-height', i + 'px');
    $('.secondsect i').css('line-height', j + 'px');

    $('.tournaments table button').click(function (event) {
        event.preventDefault();
        if ($('.single_tournament').length <= 0) {
            $('.tournaments section').removeClass('col-lg-12').addClass('col-lg-6');
            setTimeout(function () {
                loadTournament();
            }, 500);
        } else {
            $('.single_tournament').remove();

            setTimeout(function () {
                loadTournament();
            }, 500);
        }
    });


});


function loadTournament() {
    $('.tournaments').append('<section class="single_tournament col-lg-6"><i class="fa fa-spinner fa-spin" aria-hidden="true"></i></section>');
    $('section.single_tournament').load('tournaments/single', function () {
        $('div.tournament_info').animate({
            'opacity': '1'
        }, 'slow');
    });

}
