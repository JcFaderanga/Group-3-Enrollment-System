<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_enrollment";

if(!$connections = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>