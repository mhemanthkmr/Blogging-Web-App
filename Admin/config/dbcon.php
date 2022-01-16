<?php

$host = "localhost";
$username = "mhemanthkmr";
$password = "hemanth123";
$database = "Blog";

$con = mysqli_connect("$host","$username","$password","$database");
// print_r($con);
if(!$con)
{
    header("Location: ../errors/404.html");
    die();
}
// echo "Connection Successfull";
?>
