<?php
include('scripts/edit_db.php');
include('scripts/auth.php');
?>
	<main class="centerContainer">
		<form method="post" action="scripts/edit_db.php">
			<label for="id">Předměty</label>
			<div class="selectStyle">
				<select name=id>
					<label>Předmět</label>
					<option value="1">PVY</option>"
					<option value="2">Grafika</option>"
					<option value="3">Sítě</option>"
					<option value="4">Programování</option>"
					<option value="5">Angličtina</option>"
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