<?php
$sitename = "http://ваш домен.ru";
$link = mysql_connect("localhost", "Пользователь БД", "Пароль от БД");
$db_selected = mysql_select_db('Имя базы данных', $link);
mysql_query("SET NAMES utf8");

function fetchinfo($rowname,$tablename,$finder,$findervalue) {
	if($finder == "1") $result = mysql_query("SELECT $rowname FROM $tablename");
	else $result = mysql_query("SELECT $rowname FROM $tablename WHERE `$finder`='$findervalue'");
	$row = mysql_fetch_assoc($result);
	return $row[$rowname];
}
?>