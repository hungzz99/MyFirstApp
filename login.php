<?php
session_start();
?>
<?php
	$db = pg_connect("host=ec2-174-129-208-118.compute-1.amazonaws.com port=5432 dbname=d6hnv52hdi9nnk user=gpjcnwwhasdiya password=e9144a959f5174b3271698c559c6c557bce4d71494e9599fa793d33ede9b9436");
	
	$query = "SELECT * FROM login WHERE users='$_POST[uname]' and pass='$_POST[psw]'";
	$result = pg_query($db,$query);
	$count = pg_num_rows($result);
	
	if($count==1){
	$_SESSION['user'] = true;
	    
	echo "<meta http-equiv='refresh' content='0;url=admin.php' />";
	}else{
	echo "<meta http-equiv='refresh' content='0;url=loign.php' />";
	}
?>