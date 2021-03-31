<!-- Connecting to database -->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "php_sem4";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    die("Error!!! ...".mysqli_connect_error());
}





?>