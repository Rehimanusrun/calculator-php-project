<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
</head>
<body bgcolor="black">
	<center><h1 class="hed">PHP CALCULATOR</h1></center>
	<center>
	<div>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" align="center">
		<input type="number" name="num1" placeholder="ENTER NUMBER ONE" required><br>
		<br>
		<br>
		<input type="number" name="num2" placeholder="ENTER NUMBER TWO" required><br>
		<br>
		<br>
		<select name="operations" id="">
			<option value="">OPTIONS</option>
			<option value="add">ADDITION</option>
			<option value="sub">SUBTRACTION</option>
			<option value="mul">MULTIPLICATION</option>
			<option value="div">DIVISION</option>
		</select>
		<br>
		<br>
		<br>
		<br>
		<button type="submit" name="calculate">CALCULATE</button>
		<br>
		<br>
		<br>
		<input type="text" name="res" placeholder="YOUR RESULT IS HERE" readonly value="<?php echo isset($result)? htmlspecialchars($result) : ''; ?>">
		<?php
		if(isset($_POST['calculate'])){
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operations = $_POST['operations'];

			$result = 0;
			$error = "";

			switch($operations){
				case 'add':
					$result = $num1 + $num2;
					break;
				case 'sub':
					$result = $num1 - $num2;
					break;
				case 'mul':
					$result = $num1 * $num2;
					break;
				case 'div':
					if($num2 != 0){
						$result = $num1 / $num2;
					} else {
						$error = "Can't divide by 0!";
					}
					break;
			}

			if ($error) {
				echo "<p style='color:red;'>$error</p>";
			} else {
				echo "<script>document.getElementsByName('res')[0].value = '$result';</script>";
			}
		}
		?>
	</form>
	</div>
	</center>
</body>

<style>
	div {
		width: 700px;
		height: 400px;
		background-image: url('neon2.jpg');
		background-size: cover;
	}
	form {
		padding: 40px;
	}
	.hed {
		color: #fff;
		text-shadow:
			0 0 7px #fff,
			0 0 10px #fff,
			0 0 21px #fff,
			0 0 42px #0fa,
			0 0 82px #0fa,
			0 0 92px #0fa,
			0 0 102px #0fa,
			0 0 151px #0fa;
	}
</style>
</html>
