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
$name=$_POST['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADIOS</title>
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body style="background-image:url(../images/201png);background-repeat:no-repeat;background-size:100%;">

<a href="student_studentlist.php"><img src="../images/4.png" height="80px" width="80px" style="position:fixed;left:0%;top:0%" /></a>


<?php
$sql="select* from tbl_details where name='$name'";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
			$name=$row['name'];
			$Nname=$row['nname'];
			$email=$row['email'];
			$phone=$row['phone'];
			$dob=$row['dob'];
			$paths=$row['photopaths'];
			$pathg=$row['photopathg'];
			$song=$row['song'];
			$details=$row['pdetails'];

?>
	<div style="height:980px;width:1340px;background:url(../images/20.png);background-size:100%;background-repeat:no-repeat">
	<div style="height:70px;width:auto"></div>
		<div style="position:relative; left:165px;top:20px;height:auto;width:320px">
			<?php echo "<center><img style='border-radius:10px'; src='../admin/photo/$paths' height='250px' width='270px' /></center>";?>
		</div>
		<div style="position:relative; left:10%;top:6%;width:370px;height:70px;">
			<center><b><font style="width:auto"  face="Century" size="+3" color="#000066"><?php echo $Nname ?></font></b></center>
		</div>
		<div  style="position:relative;left:58%;top:-25%; height:20%;width:500px;">
		  
		  <div style="position:relative;left:0px;top:10px">
		 <font  face="Century" size="+2" color="#000066">Name : <?php echo $name ?></font>
		</div>
		<div style="position:relative;left:px;top:20px">
		 <font  face="Century" size="+2" color="#000066">DOB :  <?php echo $dob ?></font>
		</div>
		<div style="position:relative;left:px;top:30px">
		 <font  face="Century" size="+2" color="#000066">Email :  <?php echo $email ?></font>
		</div>
		<div style="position:relative;left:0px;top:40px">
		 <font  face="Century" size="+2" color="#000066">Phone :  <?php echo $phone ?></font>
		</div>
		</div>
		
		<div style="position:relative;left:5%;top:0%;width:90%;height:auto;">
		<div style="height:auto;width:38%;position:relative;left:2%;top:5%;width:40%;">
		<center><p><font face="Times New Roman, Times, serif" size="+2" color="#000000"> <?php echo $details ?> </font></p></center>	
		</div>
		<div style="height:200px;width:38%;position:absolute;left:55%;top:0%;width:40%;">
		<div style="position:relative; left:50px;top:0px;height:260px;width:442px;border:#000000 solid 6px;border-radius:20px">
			<?php echo "<center><img style='border-radius:13px'; src='../admin/photo/$pathg' height='250px' width='430px' /></center>";?>
		</div>
		<div style="position:absolute; left:0%;top:135%;height:150px;width:540px;border-radius:20px">
				<center><p><font face="Century" size="+1" color="#000000"> <?php echo $song ?> </font></p></center>	

		</div>
		</div>
		
		</div>
	</div>	
	<?php
	}
	?>	
</body>
<div align="center" style="background-color:#CC0000;width:1340px">
<font size="+1" face="Times New Roman, Times, serif" color="#FFFFFF">Designed By,</font><br />
<font size="+1" face="Times New Roman, Times, serif" color="#FFFFFF">MCA-LE 2017-19 Batch</font>
</div>
</html>
<?php
}
else
		{
			header("location:../index.php?error=Wrong password!!");
		}
?>