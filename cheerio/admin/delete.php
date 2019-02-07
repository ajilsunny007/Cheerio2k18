<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>cherio 2K18</title>
</head>

<body>
</body>
</html>
<?php
include("../dbconnection.php");
			$sql="SELECT * FROM tbl_details";
			$result=mysql_query($sql,$con);


if(isset($_POST['id']))
{
			$name=$_POST['id'];
			$sql="DELETE FROM `tbl_details` WHERE name='$name'";
			$result=mysql_query($sql,$con);
			header('location:./admin_studentlist.php');
	
}

?>
