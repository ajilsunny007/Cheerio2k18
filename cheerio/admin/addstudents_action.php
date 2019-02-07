<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>

<?php
include("../dbconnection.php");
$u_name=$_POST['fname'];
$sql="select* from tbl_details where name='$u_name'";
$result1=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result1);
$u_email=$_POST['email'];
$u_contact=$_POST['contact'];
$u_Nname=$_POST['Nname'];
$u_dob=$_POST['dob'];
$u_song=$_POST['song'];
$u_details=$_POST['details'];
$new_file_image =  time().$_FILES['photos']['name'];
$new_file_image1 =  time().$_FILES['photog']['name'];
if($rowcount =='1')

{
	header("location:addstudents.php?text=Already Exist!!!");
}
else
{
move_uploaded_file($_FILES['photos']['tmp_name'],"photo/".$new_file_image);
move_uploaded_file($_FILES['photog']['tmp_name'],"photo/".$new_file_image1);
mysql_query("insert into tbl_details values('','$u_name','$u_Nname','$u_email','$u_contact','$u_dob','$new_file_image','$new_file_image1','$u_song','$u_details')");
header("location:addstudents.php?text=Details Added");
}

?>
</html>