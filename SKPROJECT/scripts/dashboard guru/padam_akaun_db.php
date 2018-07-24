<?php

  include('connection.php');

  $ID_PELAJAR =$_POST['R2C1'];

  if($ID_PELAJAR=='semua' or $ID_PELAJAR=='SEMUA' or $ID_PELAJAR=='Semua'){

  $sql1 = "TRUNCATE TABLE`CREDENTIALS` ; ";
  $sql2 = "TRUNCATE TABLE `JADUAL KOMPOSIT PENUH PELAJAR`; ";
  $sql3 = "TRUNCATE TABLE `PELAJAR`; ";
  $sql4 = "INSERT INTO `credentials` (`ID PELAJAR`, `NAMA PELAJAR`, `userid`, `password`) VALUES ('0', 'admin', 'admin', '123');";




if(mysqli_query($connect, $sql1)){

   $operation1 = 1; //Binary operator
}

if(mysqli_query($connect, $sql2)){

   $operation2 = 1; //Binary operator
}

if(mysqli_query($connect, $sql3)){

   $operation3 = 1; //Binary operator
}

if(mysqli_query($connect, $sql4)){

   $operation4 = 1; //Binary operator
}






if($operation1==1 and $operation2==1 and $operation3==1 and $operation4==1   ){
	header('Location: /SKPROJECT/scripts/dashboard guru/senarai ahli.html.php');
    
}




// Close connection

mysqli_close($connect);





  }


  if($ID_PELAJAR!='semua' or $ID_PELAJAR!='SEMUA' or $ID_PELAJAR!='Semua'){
  

  $sql1 = "DELETE  FROM `CREDENTIALS` WHERE `ID PELAJAR`='$ID_PELAJAR'; ";
  $sql2 = "DELETE  FROM `JADUAL KOMPOSIT PENUH PELAJAR` WHERE `ID PELAJAR`='$ID_PELAJAR'; ";
  $sql3 = "DELETE  FROM `PELAJAR` WHERE `ID PELAJAR`='$ID_PELAJAR'; ";



if(mysqli_query($connect, $sql1)){

   $operation1 = 1; //Binary operator
}

if(mysqli_query($connect, $sql2)){

   $operation2 = 1; //Binary operator
}

if(mysqli_query($connect, $sql3)){

   $operation3 = 1; //Binary operator
}





if($operation1==1 and $operation2==1 and $operation3==1   ){
	header('Location: /SKPROJECT/scripts/dashboard guru/senarai ahli.html.php');
    
}









 

// Close connection

mysqli_close($connect);
}

?>








   