<h2>Anketa</h2>
					<form action="#" method="POST">
						<?php echo "Jak se Vám tento článek líbí? <br>" ?>
						<br>
						<div class="col-4 col-12-small">
							<input type="radio" id="rbtn1" name="opt" value="opt1">
							<label for="rbtn1"><?php echo "1"; ?></label>
						</div>
						<div class="col-4 col-12-small">
							<input type="radio" id="rbtn2" name="opt" value="opt2">
							<label for="rbtn2"><?php echo "2"; ?></label>
                        </div>
                        <div class="col-4 col-12-small">
							<input type="radio" id="rbtn2" name="opt" value="opt3">
							<label for="rbtn2"><?php echo "3"; ?></label>
                        </div>
                        <div class="col-4 col-12-small">
							<input type="radio" id="rbtn2" name="opt" value="opt4">
							<label for="rbtn2"><?php echo "4"; ?></label>
                        </div>
                        <div class="col-4 col-12-small">
							<input type="radio" id="rbtn2" name="opt" value="opt5">
							<label for="rbtn2"><?php echo "5"; ?></label>
						</div>
						<div class="col-12">
							<ul class="actions">
								<li><input type="submit" value="Hlasovat" class="primary" /></li>
								<li><a href="index.php?page=home2" class="button primary">Výsledky</a></li>
							</ul>
						</div>
					</form>
					<?php
					$opt = $_POST['opt'];
					if ($opt == 'opt1') {
						$dotaz_p = "UPDATE hodnoceni SET P1= P1 + 1 WHERE id_hodnoceni= "; //id_okruh

						if (mysqli_query($conn, $dotaz_p)) {
							echo "Díky za hlas.";
						}
						mysqli_close($conn);
					} elseif ($opt == 'opt2') {

						$dotaz_p = "UPDATE hodnoceni SET P2= P2 + 1 WHERE id_hodnoceni= "; //id_okruh

						if (mysqli_query($conn, $dotaz_p)) {
							echo "Díky za hlas.";
						}
						mysqli_close($conn);
					}elseif ($opt == 'opt3') {

						$dotaz_p = "UPDATE hodnoceni SET P3= P3 + 1 WHERE id_hodnoceni= "; //id_okruh

						if (mysqli_query($conn, $dotaz_p)) {
							echo "Díky za hlas.";
						}
						mysqli_close($conn);
					}elseif ($opt == 'opt4') {

						$dotaz_p = "UPDATE hodnoceni SET P4= P4 + 1 WHERE id_hodnoceni= "; //id_okruh

						if (mysqli_query($conn, $dotaz_p)) {
							echo "Díky za hlas.";
						}
						mysqli_close($conn);
					}elseif ($opt == 'opt5') {

						$dotaz_p = "UPDATE hodnoceni SET P5= P5 + 1 WHERE id_hodnoceni= "; //id_okruh

						if (mysqli_query($conn, $dotaz_p)) {
							echo "Díky za hlas.";
						}
						mysqli_close($conn);
					}
					?>