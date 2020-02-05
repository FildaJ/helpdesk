<!DOCTYPE html>
<html>

<head>
	<title>PVY</title>
</head>

<body>
	<form id="someform" method="post" action="">
		<div class="btn primary">
			<input type="submit" name="pvyid" value="8" />
		</div>
		<div class="btn primary">
			<input type="submit" name="pvyid" value="9" />
		</div>
	</form>
	<?php
	$_SESSION["pvyid"] = $_POST["pvyid"];
	if (isset($_POST['pvyid'])) {
		header("location: index.php?page=pvyc");
	}
	?>
</body>

</html>