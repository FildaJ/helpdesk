<?php
include('scripts/edit_db.php');

?>
	<main class="centerContainer">
		<form method="post" action="scripts/edit_db.php">
			<label for="id">Předměty</label>
			<div class="selectStyle">
				<select name=id>
					<label>Předmět</label>
					<option value="1">PVY</option>"
					<option value="2">POG</option>"
					<option value="3">POS/SOS</option>"
					<option value="4">PRG</option>"
					<option value="5">AJ</option>"
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