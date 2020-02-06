<!DOCTYPE html>
<html>

<head>
	<title>POS/SOS</title>
</head>

<body>
	<form method="post" action="">
		<?php
		$ID = 3;
		$result = mysqli_query($conn, "SELECT nazev FROM okruhy WHERE ID_predmet = $ID");
		while ($nazev  = mysqli_fetch_assoc($result)) {
			echo "<div class='btn primary'>";
			echo	"<input type='submit' name='idclanek' value='$nazev[nazev]'>";
			echo "</div>";
		}
		?>
	</form>
	<?php
	$_SESSION["clanekid"] = $_POST["idclanek"];
	if (isset($_POST['idclanek'])) {
		header("location: index.php?page=clanek");
	}
	?>
</body>

</html>