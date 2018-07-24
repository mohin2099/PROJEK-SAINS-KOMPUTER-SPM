<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">

  <title>DashBoard Murid</title>

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

.button13{
  position: absolute;
  right: 7px;
  top:760px;
}



.body_image{
  position: absolute;
  left:189px;
  top:230px;

}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width:890px;
    height:200px;
    position: absolute;
    left: 40px;
    top:250px;
    }

td, th {
    border: 1px solid black;
    text-align: center;
    padding: 8px;
    
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


input[type="radio"] {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);

}


    

  </style>
</head>

<body>
  <audio controls  loop autoplay style="display: none;">
    <source src="/SKPROJECT/videos_songs/dawn.mp3" type="audio/mp3">
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
 
  <a href="/SKPROJECT/scripts/dashboard murid/dashmurid.html">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Halaman Utama</strong></button></a>
     
  
    </div>

    <div class="button2" >
 
    <a href="/SKPROJECT/scripts/dashboard murid/senarai ahli.html.php">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Senarai Ahli</strong></button></a>
    </div>

     <div class="button3" >
 
   <a href="/SKPROJECT/scripts/dashboard murid/jawatan.html.php">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Senarai Jawatan</strong></button></a>

    </div>

     <div class="button4" >
 <a href="/SKPROJECT/scripts/dashboard murid/aktiviti.html">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Aktiviti Mingguan</strong></button></a>

    </div>


     <div class="button5" >
 <a href="/SKPROJECT/scripts/dashboard murid/kehadiran.html.php">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Kemaskini Kehadiran</strong></button></a>

    </div>


     <div class="button6" >
 <a href="/SKPROJECT/scripts/dashboard murid/penglibatan_pencapaian.html.php">
    <button style="width:170px;height: 120px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Kemaskini Penglibatan & Pencapaian</strong></button></a>

    </div>

      <div class="button7" >
 
    <a href="/SKPROJECT/scripts/dashboard murid/markahkoku.html.php">
    <button style="width:170px;height: 120px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Markah Kokurikulum Pelajar</strong></button></a>


  </div>

<div class="button8">
  <a href="/SKPROJECT/scripts/dashboard murid/kemaskinibiodata.html">
     <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Kemaskini Biodata</strong></button></a>

    </div>

<div class="button9" >
 <a href="/SKPROJECT/scripts/dashboard murid/credentials.html.php">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Credentials</strong></button></a>

    </div>


    <div class="button10" >
 <a href="/SKPROJECT/scripts/dashboard murid/tukarpass.html">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Tukar Katalaluan</strong></button></a>

    </div>

<div class="button11" >
 
   <a href="/SKPROJECT/scripts/homepage.html">
    <button style="width:170px;height: 80px;font-size: 20px;font-family: "Times New Roman", Times, serif;><strong>Log Keluar</strong></button></a>
    </div>



<div class="Table">

<form>

<table  >
  <col width="20">
  <col width="140">
  <col width="1">
  <col width="140">

  <span id="row1">
  <tr>
   
    <th>ID Pelajar</th>
    <th>Nama Pelajar</th>
    <th>Kelas</th>
    <th>Pertandingan</th>
    <th>Penglibatan</th>
    <th >Pencapaian</th>

</tr>
</span>

 <?php

  include ('connection.php'); 

  $sql = "SELECT * FROM `JADUAL KOMPOSIT PENUH PELAJAR`   WHERE `ID PELAJAR`!='0' order by `ID PELAJAR` ASC";
  
  
    $result = mysqli_query($connect, $sql);
   
while($row = mysqli_fetch_array($result))
{
   $id=$row['ID PELAJAR'];
   $nama=$row['NAMA PELAJAR'];
   $kelas = $row['KELAS'];
   $pertandingan =$row['PERTANDINGAN'];
   $penglibatan = $row['PENGLIBATAN'];
   $pencapaian = $row['PENCAPAIAN'];

      echo '<tr>';
      echo '<td>'.$id.'</td>';
      echo '<td>'.$nama.'</td>';
      echo '<td>'.$kelas.'</td>';
      echo '<td>'.$pertandingan.'</td>';
      echo '<td>'.$penglibatan.'</td>';
      echo '<td>'.$pencapaian.'</td>';
      echo  '</tr>';
    }

     echo '</table>';

     ?>

</form>
</div>

<div class="header_kehadiran">
  <img src="/SKPROJECT/images/penglibatan_pencapaian.gif">
 </div>


</body>
</html>



