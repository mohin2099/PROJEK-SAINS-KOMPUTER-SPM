<?php
  $host = '127.0.0.1';
  $user = 'root';             
  $password ='';                 // password biarkan kosong
  $database = 'SKPROJECT';     // masukkan nama database

  $connect = mysqli_connect($host, $user, $password, $database)
  or die('Connecting to MySQL failed');

  $sql2 = "INSERT INTO PELAJAR (ID PELAJAR, NAMA PELAJAR) VALUES ('2', 'fdfd')";
  
  mysqli_query($connect,$sql2);
  //echo 'database connected<br><br>';

  



?>