<?php 
session_start();

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'demo';

$db = mysqli_connect($host, $username, $password, $db_name);
?>