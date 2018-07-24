  <head>
       
        <title>Sign Up</title>
       
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
     
      <style type="text/css">
    

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 9px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],

select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #000000;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;

}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
  font-weight: bolder;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}

input[type="radio"] {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);
}

.change_color{
  color: red;
}


</style>


<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   



    </head>
    <body background="/SKPROJECT/images/signup_back.gif">
      <div class="song">
         <audio controls autoplay loop style="display: none">
      <source src="/SKPROJECT/videos_songs/uptown.mp3" type="audio/mpeg">
        Your browser does not support the audio element
    </audio>
</div>

      <form action="/SKPROJECT/scripts/signup.php" method="post">
      <center>
        <a href="/SKPROJECT/scripts/homepage.html">
      
       <img src="/SKPROJECT/images/signup1.gif"><a href="/SKPROJECT/scripts/homepage.html">
       </a>
     </center>
        
        <div value="color_set">

        <fieldset>
          <strong>
          <label for="name">Nama Penuh:</label>
          <input type="text"  name="nama" required>
          
           <label for="No_IC">Nombor Kad Pengenalan : 
<span class="change_color">
           (TANPA "-" atau"SPACE")
         </span>
       </label>
            <input type="text" name="IC" pattern=".{12,12}" required>
          
          <label for="Username">Username:</label>
          <input type="text"  name="user_name" maxlength="10" required>
          

           <label for="confirmpassword">Password:</label>
          <input type="password"  name="user_password" required>
          

         <label>Umur:</label></strong><br>
          <input type="radio" name="age" value="16" required> 16 Tahun<br><br>

          <input type="radio" name="age"
          value="17" required> 17 Tahun<br><br>

       
       <strong><label>Jantina :</label></strong><br>

       <select name = "Jantina" >
      
       <option value="Lelaki">Lelaki</option>
        <option value="Perempuan">Perempuan</option >
      </select>
    

        <strong><label>Tingkatan</label></strong>
      <select name = "Tingkatan">
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
      
        </fieldset>
      </div>
       

      <button type="submit">Daftar</button>
      <?php
       echo "<script type='text/javascript'>alert('Daftar masuk berjaya');</script>";
       ?>
      
  <br>

  <h4>Developed by : Mohin Paramasivam</h4>
      </form>
      
    </body>
</html>