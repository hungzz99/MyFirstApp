<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
</head>
<body>
<style type="text/css">
	<form>
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
	.navbg
	{
		width: 100%;
		height: 50px;
		background-color: #C6BEBE;
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
		background-color: #C6BEBE;
		align-self: auto;
	}
	.header
	{
		width: 100%;
		height: 208px;
		background-color:white;

	}

	.header img{
		max-width: 100px;
		max-height: 100px;
	}
	.banner
	{
		width: 100%;
		height: 1200px;

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
	<form/>
</style>
</body>
<body>
	<div class="Web">
		<div class="header">
			<img src="https://i.kinja-img.com/gawker-media/image/upload/s--vSY-o42Q--/c_scale,f_auto,fl_progressive,q_80,w_800/ecq5rsk3n1nolujedskk.jpg">
			<div class="button">
				  <div>

					<form action="http://localhost/singup.php">
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
					<li><a href="http://localhost/AssignmentWeb.php">Home</a></li>
					<li><a href="http://localhost/CATEGORY.php">Category</a></li>
					<li><a href="http://localhost/Admin.php">Admin</a></li>

				</ul><br>
		</div>
	</div>
		<div class="banner">
			<p>Toy ATN</p>
			<div class="list">
				<?php
				$host = 'localhost';
				$dbname = 'dbnews';
				$un = 'root';
				$pw = '';
				$port = '3306';
				$conn = new mysqli($host,$un,$pw,$dbname,$port);
				$sql = "select * from category";
				$result = $conn -> query($sql);
				$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
				for ($i = 0; $i<count($rows);$i++)
				{
					?>
					<div class="item">

						<div class="tittle"><?=$rows[$i]['tittle']?></div>
						<div class="image"><a href="productdetail.php?ProID=<?=$rows[$i]['ProID']?>"><img src="<?=$rows[$i]['image']?>"></div></a>
						<div class="tittle"><?=$rows[$i]['des']?></div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>