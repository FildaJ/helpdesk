<?php
include('join.php');
$predmet = "";
$cislo = "";
$nazev = "";
$clanek = "";

if (isset($_POST['save'])) {
	$predmet = $_POST['id'];
	$cislo = $_POST['cislo'];
	$nazev = $_POST['nazev'];
	$clanek = $_POST['clanek'];

	mysqli_query($conn, "INSERT INTO okruhy (id_predmet, cislo, nazev, clanek) VALUES ('$predmet', '$cislo', '$nazev', '$clanek')");
	$_SESSION['message'] = "Uloženo";
	header('location: ../index.php?page=edit');
}
