<form method="post">
 E-Mail:<br>
  <input type="text" name="email" placeholder="vzor@vzor.cz"><br>
  Heslo:<br>
  <input type="text" name="heslo" placeholder="vzor@vzor.cz"> <br>                          
<button name="login_user"  title="Odeslat formulář" type="submit">Přihlásit se</button> 
<p>Ještě nemáš účet?<a href="index.php?page=register"> Vytvoř si ho!</a> </p> 
</form>  
<?php
if (isset($_POST['login_user'])) {
    $email  = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['heslo']);
    if (empty($email)) {
        $erorr_email = "Email je povinný";
    } elseif (empty($pass)) {
        $erorr_heslox = "Heslo je povinné";
    } else {
        $query   = "SELECT * FROM user WHERE email='$email' AND heslo='$pass'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $uspech = "Úspěšně jsi se přihlásil";
            $uzivatel           = "SELECT jmeno FROM user WHERE email='$email' LIMIT 1"; //najdi jméno uživatele pro jiné účely
            $execute             = mysqli_query($conn, $uzivatel);

        } else {
            $erorr_login = "Tato kombinace neexistuje.";
        }
    }
}
?>
<br>
 <?php if (isset($erorr_login)) {
 echo '<p>' . $erorr_login . '</p><br>';
 }
 ?>
  <?php if (isset($erorr_email)) {
 echo '<p>' . $erorr_email . '</p><br>';
 }
 ?>
  <?php if (isset($erorr_heslox)) {
 echo '<p>' . $erorr_heslox . '</p><br>';
 }
 ?>
  <?php if (isset($uspech)) {
 echo '<p>' . $uspech . '</p><br>';
 }
 ?>
