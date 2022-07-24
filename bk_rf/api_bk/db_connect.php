<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fridge";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    echo "Connection failed";
} else
{
    //echo "Connected successfully";
}


?>