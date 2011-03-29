<head>
<title>edit data</title></head>

<?php
$number = $_POST['number'];
@ $fp= fopen("data.dat", 'rb');
if (!$fp) {
	echo "can not open data";
	exit;
}

while (!feof($fp)) {
	$stock = fgets($fp);
	$stock = explode("\t", $stock);
	if ($stock[0]==$number) {
		$buyprice = $stock[1];
		$amount = $stock[2];
		?>
		<form action=modifysave.php method=post>
		<input type=hidden name=number value=<?php echo $number?>>
		<table>
		<tr><td><?php echo $number ?></td></tr>
		<tr><td>buyprice: </td><td><input type=text name=buyprice value=<?php echo $buyprice?>></td></tr>
		<tr><td>amount: </td><td><input type=text name=amount value=<?php echo $amount?>></td></tr>
		</table>
		<input type=submit value=ok><input type = reset value=reset><input type="button" value="cancel" onclick="window.location.href='modify.php'">
		</form>
		<?php 
	}
}
fclose($fp);
?>