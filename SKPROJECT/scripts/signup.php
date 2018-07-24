<?php  
include ('connection.php'); 


$Nama = $_POST['nama'];
$IC = $_POST['IC'];
$Username = $_POST['user_name'];
$Password = $_POST['user_password'];
$Umur = $_POST['age'];
$Jantina = $_POST['Jantina'];
$KodTing = $_POST['Tingkatan'];
$NamaTing = "";


switch ($KodTing) {
	case 'T401':
	$NamaTing="4PD";
		break;

	case 'T402':
	$NamaTing="4PT";
		break;

	case 'T403':
	$NamaTing="4PS";
		break;

	case 'T404':
	$NamaTing="4CM";
		break;

	case 'T501':
	$NamaTing="5PD";
		break;

	case 'T502':
	$NamaTing="5PT";
		break;

	case 'T503':
	$NamaTing="5PS";
		break;

	case 'T504':
	$NamaTing="5CM";
		break;
	
	

}

 $sql1 = "Select count(1) FROM `CREDENTIALS`";
 $result = mysqli_query($connect, $sql1);


$row = mysqli_fetch_array($result);

$count = $row[0];






$sql2 = "INSERT INTO `PELAJAR` (`ID PELAJAR`, `NAMA PELAJAR`, `UMUR`, `JANTINA`, `NO IC`,`NAMA TINGKATAN`) VALUES ('$count', '$Nama', '$Umur', '$Jantina', '$IC', '$NamaTing');";


if(mysqli_query($connect, $sql2)){

   $operation1 = 1; //Binary operator
}



$sql3 = "INSERT INTO `CREDENTIALS` (`userid`,`password`,`ID PELAJAR`,`NAMA PELAJAR`) VALUES ('$Username','$Password','$count','$Nama');";


if(mysqli_query($connect, $sql3)){

   $operation2 = 1; //Binary operator
}

$sql4 = "INSERT INTO `JADUAL KOMPOSIT PENUH PELAJAR` (`ID PELAJAR`,`NAMA PELAJAR`,`KELAS`) VALUES ('$count','$Nama','$NamaTing');";

if(mysqli_query($connect, $sql4)){

   $operation3 = 1; //Binary operator
}







if($operation1==1 and $operation2==1 and $operation3==1 ){

echo' <script type=text/javascript>

alert ("Daftar masuk Berjaya")
window.location.assign("/SKPROJECT/scripts/login.html")
</script>';
	


}

else{

echo' <script type=text/javascript>

alert ("Sila masukkan data yang betul")
window.location.assign("/SKPROJECT/scripts/signup.html")
</script>';

	

        
    }

 

// Close connection

mysqli_close($connect);

?>
