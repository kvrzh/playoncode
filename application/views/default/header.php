<body>
<header>
    <div class="logo">
        <a href="/"> <img src="<?= img_url('logo.png') ?>">
            <h1>Play<b>ON</b></h1></a>
    </div>
    <nav>
        <a href="<?= base_url('tournaments') ?>">Турниры</a>
        <a href="<?= base_url('rules') ?>">Правила</a>
    </nav>
    <div class="search">
        <form method="post">

            <input name="search" placeholder=" Поиск по сайту" type="search">
            <input type="submit" value="" name="searchgo">

        </form>
    </div>

</header>
<body>
<div class="content">
