<?php 
include "database.php";

  mysqli_query($connection,"DELETE FROM contacts");

  header("Location e24.php");

?>