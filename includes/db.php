<?php

$connection = mysqli_connect('127.0.0.1', 'root', '', 'users');

if ( $connection == false ) 
{
	echo "Не удалось";
	echo mysqli_connect_error();
	exit();
}