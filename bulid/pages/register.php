<?php
    include "scripts\auth.php";
?>
<main class="centerContainer">
    <form method="post">
        <h2>Registrace</h2>
        <label for="jmeno">Jméno</label>
        <input type="text" name="jmeno" placeholder="Tomáš"  required>
        <label for="prijmeni">Přijmení</label>
        <input type="text" name="prijmeni" placeholder="Novák"  required>
        <label for="email">E-Mail</label>
        <input type="email" name="email" placeholder="test@test.cz" title="text@text.text" required pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$">
        <label for="heslo1">Heslo</label>
        <input type="password" name="heslo1" placeholder="Vzor123" title="Heslo nejméně 8 znaků. Alespoň jedno malé a jedno velké písmeno." required pattern="(?=^.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
        <label for="heslo2">Heslo znovu</label>
        <input type="password" name="heslo2" placeholder="Vzor123" title="Heslo nejméně 8 znaků. Alespoň jedno malé a jedno velké písmeno." required pattern="(?=^.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
        <button class="fullWidthBtn" name="reg_user" type="submit">Registrovat</button>  
        <div class="btn-ghost fullWidthBtn"><a href="index.php?page=login">Zpět k přihlášení</a></div>     
    </form>
</main>
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