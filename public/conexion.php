<?php

$link = pg_connect("host=localhost port=5432 password=ICInf-551 user=icinf5 dbname=icinf5");

if (!$link) {
	die ( ' Error al conectarse ' . pg_ErrorMessage($link));
}
?>