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
			<p>Toy ATN</p>


</body>
</html>