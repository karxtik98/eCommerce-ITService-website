<?php
$dbhost = "aniruddhaarunnarkhede16277.ipagemysql.com";
$dbuser = "anir";
$dbpass = "NeverMind@2021";
$dbname = "kaffeiene_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect");
}
?>