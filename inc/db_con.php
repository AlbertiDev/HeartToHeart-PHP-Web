<?php 
ob_start();
session_start();
//databaza.php
$server	    = 'localhost';
$username	= 'root';
$password	= '';
$database	= 'myDB';

/* mysql_query ('SET NAMES utf8'); */
if(!mysql_connect($server, $username, $password))
{
 	exit('Ka problem gjate lidhjes me databaz');
}
if(!mysql_select_db($database))
{
 	exit('Nuk mund te selektohet databaza');
}
?>