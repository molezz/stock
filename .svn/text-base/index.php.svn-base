<html>
<head>
<meta http-equiv="Refresh" content="60">
<title>php practice</title>
</head>
<hr>
<table border="0"  width="400">
<?php
$shanghai = file("http://hq.sinajs.cn/list=s_sh000001");
$shanghai = implode($shanghai);
$shanghai = explode(",", $shanghai);
echo $shanghai[1]."   &nbsp &nbsp&nbsp".$shanghai[3]."%";
echo "<hr>";

/*$db = new mysqli("localhost","molezz","zz","stock");
$query = "select * from stock order by id" ;
$result = $db->query($query);
$rows = $db->affected_rows;
for ($i=0;$i<$rows;$i++) {
	$stock = $result->fetch_assoc();*/
@ $fp= fopen("data.dat", 'rb');
if (!$fp) {
	echo "can not open data";
	exit;
}

while (!feof($fp)) {
	$stock = fgets($fp);
	$stock = explode("\t", $stock);
	if (substr($stock[0],0,1)==6) {
		$number="sh".$stock[0];
	}
	if (substr($stock[0],0,1)==0) {
		$number="sz".$stock[0];
	} 
	$url = "http://hq.sinajs.cn/list=".$number;
	$price = file($url);
	$price = implode($price);
	$price = explode(",",$price);
	if (count($price)>1) {
		if ($price[3]>$price[1])
			$color="red";
		else if ($price[3]==$price[1])
			$color="black";
		else if ($price[3]<$price[1])
			$color="green";
			$percentage =number_format(($price[3]-$price[2])/$price[2]*100,2);
			$profit = number_format(($price[3]-$stock[1])*$stock[2],2,'.','');
			if ($stock[1]>0 && $stock[2]>0){
				$gain=number_format($profit / ($stock[1]*$stock[2])*100,2,'.','')."%";
			}
			else {
				$gain="0"."%";
			}
		if ($percentage>=0) {
			$percentage= "+".$percentage;
		}
	echo "<tr><td><a href='http://stockdata.stock.hexun.com/gghq_".$stock[0].".shtml' target=_blank>".$stock[0]."</a></td>
		<td><font color=$color>".$price[3]."</td>
		<td>".$percentage."%</font></td>
		<td>".$price[4]."</td>
		<td>".$price[5]."</td>
		<td>".$profit."</td>
		<td>".$gain."</td></tr>";
	}
}
fclose($fp);
?>
</table>
<hr>
<a href="insert.html">add</a> 
<a href="delete.php">delete</a> 
<a href="modify.php">modify</a>
<a href="editall.php">editall</a><br>
<?php 
echo date('Y-m-j H:i:s ');
?>
</html>
