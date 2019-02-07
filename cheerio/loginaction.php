
<?php
session_start();
include("dbconnection.php");
$u_name=$_POST['u_name'];
$u_pass=$_POST['u_pass'];
$sql="select* from tbl_login where username='$u_name'";
$result=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result);
if($rowcount !=0 )
{
	//echo"found";
	while($row=mysql_fetch_array($result))
	{
		$name=$row['username'];
		$pass=$row['password'];
		$type=$row['type'];
		if($name==$u_name && $pass==$u_pass && $type=='1' )
		{
				$_SESSION['type']="$type";
				$_SESSION['u_name']="$name";
				$_SESSION['u_pass']="$pass";
				//header("location:../cheerio/admin/admin_home.php");
				echo "<script>location.href='admin/admin_home.php';</script>";
		}
		elseif($name==$u_name && $pass==$u_pass && $type=='0' )
			{
				$_SESSION['type']="$type";
				$_SESSION['u_name']="$name";
				$_SESSION['u_pass']="$pass";
					//header("location:../cheerio/student/student_home.php");
			echo "<script>location.href='student/student_home.php';</script>";
			}
			else
			{
				//header("location:../adios/index.php?error=Wrong password!!");
				echo "<script>location.href='index.php?error=Wrong password!!';</script>";
			}
	
		
	}
}
else
{
	//header("location:../cheerio/index.php?error=Username not found!!");
	echo "<script>location.href='index.php?error=Username not found!!';</script>";
}
//echo $rowcount;
//echo $u_id;
//echo $u_pass;
?>