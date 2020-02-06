<?php
	$ID = $_SESSION["clanekid"];
	$result = mysqli_query($conn, "SELECT clanek, nazev FROM okruhy WHERE ID_okruhy = $ID");
	$clanek  = mysqli_fetch_array($result);
	
?>
<header>
	<h1></h1>
	<div id='heroFilter'>
		<div src='' id='heroImg'></div>
	</div>
</header>
<main>
	<article>
	<H1><?php echo $clanek["nazev"]; ?></H1>
	<?php echo $clanek["clanek"];?>
	</article>
</main>
