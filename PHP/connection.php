<!DOCTYPE html>
<html>
<head>
	<title>No Of Record Inserted</title>
	<link rel="icon" href="../Images/gehu.jpg">
</head>
	<body>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="../JS/jquery.min.js"></script>
		<script src="../JS/skel.min.js"></script>
		<script src="../JS/skel-layers.min.js"></script>
		<script src="../JS/init.js"></script>
		<link rel="stylesheet" type="text/css" href="../CSS/w3.css">	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<noscript>
			<link rel="stylesheet" href="../CSS/skel.css" />
			<link rel="stylesheet" href="../CSS/style.css" />
			<link rel="stylesheet" href="../CSS/style-xlarge.css" />
		</noscript>
		<style>
			a{
				text-decoration: none;
			}
				#banner {
		background-image: url(../Images/dark_tint.png), url(../Images/back.gif);
		background-size: cover;
		background-repeat: repeat-y;
		color: #ffffff;
		padding: 14em 0em 14em;
		text-align: center;
	}
	.input{padding:8px;border:none;border-bottom:1px solid #ccc;width:20%}
	.button{border:none;outline:0;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}

		</style>
	</head>
	<body>
		<div class="w3-bar w3-black w3-card-2">
	    <a href="../index1.html" class="w3-bar-item w3-button w3-padding-large w3-right">HOME</a>
	  	</div>
			<div id="banner">
				<h1> NO OF STUDENTS THAT REGISTERED</h1>
				<?php  
					$con=mysqli_connect("localhost","root","","student");	
					$result = mysqli_query($con, "SELECT  COUNT(*) as count FROM student_info"

				);
				while ($row = mysqli_fetch_array($result)) 
				{
				    $var = $row['count'];
				    echo "<br><h2>" .$var. " users.</h2>";
				}
				?>
				<form action="search.php" method="post">
					Search <input class="input" type="text" name="search" placeholder="Enter University Roll No"/>
					<input class="button w3-black" type="submit" value="Submit" />
				</form>
			</div>
	</body>
</html>