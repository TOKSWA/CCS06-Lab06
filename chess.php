<!DOCTYPE html>
<html>
<head>
	<title>Chessboard</title>
	<style type="text/css">
		.black {
			background-color: #769656;
		}
		.white {
			background-color: #eeeed2;
		}
		.piece {
			font-size: 60px;
			line-height: 60px;
			text-align: center;
		}
		.white-piece {
			color: white;
		}
		.black-piece {
			color: #769656;
		}
	</style>
</head>
<body>
	<table>
		<?php
		// declare array for chess pieces
		$pieces = array(
			"&#9820;", "&#9822;", "&#9821;", "&#9819;", "&#9818;", "&#9821;", "&#9822;", "&#9820;",
			"&#9823;", "&#9823;", "&#9823;", "&#9823;", "&#9823;", "&#9823;", "&#9823;","&#9823;",
			"&#9814;", "&#9816;", "&#9815;", "&#9813;", "&#9812;", "&#9815;", "&#9816;","&#9814;",
		);
	// loop through rows and columns to generate chessboard
	for ($row = 1; $row <= 8; $row++) {
		echo "<tr>";
		for ($col = 1; $col <= 8; $col++) {

			// determine class for square (black or white)
			$class = ($row + $col) % 2 == 0 ? "white" : "black";
			echo "<td class='$class'>";

			// add piece if on starting position
			if (($row == 1 || $row == 8) && ($col == 1 || $col == 8)) {
				$index = $col == 1 ? 0 : 7;
				$class = $row == 1 ? "black-piece" : "white-piece";
				echo "<div class='piece $class'>".$pieces[$index]."</div>";
			} else if (($row == 2 || $row == 7) && $col >= 1 && $col <= 8) {
				$class = $row == 2 ? "black-piece" : "white-piece";
				echo "<div class='piece $class'>".$pieces[8]."</div>";
				}
			echo "</td>";
			   }
		   echo "</tr>";
		   }
		?>
	</table>
</body>
</html>
