<?php
function drawLetter($letter, $color) {
	$letter = strtoupper($letter);
	echo "<table border = 1>";
	for ($i = 0; $i < 8; $i++) {//Controls rows
		echo "<tr>";
		for ($j = 0; $j < 8; $j++) {//Controls columns
            $colorToDisplay = "white";
		    $letterToDisplay = "";
			switch($letter) {
				case "A" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "B" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "C" :
					if (($i == 0 && $j > 1)||($i == 1 && $j == 1)||($i > 1 && $i < 6 && $j == 0)||($i == 6 && $j == 1)||($i == 7 && $j > 1)) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "D" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "E" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "F" :
					if (($j >= 1 && $j <= 2) || ($i <= 1 && $j > 0) || ($i >= 4 && $i <= 5 && $j > 0 && $j < 6)) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}	
					break;
				case "G" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "H" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "I" :
<<<<<<< HEAD
					if ($j == 3 || $j == 4) {
=======
					if ($i==0||$j==4||$j==3) {
>>>>>>> 85372390f949a0a736a50576ec32ce3085c0b1a7
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "J" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "K" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "L" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "M" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "N" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "O" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "P" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "Q" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "R" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "S" :
					if ($i == 0 || $i == 3 || $i == 4 || $i == 7 || ($i == 1 && $j == 0) || ($i == 2 && $j == 0) || ($i == 5 && $j == 7) || ($i == 6 && $j == 7)) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "T" :
					if ($i==0||$j==4||$j==3||$i==1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "U" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
				case "V" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "W" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "X" :
					if (1){
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "Y" :
					if ($j == 3  || $j == 4)
					{
						if($i != 0 && $i != 1 && $i != 2 && $i != 3)
						{
							$colorToDisplay = $color;
							$letterToDisplay = $letter;
						}
					}
					if(($i == $j || $i == $j + 1) && $i < 5)
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					if(($i + $j == 7 || $i + $j == 8) && $i < 5)
					{
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "Z" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;					
				case "!" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "?" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
 				case "0" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;					
				case "1" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "2" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "3" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "4" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "5" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}		
					break;
				case "6" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "7" :
					if ($i == 0 || (($i + $j) == 8)) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "8" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "9" :
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;					
			}  //endSwitch
			
			if ($colorToDisplay == "rainbow") {
				
			   $colorToDisplay = "rgb(" . rand(0,255) . ", " . rand(0,255) . ", " . rand(0,255) .")";	
				
			}
			
			echo "<td style = 'background-color:$colorToDisplay'>";
			echo $letterToDisplay;
			echo "</td>";
			
		} //endFor columns
		echo "</tr>";
	} //endFor rows
	echo "</table>";
}
?>