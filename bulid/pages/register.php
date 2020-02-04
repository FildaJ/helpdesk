<?php
    include "scripts\auth.php";
?>
<form method="post">
 First name:<br>
  <input type="text" name="jmeno" placeholder="Tomáš"  required><br>
  Last name:<br>
  <input type="text" name="prijmeni" placeholder="Novák"  required> <br>
  Mail:<br>
  <input type="email" name="email" placeholder="test@test.cz" title="text@text.text" required pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$">   <br>                 
  Heslo:<br>
  <input type="password" name="heslo1" placeholder="Vzor123" title="Heslo nejméně 8 znaků. Alespoň jedno malé a jedno velké písmeno." required pattern="(?=^.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">     <br>    
  Heslo pro kontrolu:<br>
  <input type="password" name="heslo2" placeholder="Vzor123" title="Heslo nejméně 8 znaků. Alespoň jedno malé a jedno velké písmeno." required pattern="(?=^.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">      <br>                            <br>
    <a href="index.php?page=login"><button type="button">Zpět k přihlášení</button> </a>   
   <button name="reg_user" type="submit">Registrovat</button>  
</form>      
    
<?php 
if (isset($_POST['reg_user'])) {
    $jmeno     = mysqli_real_escape_string($conn, $_POST['jmeno']);
    $prijmeni  = mysqli_real_escape_string($conn, $_POST['prijmeni']);
    $email     = mysqli_real_escape_string($conn, $_POST['email']);
    $heslo1    = mysqli_real_escape_string($conn, $_POST['heslo1']);
    $heslo2    = mysqli_real_escape_string($conn, $_POST['heslo2']);
    $kontrola = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $vysledek = mysqli_query($conn, $kontrola);
    if (mysqli_num_rows($vysledek) > 0) {
        $eror_mail = "Email je již používán";
    } elseif ($heslo1 != $heslo2) { //pokud erory nee
        $eror_heslo = "Hesla se neshodují";
    } else
        {
        $heslo1 =  hash('sha512', $heslo1);
        $admin = false;
        $query = "INSERT INTO user (jmeno,prijmeni,email,heslo,admin) 
VALUES('$jmeno','$prijmeni', '$email', '$heslo1', '$admin')";
        mysqli_query($conn, $query);
    }
}    ?>     
<br><br><p><?php 
	if (isset( $eror_heslo)) {
		echo   $eror_heslo;;
    } ?></p><br>   
    <p><?php 
	if (isset( $eror_mail)) {
		echo   $eror_mail;;
    } ?></p>       