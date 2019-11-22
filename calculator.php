<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="calc.css">
</head>
<body>
	<form method="POST">
		<h1>Calculator</h1>
		<input type="number" name="n1"><h2> First number</h2><br>
		<input type="number" name="n2"><h2> Second number</h2><br>
		<?php
		if (isset($_POST["btn"])){
		if (!empty($_POST["n1"]) && !empty($_POST["n2"])){
			switch ($_POST["btn"]) {
				case "add":
						echo "<h4>" . ($_POST["n1"] + $_POST["n2"]) . "</h4>";
					break;
				case "subtract":
						echo "<h4>" . ($_POST["n1"] - $_POST["n2"]) . "</h4>";
					break;
				case "multiply":
						echo "<h4>" . ($_POST["n1"] * $_POST["n2"]) . "</h4>";
					break;
				case "divide":
						echo "<h4>" . ($_POST["n1"] / $_POST["n2"]) . "</h4>";
					break;
				case "modulo":
						echo "<h4>" . ($_POST["n1"] % $_POST["n2"]) . "</h4>";
					break;
				default:
					echo "no proper values given";
					break;
			}	
		}
		else
			echo "<h4>no proper values given</h4>";
	}
		?>
		<div class="sub">
			<input class="submit" type="submit" name="btn" value="add">
			<input class="submit" type="submit" name="btn" value="subtract">
			<input class="submit" type="submit" name="btn" value="multiply">
			<input class="submit" type="submit" name="btn" value="divide">
			<input class="submit" type="submit" name="btn" value="modulo">
		</div>
	</form>
</body>
</html>