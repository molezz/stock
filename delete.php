<html>
<head><title>delete</title></head>
<form action="delconfirm.php" method=post>
<table border=1 width=200>
<?php
@ $fp= fopen("data.dat", 'rb');
if (!$fp) {
	echo "can not open data";
	exit;
}

while (!feof($fp)) {
	$stock = fgets($fp);
	$stock = explode("\t", $stock);
	if (count($stock)>1) {
		echo "<tr><td><input type=radio name=del value=".$stock[0]."></td><td>".$stock[0]."</td></tr>";
	}	
}
fclose($fp);
?>
</table>
<input type="submit" value="delete"><input type="button" value="cancel" onclick="window.location.href='index.php'">
</form>


</html>
