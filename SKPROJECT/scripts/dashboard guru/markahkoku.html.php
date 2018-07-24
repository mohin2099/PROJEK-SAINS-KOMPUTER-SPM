<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">

  <title>DashBoard Guru</title>

  <style type="text/css">
    
    header, footer {
    padding: 0.5em;
    color: white;
    background-color:blue;
    clear: left;
    text-align: center;
    position: absolute; 
    top:0px;
    left:0px; 
    width:1336px;
    height:150px;
}

body{
  background-color:   #DCDCDC}

.Title{

  position: absolute;
  left: 265px;

}

.Logo{

  position: absolute;
  left: -3px;
}

.computer_image{

  position: absolute;
  right: 3px;
}

.sidenavleft{

  position: absolute;
  left:0px;
  top:166px;

}

.sidenavright{

  position:absolute;
  right:0px;
  top:166px;
}


 .button1{

   position: absolute;
  left: 7px;
  top: 190px;
}
 
 .button2{
  position: absolute;
  left: 7px;
  top :300px;

 }

 .button3{
  position: absolute;
  left: 7px;
  top:410px;

 }

 .button4{
  position: absolute;
  left: 7px;
  top:520px;
 }

 .button5{
  position: absolute;
  left: 7px;
  top:640px;
 }

 .button6{
  position: absolute;
  left: 7px;
  top:760px;
 }

 .button7{
  position: absolute;
  left: 7px;
  top:930px;
 }
 .button8{
  position: absolute;
  right: 7px;
  top:190px;
 }
 
 .button9{
  position: absolute;
  right: 7px;
  top:300px;

 }

.button10{
  position: absolute;
  right: 7px;
  top:410px;
}

.button11{
  position: absolute;
  right:7px;
  top:520px;
}

.button12{
  position: absolute;
  right: 7px;
  top:640px;
}



.body_image{
  position: absolute;
  left:189px;
  top:230px;

}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width:720px;
    height:200px;
    position: absolute;
    left: 40px;
    top:250px;
    }

td, th {
    border: 1px solid black;
    text-align: center;
    padding: 8px;
    w
}
th{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color:   #FFEBCD;
  color:solid black;
}

tr{background-color: #F0FFFF}
tr:hover{background-color:#7FFFD4} 
  .Table{
    position: absolute;
    left:285px;
    top:800px;

  }
  form {
  width: 920px;
  height:1000px;
  margin: 10px auto;
  padding: 10px 20px;
  background:   #F8F8FF;
  border-radius: 9px;
  position: absolute;
  top:-580px;
  left: -90px;
}

.header_kehadiran{
  position: absolute;
  top:360px;
  left:680px;
  transform: translate(-50%, -50%);

    }

.class_checkbox{
    background-color: black;
}

input[type="radio"] {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);

}


.search{
  position: absolute;
  top: 200px;
  left: 115px;
}

.query{
   position: absolute;
  top: 190px;
  left: 250px;
}



    

  </style>
</head>

<body>
  <audio controls  loop autoplay style="display: none;">
    <source src="/SKPROJECT/videos_songs/look.mp3" type="audio/mp3">
  </audio>

  <div class="Header">

    <header>
      
      <div class="Title">
      <img src="/SKPROJECT/images/dashboardheader.gif" style="width: 800px ;height:150px"> 
    </div>

    <div class="Logo">
      <img src="/SKPROJECT/images/smk19.png" style="width: 150px ; height: 150px">
    </div>

    <div class="computer_image">
      <img src="/SKPROJECT/images/dashcomputer.jpg" style="width:144px; height: 150px">
    </div>

    </header>
  </div>

  <div class="sidenavleft">
    <img src="/SKPROJECT/images/dashboard2.png" style="width:190px;height: 1200px;">
    
  </div>

  <div class="sidenavright">
    <img src="/SKPROJECT/images/dashboard2.png" style="width:190px;height: 1200px;">
  </div>
   
<div class="button1">
 
  <a href="/SKPROJECT/scripts/dashboard guru/dashguru.html">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Halaman Utama</strong></button></a>
     
  
    </div>

    <div class="button2" >
 
    <a href="/SKPROJECT/scripts/dashboard guru/senarai ahli.html.php">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Senarai Ahli</strong></button></a>
    </div>

     <div class="button3" >
 
    <a href="/SKPROJECT/scripts/dashboard guru/aktiviti.html">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Aktiviti Mingguan </strong></button></a>

    </div>

     <div class="button4" >
 <a href="/SKPROJECT/scripts/dashboard guru/kehadiran.html.php">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Kemaskini Kehadiran</strong></button></a>

    </div>


     <div class="button5" >
 <a href="/SKPROJECT/scripts/dashboard guru/kemaskinijawatan.html.php">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Kemaskini Jawatan</strong></button></a>

    </div>


     <div class="button6" >
 <a href="/SKPROJECT/scripts/dashboard guru/penglibatan_pencapaian.html.php">
    <button style="width:170px;height: 120px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Kemaskini Penglibatan & Pencapaian</strong></button></a>

    </div>

      <div class="button7" >
 
    <a href="/SKPROJECT/scripts/dashboard guru/markahkoku.html.php">
    <button style="width:170px;height: 120px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Markah Kokurikulum Pelajar</strong></button></a>


  </div>

<div class="button8" >
 <a href="/SKPROJECT/scripts/dashboard guru/jawatan.html.php">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Senarai Jawatan</strong></button></a>

    </div>


    <div class="button9" >
 <a href="/SKPROJECT/scripts/dashboard guru/credentials.html.php">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Credentials</strong></button></a>

    </div>

<div class="button10" >
 
   <a href="/SKPROJECT/scripts/dashboard guru/tukarpass.html">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Tukar Katalaluan</strong></button></a>
    </div>

    <div class="button11" >
 
<a href="/SKPROJECT/scripts/homepage.html">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Log Keluar</strong></button></a>
    </div>

    <div class="button12" >
 <a href="/SKPROJECT/scripts/dashboard guru/padam_akaun.html.php">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Padam Akaun</strong></button></a>

    </div>




<div class="Table">

<form action="/SKPROJECT/scripts/dashboard guru/markahkoku query.php" method="post">

<!-- Code for Query -->

  <div class="search">
    <select name="query"> 
      <option>-</option>
      <optgroup label="Tingkatan 4">Tingkatan 4</optgroup>
       <option value="T401">4 Perdana</option>
        <option value="T402">4 Putra</option>
      <option value="T403" >4 Persona</option>
      <option value="T404" >4 Chimaera</option>
<optgroup label="Tingkatan 5" >Tingkatan 5</optgroup>
  <option value="T501" >5 Perdana</option>
  <option value="T502" >5 Putra</option>
  <option value="T503" >5 Persona</option>
  <option value="T504" >5 Chimaera</option>
     

      
          
   
    </select>
  </div>


  <div class="query">
    <input type="submit" value=Cari style="width: 80px ; height: 40px;">
  </div>





<table style="left:7px">

  <tr>
   
    <th width="20px" height="15px">ID Pelajar</th>
    <th width="20px" height="15px">Nama Pelajar</th>
    <th width="20px" height="15px">Tingkatan</th>
    <th width="20px" height="15px">Jawatan</th>
    <th width="20px" height="15px">Markah Jawatan</th>
    <th width="20px" height="15px">Pertandingan</th>
    <th width="20px" height="15px">Markah Penglibatan</th>
    <th width="20px" height="15px">Markah Pencapaian</th>
    <th width="20px" height="15px">Kehadiran</th>
    <th width="20px" height="15px">%</th>
    <th width="20px" height="15px">Gred</th>


    
   
</tr>






 <?php
  include ('connection.php'); 

  //Get Data from Database using sql statement

  $sql = "SELECT * FROM `JADUAL KOMPOSIT PENUH PELAJAR` WHERE `ID PELAJAR`!='0'";
  
  
    $result = mysqli_query($connect, $sql);
   
   
while($row = mysqli_fetch_array($result))
{

  $ID = $row['ID PELAJAR'] ;
  $NAMA = $row['NAMA PELAJAR'];
  $KELAS = $row['KELAS'];
  $KodJAWATAN = $row['KOD JAWATAN'];
    $PERTANDINGAN =$row['PERTANDINGAN'];
    $PENGLIBATAN = $row['PENGLIBATAN'];
    $PENCAPAIAN = $row['PENCAPAIAN'];
    $markah_penglibatan=$row['MARKAH PENGLIBATAN'];
    $markah_pencapaian=$row['MARKAH PENCAPAIAN'];
    $markah_jawatan=$row['MARKAH JAWATAN'];
    $kehadiran=$row['KEHADIRAN'];


    $peratus_markah_penglibatan = ($markah_penglibatan/20)*20;
    $peratus_markah_pencapaian = ($markah_pencapaian/20)*20;
    $peratus_markah_jawatan = ($markah_jawatan/50)*50;
    $peratus_markah_kehadiran = ($kehadiran/10)*10;


    $jumlah_markah_koku = ($peratus_markah_penglibatan+$peratus_markah_pencapaian+
                 $peratus_markah_jawatan+$peratus_markah_kehadiran);

switch ($KodJAWATAN ) {
  case 'J01':
  $NamaJawatan="PENGERUSI";
    break;

  case 'J02':
  $NamaJawatan="NAIB PENGERUSI";
    break;

  case 'J03':
  $NamaJawatan="BENDAHARI";
    break;

  case 'J04':
  $NamaJawatan="SETIAUSAHA";
    break;

  case 'J05':
  $NamaJawatan="AJK FORM 5";
    break;

  case 'J06':
  $NamaJawatan="AJK FORM 4";
    break;

  case 'J07':
  $NamaJawatan="AHLI BIASA";
    break;

  
  

}








    $gred_markah = '';

    if ($jumlah_markah_koku>='0'and $jumlah_markah_koku<='39') {
  $gred_markah = 'F';
  }  
  elseif ($jumlah_markah_koku>='40' and $jumlah_markah_koku<='49') {
    $gred_markah = 'E';
  } 

  elseif ($jumlah_markah_koku>='50' and $jumlah_markah_koku<='59') {
  $gred_markah = 'D';
  } 
  elseif ($jumlah_markah_koku>='60' and $jumlah_markah_koku<='69') {
    $gred_markah = 'C';
     } 
     elseif ($jumlah_markah_koku>='70' and $jumlah_markah_koku<='84') {
      $gred_markah = 'B';
       } 
        elseif ($jumlah_markah_koku>='85' and $jumlah_markah_koku<='100') {
          $gred_markah = 'A';
        } 

      $sql1 = "UPDATE `JADUAL KOMPOSIT PENUH PELAJAR` SET `PERATUS MARKAH` = '$jumlah_markah_koku', `GRED MARKAH` = '$gred_markah' WHERE `ID PELAJAR` = '$ID';";

  

  $update = mysqli_query($connect,$sql1);


  
 

  






      echo '<tr>';
      echo '<td>'.$ID.'</td>';
      echo '<td>'.$NAMA.'</td>';
      echo   '<td>'.$KELAS.'</td>';
      echo '<td>'.$NamaJawatan.'</td>';
      echo'<td>'.$peratus_markah_jawatan.'</td>';
      echo '<td>'.$PERTANDINGAN.'</td>';
      echo '<td>'.$markah_penglibatan.'</td>';
      echo '<td>'. $markah_pencapaian.'</td>';
      echo '<td>'.$kehadiran.'</td>';
      echo '<td>'.$jumlah_markah_koku.'</td>';
      echo '<td>'.$gred_markah.'</td>';

      echo  '</tr>';
    }
  

     echo '</table>';

     ?>



  


</form>
</div>



<div class="header_kehadiran">
  <img src="/SKPROJECT/images/markahkoku.gif">
 </div>



 <div class="test">
     <a href=" javascript:window.print()">

    <button style="
    color: black;

  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  width: 150px;
  height: 70px;
  font-style: normal; font-size: 30px;
  border:none;
  position: absolute;
  left: 580px;
  top: 1000px;"><strong>PRINT</strong>

</button>


 
</div>



</body>
</html>



