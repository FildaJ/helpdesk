<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
</head>

<body>
    <div class="wrap">
        <nav>
            <ul class="primary">
                <li><a href="index.php?page=home">PVY1 Helpdesk</a></li>
                <li>
                    <a href="index.php?page=predmety">Předměty</a>
                    <ul class="sub">
                        <li><a href="">PVY</a></li>
                        <li><a href="">POG</a></li>
                        <li><a href="">PRG</a></li>
                        <li><a href="">POS</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=onas">O nás</a></li>
            </ul>
        </nav>
    </div>

    <?php
    if (isset($_GET['Page'])) {
        $main = $_GET['Page'];
    } else {
        $main = "home";
    }
    switch ($main) {
        case "home":
            include "home.php";
            break;
        case "predmety":
            include "predmety.php";
            break;
        case "onas":
            include "onas.php";
            break;
        default:
            include "home.php";
            break;
    }

    ?>
        <?php
        include "footer.php";
        ?>
</body>

</html>