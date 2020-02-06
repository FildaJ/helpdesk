<?php
include('scripts/edit_db.php');
include('scripts/auth.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Přídání článku</title>
</head>

<body>
	<main class="centerContainer">
		<form method="post" action="scripts/edit_db.php">
			<label for="id">Předměty</label>
				<div class="selectStyle">
					<select name=id>
						<label>Předmět</label>
						<option >PVY</option>"
						<option >POG</option>"
						<option >POS/SOS</option>"
						<option >PRG</option>"
					</select>
				</div>
				<label>Číslo</label>
				<input type="text" name="cislo" value="">
				<label>Název</label>
				<input type="text" name="nazev" value="">
				<label>Článek</label>
				<textarea id="editForm" name="clanek" rows="10"></textarea>

				<button class="btn" type="submit" name="save">Vložit</button>
		</form>
	</main>
</body>

</html>