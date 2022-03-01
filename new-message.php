<?php
include "php\detabase.php";
$esm= $_POST["neme"];
$es=$_POST["email"];
$e=$_POST["mobile"];
mysqli_query($connection, "INSERT INTO messages(name,email,mobile) VALUES('$esm','$es','$e')");
header("location:e24.php");
?>