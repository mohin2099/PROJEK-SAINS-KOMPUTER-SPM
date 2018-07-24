<?php
    include ('connection.php'); 

    $userid = $_POST["USERNAME"];
    $password = $_POST["PASSWORD"];
    

    
    $sql = "SELECT * FROM CREDENTIALS";
    $result = mysqli_query($connect, $sql);
    
    $jumpa = FALSE;

    while($row = mysqli_fetch_array($result))
    {
           if ($row["userid"] == $userid && $row["password"] == $password)
                $jumpa = TRUE;
                $username = $userid;

    }

    if ($jumpa and $userid!='admin')  {
         echo' <script type=text/javascript>
        alert ("Daftar masuk Berjaya\nSelamat Datang ke 19 Comp Club")
        window.location.assign(" /SKPROJECT/scripts/dashboard murid/dashmurid.html")
        </script>';


    }
    elseif ($jumpa and $userid=='admin') {
        echo' <script type=text/javascript>
        alert ("Daftar masuk Berjaya\nSelamat Datang ke 19 Comp Club")
        window.location.assign("/SKPROJECT/scripts/dashboard guru/dashguru.html")
        </script>';
     

       
    }

    else{

         echo' <script type=text/javascript>
        alert ("Sila Masukkan Username dan Password yang betul ")
        window.location.assign("/SKPROJECT/scripts/login.html")
        </script>';
     


       
    }

?>