<?php  
include ('connection.php'); 


$ID = $_POST['ID'];
$NAMA_PELAJAR = $_POST['nama'];
$NO_IC = $_POST['IC'];
$UMUR = $_POST['age'];
$JANTINA = $_POST['Jantina'];
$TINGKATAN = $_POST['Tingkatan'];











$sql1 = "UPDATE `PELAJAR` SET `NAMA PELAJAR` = '$NAMA_PELAJAR',`UMUR`='$UMUR',`JANTINA`='$JANTINA',`NO IC`='$NO_IC',`NAMA TINGKATAN`='$TINGKATAN' WHERE `ID PELAJAR` = '$ID';";


if(mysqli_query($connect, $sql1)){

   $operation1 = 1; //Binary operator
}



$sql2 = "UPDATE `CREDENTIALS` SET `NAMA PELAJAR` = '$NAMA_PELAJAR'  WHERE `ID PELAJAR` = '$ID';";


if(mysqli_query($connect, $sql2)){

   $operation2 = 1; //Binary operator
}

$sql3 = "UPDATE `JADUAL KOMPOSIT PENUH PELAJAR` SET `NAMA PELAJAR` = '$NAMA_PELAJAR' ,`KELAS`='$TINGKATAN' WHERE `ID PELAJAR` = '$ID';";



if(mysqli_query($connect, $sql3)){

   $operation3 = 1; //Binary operator
}

if($operation1==1 and $operation2==1 and $operation3==1){
	header('Location:  /SKPROJECT/scripts/dashboard murid/senarai ahli.html.php');
    
}

 

// Close connection

mysqli_close($connect);

?>