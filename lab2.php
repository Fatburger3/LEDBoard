<?php

include 'LEDBoard/ledLetters.php';

?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <style>
            td {
                width: 10px;
                height: 10px;
                border-radius: 20px;
            }
        </style>
    </head>
    <body>
        <h1> LED</h1>
        <?=drawLetter("7","green") ?>
    </body>
</html>