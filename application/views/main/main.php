<div class="main-page">
    <div class="main-hero slide" id="title">
        <blockquote>"Можно отказаться от своего тела. Но от чести - никогда!" © Гэндзи</blockquote>
    </div>
    <p>Создавай свою команду и начинай выигрывать прямо сейчас</p>
    <a href="/">Создать команду</a>
</div>
<?php if ($first_time): ?>
    <div class="popup"></div>
    <div class="popup-cont">
        <h1>Приветствуем на сайте <span>PlayON</span></h1>
    <span>
        Наш сайт создан с целью проведения бесплатных онлайн турниров по игре <b>Overwatch</b>.
    </span>
        <section class="firstsect">
            <h2>Одиночная игра</h2>
            <p><b>СЧИТАЕШЬ ЧТО В ТВОИХ РУКАХ ГЕРОЙ СТАНОВИТЬСЯ НЕПОБЕДИМЫМ? ЗАЙДИ И ДОКАЖИ ЭТО!</b>
                Учавствуй на турнирах, кидай вызовы другим игрокам, покажи что твой личный скилл выше.
                Все твои победы будут записаны в твоей личном кабинете и каждый сможет их увидеть.
                Впиши свое имя как лучшего соло игрока в Зал Славы нашего сайта!

            </p>
            <i class="fa fa-user fa-fw" aria-hidden="true"></i>
        </section>
        <section class="secondsect">
            <h2>Командная игра</h2>
            <i class="fa fa-users fa-fw" aria-hidden="true"></i>
            <p><b>ЛЮБИШЬ ИГРАТЬ С ДРУЗЬЯМИ? СОЗДАЙ КОМАНДУ, СТАНЬТЕ ОДНИМ ЦЕЛЫМ И РАЗДЕЛИТЕ РАДОСТЬ ПОБЕДЫ ВМЕСТЕ.</b>
                Придумывайте тактики, учавствуйте и побеждайте на турнирах, становитесь ближе к професиональному
                киберспорту прямо сейчаc.
            </p>
        </section>
        <i class="fa fa-times" id="popup-close" aria-hidden="true"></i>
        <div class="popup-button">
            <a href="/login">Войти</a>

            <a href="/registration" style="
    background: #f39c12;
    color: #fff;
    border-color: #f39c12;
    ">Зарегестрироваться</a>

        </div>
    </div>
<?php endif; ?>