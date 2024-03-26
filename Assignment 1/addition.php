
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$fullname=$fname." ".$lname;
	$num1=$_POST['fnumber'];
	$num2=$_POST['snumber'];
	$sum=$num1+$num2;
	echo "<p>your full names are $fullname</p>";
	echo "<p>the sum is $sum</p>";
}
?>
</body>
</html>