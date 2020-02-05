<!DOCTYPE html>
<html>

<head>
	<title>POS/SOS</title>
</head>

<body>
	<form id="someform" method="post" action="">
		<div class="btn primary">
			<input type="submit" name="idclanek" value="1" />
		</div>
	</form>
	<?php
	$_SESSION["clanekid"] = $_POST["idclanek"];
	if (isset($_POST['idclanek'])) {
		header("location: index.php?page=clanek");
	}
	?>
</body>

</html>