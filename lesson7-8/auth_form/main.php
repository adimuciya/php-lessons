<?php
session_start();
$login = $_SESSION['login'];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <a href="#">Страница 1</a>
    <a href="#">Страница 2</a>

    <? if($login): ?> <!-- если пользователь авторизован -->
    <a href="logout.php">Выйти</a> <!--отображаем данную строчку-->
    <? else: ?> <!-- в противном случае -->
    <a id="open_modal">Войти</a> <!--отображаем данную строчку-->
    <? endif; ?> <!-- заканчиваем if -->
</nav>

<!--модальное окно-->
<div class="modal">

    <p id="errors"></p>

    <form action="formHandler.php" name="auth_form" method="post">
        <p><input class="validate" type="text" name="login" placeholder="логин"></p>
        <p><input class="validate" type="password" name="password" placeholder="пароль"></p>
        <p>
            <input type="submit" value="Отправить">
            <input id="cancel" type="button" value="Отмена">
        </p>
    </form>

</div>

<h3>Страница доступна всем пользователям</h3>
<!--null /преобразуется к/ false /! меняет false на/ true-->
<!--qwerty /преобразуется к/ true /! меняет true на/ false-->
<!--подключать только для неавторизованных пользователей-->
<? if (!$login): ?>
  <script src="js/form.js"></script>
<? endif; ?>

</body>
</html>