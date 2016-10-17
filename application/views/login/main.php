<div class="registration">
    <div class="reg-image">
        <div>
            <h2>Еще нет <b>overwatch</b>?</h2>
            <p>Купи прямо сейчас на оффициальном сайте</p>
            <a href="https://playoverwatch.com/ru-ru/buy/" target="_blank">Приобрести</a>
        </div>
    </div>
    <form action="<?= base_url('login/registration') ?>" method="post">
        <h3>Быстрая регистрация</h3>
        <label for="login">Придумайте логин</label>
        <input required type="text" name="login" placeholder="Логин">
        <label for="login">Придумайте пароль</label>
        <input required type="password" name="password" placeholder="Пароль">
        <label for="login">Повторите пароль</label>
        <input required type="password" name="repeatpass" placeholder="Пароль">
        <label for="login">Введите e-mail</label>
        <input required type="email" name="email" placeholder="E-mail">

        <input type="submit" value="Регистрация">
    </form>
    <form action="<?= base_url('login/log_in') ?>" method="post">
        <h3>Вход</h3>
        <label for="login">Введите логин</label>
        <input required type="text" name="login" placeholder="Логин">
        <label for="login">Введите пароль</label>
        <input required type="password" name="password" placeholder="Пароль">
        <input type="submit" name="gologin" value="Вход">
    </form>
</div>
<?php if (isset($status) && $status != 'ok'): ?>
    <div class="popup"></div>
    <div class="popup-cont message">
        <i class="fa fa-exclamation" aria-hidden="true"></i>
<span>
    <?= $status ?>
</span>
        <a href="">Продолжить</a>
    </div>
<?php endif; ?>

