<!DOCTYPE html>
<html>
<head>
	<title>Панель Администратора</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php

include('includes/db.php');

$login = $_GET['login'];
$password = $_GET['password'];


/*
echo "Ваш логин: " . $_GET['login'] . '<br>';
echo "Ваш пароль: " . $_GET['password'];
*/

$count = mysqli_query($connection, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");

if ( mysqli_num_rows($count) == 0 )
{	
	echo "<center>";
	echo "<h1>Ошибка 404</h1>";
	echo "<br/>";
	echo "<h1 id='Text'>Извините, но такого аккаунта нет.</h1>";
	echo "</center>";
} else
{	
	echo "<center>";
	echo '<h3>Вы успешно вошли как Администратор:'. $login . '<h3/>';
	echo '<h3 id="test">Добро пожаловать, ' . $login . '!</h3>';
	echo date('d, m, Y');
	echo "<br/>";
	echo "<h2 id='Text'>Пока мы ещё делаем - панель Администратора сайта,<br> пишите в дискорд.<br> ГА Программисту или vk</h2>";
	echo "<br/>";
	echo "<hr>";
	echo "<a id='otpr' href='https://vk.com/id688104234'>Vk</a><br/>";
	echo "<a id='otpr' href='https://discord.gg/zvPGyT4Q'>Discord</a>";
	echo "</center>";
}
?>
</body>
</html>