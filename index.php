<?php
include('fontion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Concour SONATEL ACADEMIE</title>
</head>
<body>
	<form method="POST" action="">
		<input type="text" name="num1"><br/><br/>
		<input type="text" name="num2"><br/>
		<input type="submit" name="valider">
	</form>
<?php
	if (isset($_POST['valider'])) {
		extract($_POST);
		echo test::repeter($num1, $num2);
	}
	
?>
</body>
</html>