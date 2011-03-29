<html>
<?php
$number=$_POST['number'];
$buyprice=$_POST['buyprice'];
$amount=$_POST['amount'];

if (!$number ) {
	echo "you have not enter all the details.<br>";
	echo '<input type=button onclick="javascript:window.history.back();" value="back">';
	exit;
}
if (!is_numeric($number)) {
	echo "input error, not number<br>";
	echo '<input type=button onclick="javascript:window.history.back();" value="back">';
	exit;
}

if (!$buyprice) {
	$buyprice = 0;
}

if (!$amount ) {
	$amount = 0;
}
$insert=$number."\t".$buyprice."\t".$amount."\n";

@ $fp = fopen("data.dat",'ab');
flock($fp, LOCK_EX);
if (!$fp) {
	echo "can not open data";
	exit;
}
fwrite($fp, $insert,strlen($insert));
flock($fp, LOCK_UN);
fclose($fp);
echo "stock inserted<br>auto back after 2 second....";
header("refresh:1;url=index.php");


/*$db = new mysqli('localhost','molezz','zz','stock');

if (mysqli_connect_errno()) {
	echo "error: could not connect database";
	exit;
}

$query = "insert into stock set number='$number', buyprice=$buyprice, amount=$amount";
$result = $db->query($query);

if ($result) {
	echo $number." inserted<br>";
	echo '<a href="index.php">home</a>';
} else {
	echo "error: nothing added<br>";
	echo '<input type=button onclick="javascript:window.history.back();" value="back">';
}
$db->close();*/
?>
</html>
