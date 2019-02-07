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
<?php
include("admin_header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<br><br>
	
	<center>
	<div align="center" style="background:#3366CC;height:auto;width:90%;padding:30px;margin-top:80px;border-radius:20px;opacity:0.9;">
		<div ><font size="8" color="#FFFFFF" face="Times New Roman, Times, serif"><b> STUDENTS </b></font></div>
		
	<?php
			include("../dbconnection.php");
			$sql="SELECT * FROM tbl_details order by name";
			$result=mysql_query($sql,$con);
			?>
			<center>
			<table cellpadding="10px" border=5 width="90%" style="border:solid #FF0000 5px;">
			
			<tr><td  ><font color="#FFFF33" size="+3" ><center>SlNo</center></font><td  ><font color="#FFFF33" size="+3" ><center>Photo</center></font>
			<td  ><font color="#FFFF33" size="+3" ><center>Name</center></font><td> <font size="+3" color="#FFFF33"><center>NickName</center></font><td><font size="+3" color="#FFFF33"><center>Email</center></font>
			<td> <font size="+3" color="#FFFF33"><center>PhoneNO</center></font><td><font size="+3" color="#FFFF33"><center>Action</center></font>
			<?php
$rowcount=1;
if($rowcount !=0 )
	{	$i=1;
		while($row=mysql_fetch_array($result))
		{
			$name=$row['name'];
			$Nname=$row['nname'];
			$email=$row['email'];
			$phone=$row['phone'];
			$path=$row['photopaths'];
			$details=$row['pdetails'];
			echo "<form method='post' action='delete.php'>";
			echo "<tr><td><center>$i</center><td><center><img src='photo/$path' style='height:80px;width:120px;border-radius:20px'></center><td>$name<td>$Nname<td>$email<td>$phone
			<td><center><input type='submit' value='Delete' name='submit' style='color:blue; border-radius:5px ' ></center>";
			echo"<input type='hidden' value='$name' name='id'>";
			echo"</form>";
			
			$i++;
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
