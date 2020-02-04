<!DOCTYPE html>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/desktopStyle.css" media="screen and (min-width: 1024px)"/>
	<link rel="stylesheet" href="css/mobileStyle.css" media="screen and (max-width: 1023px)"/>
	<title>Document</title>
</head>

<body>
	<nav>
		<div class="btn primary toggle"><a href="#">&#9776; Menu</a></div>
		<div id="navContent">
			<ul id="links">
				<li><a href="#">Domů</a></li>
				<li>
					<a href="#">Předměty</a>
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
			<div id="loginBtn" class="btn primary"><a href="#">Přihlásit se</a></div>
		</div>
	</nav>

	<?php
	if (isset($_GET['Page'])) {
		$main = $_GET['Page'];
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