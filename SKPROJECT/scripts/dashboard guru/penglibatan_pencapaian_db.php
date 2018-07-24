<?php  
include ('connection.php'); 


$ID = $_POST['R2C1'];
$PERTANDINGAN = $_POST['R2C3'];
$PERINGKAT = $_POST['R2C4'];
$PENCAPAIAN = $_POST['R2C5'];



switch ($PERINGKAT) {

   case 'A00':
  $nama_peringkat="-";
  $markah_peringkat = "0";
    break;

  case 'A01':
  $nama_peringkat="ANTARABANGSA";
  $markah_peringkat = "20";
    break;

  case 'A02':
   $nama_peringkat="KEBANGSAAN";
    $markah_peringkat = "17";
    break;

  case 'A03':
   $nama_peringkat="NEGERI";
    $markah_peringkat = "14";
    break;

  case 'A04':
   $nama_peringkat="DAERAH";
    $markah_peringkat = "11";
    break;

  case 'A05':
   $nama_peringkat="SEKOLAH";
    $markah_peringkat = "08";
    break;


}




  if ($PENCAPAIAN=='B00'){
  $nama_pencapaian="-";
  $markah_pencapaian = "0";
    
  }

  elseif ($PENCAPAIAN=='B01' and $nama_peringkat=='ANTARABANGSA'){
  $nama_pencapaian="JOHAN";
  $markah_pencapaian = "20";
    
  }

  elseif ($PENCAPAIAN=='B02' and $nama_peringkat=='ANTARABANGSA'){
    $nama_pencapaian=" NAIB JOHAN ";
    $markah_pencapaian = "19";
   
  }

  elseif ($PENCAPAIAN=='B03'and $nama_peringkat=='ANTARABANGSA'){
    $nama_pencapaian="KETIGA";
   $markah_pencapaian = "18";
    
  }

  elseif ($PENCAPAIAN=='B01'and $nama_peringkat=='KEBANGSAAN'){
   $nama_pencapaian="JOHAN";
   $markah_pencapaian = "17";
   
  }

  elseif ($PENCAPAIAN=='B02' and $nama_peringkat=='KEBANGSAAN'){
   $nama_pencapaian="NAIB JOHAN";
    $markah_pencapaian = "16";
    
  }


  elseif ($PENCAPAIAN=='B03'and $nama_peringkat=='KEBANGSAAN'){
    $nama_pencapaian="KETIGA";
   $markah_pencapaian = "15";
    
  }


  elseif ($PENCAPAIAN=='B01' and $nama_peringkat=='NEGERI'){
    $nama_pencapaian="JOHAN";
    $markah_pencapaian = "14";
    
  }


  elseif ($PENCAPAIAN=='B02'and $nama_peringkat=='NEGERI'){
    $nama_pencapaian="NAIB JOHAN";
   $markah_pencapaian = "13";
    
  }


  elseif ($PENCAPAIAN=='B03' and $nama_peringkat=='NEGERI'){
  $nama_pencapaian="KETIGA";
   $markah_pencapaian = "12";
    
  }


  elseif ($PENCAPAIAN=='B01' and $nama_peringkat=='DAERAH'){
    $nama_pencapaian="JOHAN";
   $markah_pencapaian = "11";
    
  }


  elseif ($PENCAPAIAN=='B02' and $nama_peringkat=='DAERAH'){
    $nama_pencapaian="NAIB JOHAN";
   $markah_pencapaian = "10";
    
  }


  elseif ($PENCAPAIAN=='B03' and $nama_peringkat=='DAERAH'){
    $nama_pencapaian="KETIGA";
    $markah_pencapaian = "9";
   
  }


  elseif ($PENCAPAIAN=='B01' and $nama_peringkat=='SEKOLAH'){
    $nama_pencapaian="JOHAN";
    $markah_pencapaian = "8";
    
  }


  elseif ($PENCAPAIAN=='B02' and $nama_peringkat=='SEKOLAH'){
    $nama_pencapaian="NAIB JOHAN";
   $markah_pencapaian = "7";
    
  }


  elseif ($PENCAPAIAN=='B03' and $nama_peringkat=='SEKOLAH'){
   $nama_pencapaian="KETIGA";
   $markah_pencapaian = "6";
    
  }
















$sql1 = "UPDATE `JADUAL KOMPOSIT PENUH PELAJAR` SET`PERTANDINGAN` = '$PERTANDINGAN', `KOD PENGLIBATAN` = '$PERINGKAT',`PENGLIBATAN`='$nama_peringkat',`MARKAH PENGLIBATAN`='$markah_peringkat', `KOD PENCAPAIAN` = '$PENCAPAIAN',`PENCAPAIAN`='$nama_pencapaian',`MARKAH PENCAPAIAN`='$markah_pencapaian', `PERTANDINGAN` = '$PERTANDINGAN' WHERE `ID PELAJAR` = '$ID';" ;
	




if(mysqli_query($connect, $sql1)){

   $operation1 = 1; //Binary operator
}



if($operation1==1 ){
	header('Location: /SKPROJECT/scripts/dashboard guru/penglibatan_pencapaian.html.php');
    
}




 

// Close connection

mysqli_close($connect);








?>