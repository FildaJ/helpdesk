<?php
					$dotaz = "SELECT P1, P2, P3, P4, P5 FROM hodnoceni WHERE ID_hodnoceni = "; //id_okruh
					$spojeni = mysqli_connect($jmenoserveru, $uzivatel, $heslo, $databaze);
					$vys = mysqli_query($spojeni, $dotaz2);
					if (mysqli_num_rows($vys) == 1) {
						while ($row = mysqli_fetch_assoc($vys1)) {
							$hopt1 = $row["P1"];
                            $hopt2 = $row["P2"];
                            $hopt3 = $row["P3"];
                            $hopt4 = $row["P4"];
                            $hopt5 = $row["P5"];
						}
					}
					$hopc = $hopt1 + $hopt2 + $hopt3 + $hopt4 + $hopt5;
					$prum = ($hopt1 + $hopt2 + $hopt3 + $hopt4 + $hopt5) / 5;

                    echo "Počet 1:" . $hopt1 . "<br>";
                    echo "Počet 2:" . $hopt2 . "<br>";
                    echo "Počet 3:" . $hopt3 . "<br>";
                    echo "Počet 4:" . $hopt4 . "<br>";
                    echo "Počet 5:" . $hopt5 . "<br>";
                    echo "Průměr: " . $prum . "<br>";  
					?>