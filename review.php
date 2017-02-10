<?php


//echo "Hello World!";
$my_favorite_number = rand(1,10);
echo "My favorite number is: " . $my_favorite_number ;
echo "<br />";
$random_letter = rand(65,90);
/*for ($i = 0; $i < 25; $i++)
{
    echo "<br />";
    echo "Random Number: " . rand(0,100);
}*/
function displayTable($int1, $int2, $phrase){
    echo "<table border = 1>";
        for ($i = 0; $i < $int1; $i++){
            echo "<tr>";
            for ($a = 0; $a < $int2; $a++){
                if ($phrase == "numbers" && $a == 0 && $i == 0)
                    echo '<td style= "background-color:green;">' . rand(65,90);
                else if ($phrase == "numbers" && $a == $int1 -1 && $i == $int2 - 1)
                    echo '<td style= "background-color:green;">' . rand(65,90);
                else if ($phrase == "numbers")
                    echo "<td>" . rand(65,90);
                else if ($phrase == "letters")
                    echo "<td>" . chr(rand(65,90));
                echo "</td>";
            }
            echo "</tr>";
        }
    echo "</table>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> PHP Review </title>
    </head>
    <body>
        <h1>Table with random numbers</h1>
        <br />
        <?=
        displayTable(5,5, numbers);
        ?>
        <h1>Random letters</h1>
        <?=
        displayTable(7,7, letters);
        ?>
    </body>
</html>