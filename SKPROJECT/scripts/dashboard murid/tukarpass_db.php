<?php  
include ('connection.php'); 


$ID_PELAJAR = $_POST['id'];
$NEW_USERNAME = $_POST['username'];
$NEW_PASSWORD = $_POST['password'];





$sql2 = "UPDATE `CREDENTIALS` SET `userid` = '$NEW_USERNAME',`password`='$NEW_PASSWORD'	 WHERE `ID PELAJAR` = '$ID_PELAJAR';";


if(mysqli_query($connect, $sql2)){

   $operation1 = 1; //Binary operator
}


if($operation1==1){
	header('Location: /SKPROJECT/scripts/dashboard murid/credentials.html.php');
    
}




    




?>