<?php
    $ID = $_SESSION["clanekid"];
   $result = mysqli_query($conn, "SELECT clanek FROM okruhy WHERE ID_okruhy = $ID");
   $clanek  = mysqli_fetch_array($result);
   echo $clanek["clanek"];
?>
