<form method="post">
 First name:<br>
  <input type="text" name="jmeno" placeholder="Tomáš"  required><br>
  Last name:<br>
  <input type="text" name="prijmeni" placeholder="Novák"  required> <br>
  Mail:<br>
  <input type="text" name="email" placeholder="test@test.cz" title="email@domena.koncovka" required pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">   <br>                 
  Heslo:<br>
  <input type="text" name="heslo1" placeholder="Example123" title="Heslo nejméně 8 znaků. Alespoň jedno malé a jedno velké písmeno." required pattern="(?=^.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">     <br>    
  Heslo pro kontrolu:<br>
  <input type="text" name="heslo2" placeholder="Example123" title="Heslo nejméně 8 znaků. Alespoň jedno malé a jedno velké písmeno." required pattern="(?=^.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">      <br>                            <br>
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
        //$heslo1 = md5($heslo1);//zahesluj to (hvězdičky)
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