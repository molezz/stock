<?php
$number=$_POST['number'];
$buyprice=$_POST['buyprice'];
$amount=$_POST['amount'];
$editdata=$number."\t".$buyprice."\t".$amount."\n";

copy("data.dat","tmp");
@ $fp1= fopen("tmp", 'rb');
if (!$fp1) {
	echo "can not open tmp";
	exit;
}
@ $fp2 = fopen("data.dat", 'wb');
if (!$fp2) {
	echo "can not open data";
	exit;
}
while (!feof($fp1)) {
	$line=fgets($fp1);
	$line0 = explode("\t", $line);
	if ($line0[0]!=$number) {
		fwrite($fp2, $line);
	}
	else {
		fwrite($fp2, $editdata);
	}
}
fclose($fp1);
fclose($fp2);

echo "stock modified<br>auto back after 2 second....";
header("refresh:1;url=index.php");

?>
