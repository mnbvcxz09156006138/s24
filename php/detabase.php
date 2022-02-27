<?php
 $connection = mysqli_connect("localhost","root","","happy-tamilyy");

 mysqli_query($connection,"SET CHARACTER SET utf8");
 
 if(mysqli_connect_errno() == 0)
 {
    // print(" همه چی آرومه ما چقدر خوشبختیم");
 }
 else
 {
     print("خطایی رخ داد");
 }

?>