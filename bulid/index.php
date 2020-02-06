<?php
session_start();
?>
<!DOCTYPE html lang="cs">
<?php
include 'scripts/join.php';
?>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="manifest" href="manifest.json">
	<link rel="icon" href="/img/logo/logo.png" type="image/gif" sizes="16x16">
	<meta name="theme-color" content="#000">
	<link rel="stylesheet" href="css/desktopStyle.css" media="screen and (min-width: 750px)" />
	<link rel="stylesheet" href="css/mobileStyle.css" media="screen and (max-width: 749px)" />
	<title>Document</title>
</head>

<body>
	<link rel="apple-touch-icon" sizes="180x180" href="/img/logo/logo-180.png">
	<nav>
		<div id="navContent">
			<input type="checkbox" id="checkbox_toggle">
			<label for="checkbox_toggle" class="btn-primary toggle">&#9776; Menu</label>
			<ul id="links">
				<li><a href="index.php?page=home">Domů</a></li>
				<li>
					<a href="#">Předměty</a>
					<ul class="submenu">
						<li><a href="#">Grafika</a></li>
						<li><a href="#">Programování</a></li>
						<li><a href="index.php?page=pvy">PVY</a></li>
						<li><a href="index.php?page=pos">Sítě</a></li>
					</ul>
				</li>
				<li><a href="http://forum-matura.jednoduse.cz/">Forum</a></li>
				<li><a href="#">Kalendář</a></li>
				<li><a href="index.php?page=edit">Edit</a></li>
			</ul>
			<ul>
				<?php
				if (!isset($_SESSION["username"])) {
					echo '<a class="btn-primary" href="index.php?page=login">Přihlásit se</a>';
				} else {
					echo '<a class="btn-primary" href="index.php?page=logout">Odhlásit se</a>';
				}
				?>
			</ul>
		</div>
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
		case "register":
			include "pages/register.php";
			break;
		case "logout":
			include "scripts/logout.php";
			break;
		case "edit":
			include "pages/edit.php";
			break;
		case "pvy":
			include "pages/pvy.php";
			break;
		case "clanek":
			include "pages/clanek.php";
			break;
		case "pos":
			include "pages/pos-sos.php";
			break;
		default:
			include "pages/home.php";
			break;
	}

	?>
	<?php
	include "scripts/chat.php";
	include "scripts/footer.php";
	?>
</body>

</html>