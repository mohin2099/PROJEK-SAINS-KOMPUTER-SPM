<?php  
include ('connection.php'); 


$ID = $_POST['R2C1'];
$KEHADIRAN = $_POST['R2C2'];







$sql = "UPDATE `JADUAL KOMPOSIT PENUH PELAJAR` SET `KEHADIRAN` = '$KEHADIRAN' WHERE `ID PELAJAR` = '$ID';";

if(mysqli_query($connect, $sql)){

   $operation1 = 1; //Binary operator
}


if($operation1==1){
	header('Location: /SKPROJECT/scripts/dashboard guru/kehadiran.html.php');
    
}



// Close connection

mysqli_close($connect);

?>






?>