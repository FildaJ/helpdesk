<?php
if (isset($_SESSION["username"])) {
    header("Location: index.php?page=home");
    exit();
}
?>
<main class="centerContainer">
    <form method="post">
        <h2>Přihlášení</h2>
        <label for="email">E-Mail</label>
        <input type="email" name="email" placeholder="vzor@vzor.cz">
        <label for="password">Heslo</label>
        <input type="password" name="heslo" placeholder="Vzor123">
        <button class="fullWidthBtn" name="login_user" title="Odeslat formulář" type="submit">Přihlásit se</button> 
        <span>Ještě nemáš účet?<a href="index.php?page=register"> Vytvoř si ho!</a> </span> 
    </form>
</main>  
<?php
if (isset($_POST['login_user'])) {
    $email  = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['heslo']);
    if (empty($email)) {
        $erorr_email = "Email je povinný";
    } elseif (empty($pass)) {
        $erorr_heslox = "Heslo je povinné";
    } else {
        $heslo1 = $_POST['heslo'];
        $crypted = hash('sha512', $heslo1);
        $query   = "SELECT * FROM user WHERE email='$email' AND heslo='$crypted'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $uzivatel               = "SELECT jmeno FROM user WHERE email='$email' LIMIT 1"; //najdi jméno uživatele pro jiné účely
            $execute1                = mysqli_query($conn, $uzivatel);
            $temp1 = mysqli_fetch_assoc($execute1);
            $_SESSION['username']   = implode($temp1);
            $admin              = "SELECT administrator FROM user WHERE email='$email' LIMIT 1";
            $execute            = mysqli_query($conn, $admin);
            $temp = mysqli_fetch_assoc($execute);
            $_SESSION['admin']  = implode($temp);
            header("Location: index.php?page=home");
            

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
