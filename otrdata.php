<?php

$hostName = "localhost";
$dbUser= "root";
$dbpassword = "";
$dbName ="otr registration";
$conn = mysqli_connect($hostName, $dbUser, $dbpassword , $dbName);
if (!$conn) { 
    die("connection error;");
}
