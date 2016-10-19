<script>
    $('div.tournament_info i').click(function (event) {
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
    <h3>wqwdqdqwdqwqdwdqw</h3>
    <?=$test ?>
    <?=$limit ?>
</div>
