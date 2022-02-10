<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gent.sadiku";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
   