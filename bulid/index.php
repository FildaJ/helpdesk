<!DOCTYPE html>
<?php
include 'scripts/join.php';
?>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css" />
	<title>Document</title>
</head>

<body>
	<nav>
		<ul>
			<li><a href="#">Domů</a></li>
			<li>
				<a href="#">Předměty &#8964;</a>
				<ul class="submenu">
					<li><a href="#">Grafika</a></li>
					<li><a href="#">Programování</a></li>
					<li><a href="#">PVY</a></li>
					<li><a href="#">Sítě</a></li>
				</ul>
			</li>
			<li><a href="#">O nás</a></li>
			<li><a href="#">Kalendář</a></li>
		</ul>
		<div class="btn"><a href="index.php?page=login">Přihlásit se</a></div>
	</nav>

	<?php
	if (isset($_GET['page'])) {
		$main = $_GET['page'];
	} else {
		$main = "home";
	}
	switch ($main) {
		case "home":
			include "pages/home.php";
			break;
		case "predmety":
			include "pages/predmety.php";
			break;
		case "onas":
			include "pages/onas.php";
			break;
		case "login":
				include "pages/login.php";
				break;    
		default:
			include "pages/home.php";
			break;
	}

	?>
		<?php
		include "scripts/footer.php";
		?>
</body>

</html>
<!-- Jsem negr -->