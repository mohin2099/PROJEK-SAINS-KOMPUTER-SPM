<?php  
include ('connection.php'); 


$ID = 'admin';
$PASSWORD = $_POST['user_password'];




$sql = "UPDATE `CREDENTIALS` SET `password` = '$PASSWORD' WHERE `userid` = 'admin';
";

if(mysqli_query($connect, $sql)){

   $operation1 = 1; //Binary operator
}


if($operation1==1){
	header('Location: /SKPROJECT/scripts/dashboard guru/credentials.html.php');
    
}


 

// Close connection

mysqli_close($connect);

?>















