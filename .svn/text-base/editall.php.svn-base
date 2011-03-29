<head><title>edit all</title></head>

<?php
@ $fp=fopen("data.dat",'rb');
if (!$fp) {
	echo "can not open data";
	exit;
}
$size = filesize("data.dat");
$all = fread($fp,$size);
?>
<form action="editsave.php" method=post>
<textarea cols="20" rows="10" name=editsave><?php echo $all?></textarea><br>
<input type=submit value=save>
<input type=reset value=reset>
<input type="button" value="cancel" onclick="window.location.href='index.php'"></form>
<?php fclose($fp);?>