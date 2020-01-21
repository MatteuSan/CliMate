<?php

$servername = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "climate_webapp";

$conn = mysqli_connect($servername, $dbUsername, $dbPass, $dbName);

if(!$conn) {
    die("Connection failed! ". mysqli_connect_error());
}