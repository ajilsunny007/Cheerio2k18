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
<?php
include("student_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

	
	<center>
	<div align="center" style="background:#3366CC;height:auto;width:85%;padding:30px;margin-top:80px;border-radius:20px;opacity:1.0;">
		<div ><font size="8" color="#e74c3c" face="Times New Roman, Times, serif"><b> MCA-LE 2016-18 Batch </b></font></div>
		<br />
	<?php
			include("../dbconnection.php");
			$sql="SELECT * FROM tbl_details order by name";
			$result=mysql_query($sql,$con);
			?>
			<center>
			<?php
			$i=0;
			$rowcount=1;
			if($rowcount !=0 )
			{	
			while($row=mysql_fetch_array($result))
			{
			if($i<5)
			{
			$name=$row['name'];
			$Nname=$row['nname'];
			$email=$row['email'];
			$phone=$row['phone'];
			$path=$row['photopaths'];
			$details=$row['pdetails'];
			?>
			<form method='post' action='details.php' style="display:inline-block;">
			<div style="height:auto;width:180px;border:#000000 solid 5px;display:table;border-radius:10px" >
			<?php echo"<center><img src='../admin/photo/$path' style='height:120px;width:180px;border-radius:10px'></center>";
			echo"<center><input type='submit' size='500px' style='font-size:18px;font-family:Georgia;color:#000000;background-size:100%;font-style:italic;background:url(../images/14.jpg);width:180px;height:50px;' value='$name'/></center> <input type='hidden' value='$name' name='name'>"; ?>
			</div>
			</form>
			<?php 
			}
			else
			{
			?>
			<br />
			<?php
			$i=0;
			$name=$row['name'];
			$Nname=$row['nname'];
			$email=$row['email'];
			$phone=$row['phone'];
			$path=$row['photopath'];
			$details=$row['pdetails'];
			?>
			<form method='post' action='details.php' style="display:inline-block;">
			<div style="height:200px;width:200px;border:#000000 solid 5px;display:table" >
			<?php echo"<center><img src='../admin/photo/$path' style='height:150px;width:210px;border-radius:10px'></center>";
			echo"<center><input type='submit' size='500px' style='font-size:25px;font-family:Georgia;font-style:italic;color:#000000;background-color:#00FF00;width:210px;height:50px;' value='$name'/></center> <input type='hidden' value='$name' name='name'>"; ?>
			</div>
			</form>
			</a>
			<?php
			}
		}

		echo"</table>";
		echo"</center>";
	}
	?>
	
	
	</div>
	</center>
	
</div>

</div>
	<?php
include("footer.php");
?>
</body>
</html>
<?php
}
else
		{
			header("location:../index.php?error=Wrong password!!");
		}
?>
