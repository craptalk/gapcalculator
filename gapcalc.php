<!DOCTYPE html>
<html>
<head>
	<title>Gap Difference Value Calculator</title>
</head>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">
	<fieldset>
	<legend>Gap Difference Value Calculator</legend>
	Number 1: <br>
	<input type="number" name="a" placeholder="Input first number"><br>
	Number 2: <br>
	<input type="number" name="b" placeholder="Input second number"><br>
	<input type="submit" value="Submit">
	</fieldset>
</form>
<?php 
	$a = $_POST['a'];
	$b = $_POST['b'];
	function calc($a,$b){
		$a = $a-$b;
		$b = $b+$a;
		$a = $b-$a;
		$b = $a-$b;
		$result = $b;
		return $result;
	}

	echo "<h2>Result: " . calc($a, $b) . "</h2>";
?>

</body>
</html>