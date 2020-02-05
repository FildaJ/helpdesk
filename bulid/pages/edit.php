<?php
include('scripts/edit_db.php');

?>
<!DOCTYPE html>
<html>

<head>
	<title>Přídání článku</title>
</head>

<body>



	<form method="post" action="scripts/edit_db.php">

		<input type="hidden" name="id" value="">

		<div class="input-group">
			<select name=id>
				<label>Předmět</label>
				<option >PVY</option>"
				<option >POG</option>"
				<option >POS/SOS</option>"
				<option >PRG</option>"
			</select>
		</div>
		<div class="input-group">
			<label>Číslo</label>
			<input type="text" name="cislo" value="">
		</div>
		<div class="input-group">
			<label>Název</label>
			<input type="text" name="nazev" value="">
		</div>
		<div class="input-group">
			<label>Článek</label>
			<input type="text" name="clanek" value="">
		</div>

		<div class="input-group">
			<button class="btn" type="submit" name="save">Save</button>
		</div>
	</form>
</body>

</html>