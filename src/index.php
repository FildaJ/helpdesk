<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="nav">
        <div a href="index.php?page=home">PVY1 Helpdesk</a></div>
        <ul> 
            <li a href="index.php?page=predmety">Předměty</a></li>
        </ul>
    </nav>

<?php
    $main = $_GET["page"];
    switch ($main) {
        case "home":
            include "home.php";
            break;
        case "predmety":
            include "predmety.php";
            break;
        default:
            include "home.php";
            break;
    }
?>
<!--Test-->
</body>
</html>