<?php
$number=$_POST['del'];
copy("data.dat","tmp");
@ $fp1= fopen("tmp", 'rb');
if (!$fp1) {
	echo "can not open data";
	exit;
}
@ $fp2 = fopen("data.dat", 'wb');
while (!feof($fp1)) {
	$line=fgets($fp1);
	$line0 = explode("\t", $line);
	if ($line0[0]!=$number) {
		fwrite($fp2, $line);
	}
}
fclose($fp1);
fclose($fp2);

echo "stock deleted<br>auto back after 2 second....";
header("refresh:1;url=index.php");
/*$db = new mysqli("localhost","molezz","zz","stock");
$query="delete from stock where ID=".$id;
$result=$db->query($query);

if ($result) {
	echo $db->affected_rows." stock deleted<br>";
	echo '<a href="index.php">home</a>';
} else {
	echo "error: nothing deleted<br>";
	echo '<input type=button onclick="javascript:window.history.back();" value="continue del">';
}
$db->close();*/
?>
