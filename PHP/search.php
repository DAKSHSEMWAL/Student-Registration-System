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
		background-repeat: repeat;
		color: #ffffff;
		padding: 14em 0em 14em;
		text-align: center;
	}
	.input{padding:8px;border:none;border-bottom:1px solid #ccc;width:20%}
	.button{border:none;outline:0;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
		table
	    {
	      border-collapse: collapse;
	    }
	    table, td
	    {
	      border: 1px solid black;
	      padding: 3px;
	    }
	    th
	    {
	      border: 1px solid cyan;
	      padding: 3px;
	    }
		</style>
	</head>
	<body >
		<div class="w3-bar w3-black w3-card-2">
	    <a href="../index1.html" class="w3-bar-item w3-button w3-padding-large w3-right">HOME</a>
	  	</div>
	  		<center>
			<div id="banner">
				<h2>STUDENT DETAILS</h2>
				<?php
				if(isset($_POST['search']))
					{
					   $con=mysqli_connect('localhost', 'root', '','student');
					   $n=$_POST["search"];
					   echo  "Details Of : <B>$n </B>\n<br>";
					   $var=mysqli_query($con, "SELECT * FROM student_info  WHERE uno like '%$n%'");
					   echo"<br><center><table border size=1>";
					   echo"<tr class='w3-black'><th><h4>uno</h4></th> <th><h4>nos<h4></th> <th><h4>eno</h4></th> 
								           <th><h4>fname</h4></th><th><h4>mname</h4></th><th><h4>mno</h4></th><th><h4>mail</h4></th></tr>";
					   while (($arr=mysqli_fetch_row($var)))
					   {
				       echo "<tr><td>$arr[4]</td> <td>$arr[3]</td> <td>$arr[5]</td>    
				       <td>$arr[8]</td><td>$arr[11]</td><td>$arr[14]</td> <td>$arr[15]</td></tr>";
					   }
					   echo"</table></center>";
					   mysqli_free_result($var);
					}
				    mysqli_close($con);
				?>
			</div>
			<
	</body>
</html>