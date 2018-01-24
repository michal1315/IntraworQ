<?php

$your_name = $_POST["your-name"];

?>




<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Witaj</title>
    <link rel="stylesheet" href="styles/style-welcome.css">
    <meta http-equiv="refresh" content="3; URL=db_login.php">

</head>
<body>

<div class="container">

    <div class="left"></div>
    <div class="center">

        <h1 class="your-name">
            Witaj
            <?php

            echo $your_name

            ?>
        </h1>



    </div>
    <div class="right"></div>











</div>
</body>
</html>