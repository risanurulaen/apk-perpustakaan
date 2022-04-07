<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "perpus_risa";

$database = mysqli_connect($host,$username,$password,$database);

if(!$database){
	die("database tidak terhubung");
}