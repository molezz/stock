<?php
$all = $_POST['editsave'];
@ $fp=fopen("data.dat",'wb');
if (!$fp) {
	echo "can not open data";
	exit;
}

fwrite($fp, $all);
fclose($fp);
echo "saving...<br>auto back after 2 second....";
header("refresh:1;url=index.php");
?>