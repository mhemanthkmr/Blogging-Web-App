<?php

$host = "localhost";
$username = "mhemanthkmr";
$password = "hemanth123";
$database = "phpcrud";

$con = mysqli_connect("$host","$username","$password","$database");

if($con)
{
    header("Location: ../errors/error.php");
    die();
}

?>
