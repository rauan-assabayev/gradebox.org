<?php 
    require $_SERVER['DOCUMENT_ROOT']."/libs/php/redbean/rb.php";
	R::setup( 'mysql:host=localhost;dbname=gradebox','root', '' ); //for both mysql or mariaDB
	session_start();
?>