<?php
$ID = $_SESSION["clanekid"];
$result = mysqli_query($conn, "SELECT clanek, nazev, ID_predmet FROM okruhy WHERE nazev = '$ID'");
$clanek  = mysqli_fetch_array($result);
$jsvar = $clanek["nazev"];

?>
<header>
	<h1><?php echo $clanek["nazev"]; ?></h1>
	<div style="background-image:(img/header/<?php echo $clanek[ID_predmet]; ?>.png);" class='heroImg'></div>";
</header>
<main>
	<article>
		<H1><?php echo $clanek["nazev"]; ?></H1>
		<?php echo $clanek["clanek"]; ?>
	</article>	
</main>
