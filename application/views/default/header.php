<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>PlayOn</title>
    <link rel="stylesheet" type="text/css" href="<?= css_url('style.css') ?>"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="<?= js_url('jquery-3.1.0.js'); ?>" type="text/javascript"></script>
    <script src="<?= js_url('script.js'); ?>" type="text/javascript"></script>
</head>
<body>
<header>
    <div class="logo">
        <a href="/"> <img src="<?= img_url('logo.png') ?>">
            <h1>Play<b>ON</b></h1></a>
    </div>
    <nav>
        <a href="/">Турниры</a>
        <a href="/rules">Правила</a>
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
