<?php
if ((!isset($_SESSION["username"])) or ($_SESSION['admin'] == '0' )) {   
    header('Location: index.php?page=home');
    };
?>