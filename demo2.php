<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$db = pg_connect("host=ec2-174-129-208-118.compute-1.amazonaws.com port=5432 dbname=d6hnv52hdi9nnk user=gpjcnwwhasdiya password=e9144a959f5174b3271698c559c6c557bce4d71494e9599fa793d33ede9b9436");
$result = pg_query($db,"SELECT * FROM Products");
?>
<table align="center">
	<tr><th align='center' width='200'>Name</th><th align='center' width='200'>Price ($)</th><th align='center' width='200'>Quantity</th><th align='center' width='200'>Image</th></tr>
</table>
<?php
echo "<table align='center'>";
while($row=pg_fetch_assoc($result)){echo "<tr>";
echo "<td align='center' width='200'>" . $row['iname'] . "</td>";
echo "<td align='center' width='200'>" . $row['price'] . " $" . "</td>";
echo "<td align='center' width='200'>";?><img src="/<?php echo $row['image']; ?>" height="150" width="150"><?php "</td>";
echo "</tr>";}echo "</table>";?>
</body>
</html>