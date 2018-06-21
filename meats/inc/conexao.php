<?php
session_start();
$base_path = 'C:/Bitnami/wappstack-7.1.15-0/apache2/htdocs/meats/';
$base_url='http://localhost/meats/';
$conexao=pg_connect('host=localhost port=5432 dbname=meatsProject user=postgres password=senha5');
if(!$conexao){
	echo 'A conexao foi pra cucuia';
}
?>