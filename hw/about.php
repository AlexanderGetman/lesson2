<?php

$name = 'Александр';
$age = 29;
$address = 'Владивосток';
$email = 'alexander_getman@mail.ru';
$aboutme = 'Контент-менеджер, киноман, меломан'
?>

<!DOCTYPE>
<html lang="ru">
  <head>
    <title><?= $name . ' – ' . $aboutme ?></title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
  </head>
  <body>
    <h1>Страница пользователя <?= $name ?></h1>
      <dl>
        <dt>Имя</dt>
        <dd><?= $name ?></dd>
        <dt>Возраст</dt>
        <dd><?= $age ?></dd>
        <dt>Адрес электронной почты</dt>
        <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
        <dt>Город</dt>
        <dd><?= $address ?></dd>
        <dt>О себе</dt>
        <dd><?= $aboutme ?></dd>
      </dl>
  </body>
</html>
