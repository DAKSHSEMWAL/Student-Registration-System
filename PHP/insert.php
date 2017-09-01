<!DOCTYPE html>
<html>
<head>
	<title>Record Insert</title>
</head>
<body>
	<?php
		$con=mysqli_connect("localhost","root","","student");
		$sql="INSERT INTO student_info(dor,frno,dofd,nos,uno,eno,course,batch,fname,focc,fmno,mname,mocc,mmno,mno,mail,ladd,padd)
							VALUES('$_REQUEST[dor]','$_REQUEST[frno]','$_REQUEST[dofd]','$_REQUEST[nos]','$_REQUEST[uno]','$_REQUEST[eno]','$_REQUEST[course]','$_REQUEST[batch]','$_REQUEST[fname]','$_REQUEST[focc]','$_REQUEST[fmno]','$_REQUEST[mname]','$_REQUEST[mocc]','$_REQUEST[mmno]','$_REQUEST[mno]','$_REQUEST[mail]','$_REQUEST[ladd]','$_REQUEST[padd]')";

	if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
	?>
</body>
</html>