<?php
session_start();
include("../dbconnection.php");
 $u_name=$_SESSION['u_name'];
 $u_pass=$_SESSION['u_pass'];
 $u_type=$_SESSION['type'];
$sql="select* from tbl_login where username='$u_name' and password='$u_pass'";
$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
if($rowcount !=0 && $u_type=='0')
{

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("student_header.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

	<center>
		<div align="center" style="height:490px;width:50%;background:url(../images/16.jpg);background-size:100%;padding:60px;border-radius:50px;margin-top:50px;opacity:1;" >
		<font size="+2" style="font-style:italic" color="#FFFFFF" face="Georgia">
					Just like golds and diamonds are uncovered from the earth, the highly skilled, full of good deeds and sharp minded students are uncovered from the Amal Jyothi College of Engineering, Kanjirappally. Wisdom appears from their pure and peaceful mind. To get admission here students need the wisdom and the guidance of virtue. From the first day of college when we took admission and entered to the hostel, continuously we have been guided by our seniors about this precious part of our life in the college.
		
		</font>	</div>
		</div>
		<div style="width:80%;border:#000000 solid 3px;height:auto">
		<img src="../images/FRrubin.jpg" width="30%" height="50%" style="margin-top:3%;border-radius:20px"/>
		<img src="../images/jetty miss.jpg" width="30%" height="50%" style="margin-left:3%;border-radius:20px"/>
		<img src="../images/sruthi miss.jpg" width="30%" height="50%" style="margin-left:3%;border-radius:20px"/>
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
