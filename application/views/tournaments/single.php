<script>
    $('div.tournament_info i.fa-arrow-right').click(function (event) {
        $(this).parent().animate({
            'opacity':'0'
        },300,function () {
            $(this).parent().remove();
        });
        setTimeout(function(){$('section.tournaments_list').removeClass('col-lg-6').addClass('col-lg-12')},500);
    });
</script>
<div class="tournament_info">
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
    <h3><?= $tournament['name'] ?></h3>
    <span>Участников: <b><?= $tournament['players'] ?>/<?= $tournament['max_players'] ?></b></span>
    <span>Тип турнира: <b><?= decode_type($tournament['type']) ?></b></span>
    <span>Дата проведения: <b><?= $tournament['date'] ?></b></span>
</div>
