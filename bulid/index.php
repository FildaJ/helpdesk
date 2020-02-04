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
	<link rel="stylesheet" href="css/desktopStyle.css" media="screen and (min-width: 1024px)"/>
	<link rel="stylesheet" href="css/mobileStyle.css" media="screen and (max-width: 1023px)"/>
	<meta name="theme-color" content="#000">
	<title>Document</title>
</head>

<body>
	<nav>
		<div class="btn-primary toggle"><a href="#">&#9776; Menu</a></div>
		<div id="navContent">		
			<ul>
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
			<div class="btn-primary">
				<?php
					if (!isset($_SESSION["username"])) {
						echo '<a href="index.php?page=login">Přihlásit se</a>';
					} else {
						echo '<a href="index.php?page=logout">Odhlásit se</a>';
					}
				?>
			</div>
		</div>
	</nav>
	<header>
	</header>
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