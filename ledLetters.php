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
					if (1) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}	
					break;
				case "G" :
					if (($j >= 3 && $j <= 6 && $i == 0)
						|| ($j == 2 && $i == 1)
						|| ($j == 1 && $i == 2)
						|| ($j == 0 && $i == 3)
						|| ((($j == 0) || ($j >= 4 && $j <= 7)) && $i == 4)
						|| (($j == 1 || $j == 6) && $i == 5)
						|| (($j == 2 || $j == 5) && $i == 6)
						|| ($j >= 3 && $j <= 4 && $i == 7)) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "H" :
					if ($j==0||$j==7||$i==3) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "I" :

					if ($j == 3 || $j ==4) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}
					break;
				case "J" :
					if (($i == 0 && $j < 4) || ($i == 6 && $j == 8) || ($i == 6 && $j == 1) || ($i == 5 && $j == 0) || ($i == 7 && $j == 2) || ($i == 7 && $j == 4) || ($j == 4) || ($i == 7 && $j == 3)) {
						$colorToDisplay = $color;
						$letterToDisplay = $letter;
					}					
					break;
				case "K" :							      //$i rows   $j col
					if( ($j == 0) ||				      //col0
						($j == 1) ||					  //col1
						($i == $j)&&($i > 2)&&($j > 3) || //bottom leg, top diagonal 
					    ($i-1  == $j) ||			      //bottom leg, bottom diagonal 
						(7-$i  == $j+1 ) || 		      //top leg, to diagonal
						(7-$i  == $j)&&($i < 4)           //top leg, bottom diagonal
						){
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
					if ($j==0||$j==7||$i==$j) {
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
					if (($j == 0 || $j == 1 || $i == 0 || $i==3) || (($i == 1 && $j == 7) || ($i == 2 && $j == 7))) {
						if(!($i == 0 && $j == 7 ) && !($i == 3 && $j == 7 )){
							$colorToDisplay = $color;
							$letterToDisplay = $letter;
						}
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
					if (1) {

						$vowelToDisplay = $letter;

						$letterToDisplay = $letter;
					}
					break;
				case "T" :
					if (1) {
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
					if (($j == 3 || $j == 4) && ($i != 6)) {
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
					if ( ($i == 1 && ($j < 3 && $j > 0 )) || ($i == 2 && $j < 2) || ($i == 0 && $j == 2) || ($j>2 && $j < 5) || ($i>6) ) {
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
					if ($j == 7 ||$i == 0 || ($j == 0 && $i <= 4 ) || $i == 4) {
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