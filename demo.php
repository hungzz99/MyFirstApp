<!DOCTYPE html>
<html>
<head>
	<title>Assingment2</title>
	<style type="text/css">
	.web
	{
		width: 90%
		margin: 0 auto;
	}
	.button
	{
		float: right;
		margin:11px;
		padding-right: 40px;
	}
	.tittle
		{
			margin:10px;
		}
	.navbg
	{
		width: 100%;
		height: 50px;
		background-color:  #6EE1E5;
	}
	.buttonnav
	{
		float: right;
		font-size: 200%;
		padding-right: 5px;
	}
	.nav
	{ 
		margin-left: 350px;
		width: 70%;
		height: 50px;
		background-color: #6EE1E5;
		align-self: auto;
	}
	.header
	{
		width: 100%;
		height: 208px;
		background-color:white;
	}
	.header img{
		max-width: 90%;
		max-height: 99%;
	}
	.banner
	{
		width: 100%;
		height: 1200px;
	}
	.banner p
	{
		font-size: 80px;
		color: blue;
		text-align: center;
		
	}
		.image
		{
			margin: 10px;
		}
	.list
	{
		width: 100%;
		height: `1200px;
		padding-top: 10px;
		background-color: white;
	}
	.item
	{
		margin : 10px;
		padding: 5px;
		background-color: white;
		width: 23%;
		height: 320px;
		float:left;
		box-sizing: border-box;
		text-align: center;
	}
	.nav ul
	{
		margin: 0 auto;
		padding: 1px 30px;
		list-style: none;
		align-content: auto;
	}
	.nav a
	{
		padding: 0 10px;
		text-decoration: none;
		font-size: 30px;
		color: black;
		display: block;
		line-height: 50px;
	}
	.nav li
	{	margin: auto;
		float: left;
		padding: 0px 20px;
			
	}
	.nav a:hover
	{
		background-color: #52CA3A;
		color: black;
	}
</style>
</head>
<body>
	<div class="Web">
		<div class="header">
			<img src="https://i.ytimg.com/vi/Nn21sB-THvc/maxresdefault.jpg">
			<div class="button">
				  <div>

					<form action="https://hungzz99.herokuapp.com/loign.php">
						Hot line : 099-888-999
						<input type="button" name="SignIn" value="Login">
					</form>
					
				</div>
			</div>			
		</div>
		<div class="navbg">
			<form action="search.php" method="GET">
			<div class="buttonnav"><input type="text" name="keyword" placeholder="Search...">
				<input type="submit" name="Search" value="Search"></div>
			</form>
			<div class="nav">
				<ul>
					<li><a href="https://hungzz99.herokuapp.com/">Home</a></li>
					<li><a >Category</a></li>
					<li><a >Admin</a></li>
					<li><a >FeedBack</a></li>

				</ul><br>
		</div>
	</div>
		<div class="banner">
			<p>Toy Store</p>
			<div class="list">
				<?php
$db = pg_connect("host=ec2-174-129-208-118.compute-1.amazonaws.com port=5432 dbname=d6hnv52hdi9nnk user=gpjcnwwhasdiya password=e9144a959f5174b3271698c559c6c557bce4d71494e9599fa793d33ede9b9436");
$result = pg_query($db,"SELECT * FROM Products");
?>
				<?
				while ($row=pg_fetch_assoc($result))
				{
				?>
					<div class="item">
						<div class="tittle"><?$row['iname']?></div>
						<div class="image"><img src="<?$row['image']?>"></div>
						<div class="tittle"><?$row['price']?></div>
					</div>
				<?
				}
				?>
			</div>
		</div>


</body>
</html>