<?php
session_start();
include("../dbconnection.php");
 $u_name=$_SESSION['u_name'];
 $u_pass=$_SESSION['u_pass'];
 $u_type=$_SESSION['type'];
$sql="select* from tbl_login where username='$u_name' and password='$u_pass'";
$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
if($rowcount !=0 && $u_type=='1')
{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("admin_header.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

	<center>
		<div align="center" style="height:auto;width:50%;background:#33FFFF;padding:60px;border-radius:20px;margin-top:80px;opacity:0.8;" >
		<font size="+2" face="Georgia">
					Just like golds and diamonds are uncovered from the earth, the highly skilled, full of good deeds and sharp minded students are uncovered from the Amal Jyothi College of Engineering, Kanjirappally. Wisdom appears from their pure and peaceful mind. To get admission here students need the wisdom and the guidance of virtue. From the first day of college when we took admission and entered to the hostel, continuously we have been guided by our seniors about this precious part of our life in the college.
		
		
<!--			<div ><font size="8" color="#000000" face="Times New Roman, Times, serif"><b> WELCOME ADMIN</b></font></div>

-->		</font>	</div>





		</div>
	</center>
<body>
</body>
	<?php
include("footer.php");
?>
</html>
<?php
}
else
		{
			header("location:../index.php?error=Wrong password!!");
		}
?>
