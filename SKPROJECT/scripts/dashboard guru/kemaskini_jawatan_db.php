<?php  
include ('connection.php'); 


$ID = $_POST['R2C1'];
$JAWATAN = $_POST['R2C2'];



switch ($JAWATAN) {
 
  case 'J01':
  $NAMA_JAWATAN = "PENGERUSI";
  $MARKAH_JAWATAN = "10";
  break;


  case 'J02':
  $NAMA_JAWATAN = "NAIB PENGERUSI";
  $MARKAH_JAWATAN = "8";
  break;

  
  case 'J03':
  $NAMA_JAWATAN = "BENDAHARI";
  $MARKAH_JAWATAN = "7";
  break;

  
  case 'J04':
  $NAMA_JAWATAN = "SETIAUSAHA";
  $MARKAH_JAWATAN = "6";
  break;

  
  case 'J05':
  $NAMA_JAWATAN = "AJK FORM 5";
  $MARKAH_JAWATAN = "5";
  break;

  
  case 'J06':
  $NAMA_JAWATAN = "AJK FORM 4";
  $MARKAH_JAWATAN = "4";
  break;

  
  case 'J07':
  $NAMA_JAWATAN = "AHLI BIASA";
  $MARKAH_JAWATAN = "2";
  break;

 

 



}






$sql = "UPDATE `JADUAL KOMPOSIT PENUH PELAJAR` SET `KOD JAWATAN` = '$JAWATAN' , `JAWATAN`='$NAMA_JAWATAN' ,`MARKAH JAWATAN` = '$MARKAH_JAWATAN' WHERE `ID PELAJAR` = '$ID';";

if(mysqli_query($connect, $sql)){

   $operation1 = 1; //Binary operator
}


if($operation1==1){
	header('Location: /SKPROJECT/scripts/dashboard guru/kemaskinijawatan.html.php');
    
}


 

// Close connection

mysqli_close($connect);







?>