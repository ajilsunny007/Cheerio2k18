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
<title>Untitled Document</title>
<script language="javascript1.5" type="text/javascript">

function validationForm(signup)
{
	if (document.signup.category.value=="Select")
	{
        alert ("Select the Name.");
        return false;
    }
	if (document.signup.photos.value=="")
    {
        alert ("Please select Single photo.");
        return false;
    }
		 if (document.signup.photog.value=="")
    {
        alert ("Please select Group photo.");
        return false;
    }
}
</script>
</head>

<body>
<div style="height:550px ">

<div style="border:solid 1px ;height:200px;right:0;left:0;display:inline;folat:left;">
<style>
	.input{border:solid 1px #000;padding:10px;font-size:18px;width:300px;border-radius:15px;margin-bottom:5px;}
</style>
<center>
<div style="background-color:#FFFFFF;height:auto;width:15%">
<?php
if(isset($_GET['text']))
{
	$text=$_GET['text'];
	echo "<font color=red size=5 style='border-radius:15px;'>".$text;
}
?>

</div>
<div  style=" margin-top:30px; background:#00FFFF; width:50%;padding:20px;border-radius:20px; opacity:0.9;">
	<form id="signup" action="addPhoto_action.php" method="post" name="signup" onsubmit="return validationForm()" enctype="multipart/form-data">
	<font color="#000000" face="Times New Roman, Times, serif" size="9">ADD PHOTO</font><br>
	<div style="margin-top:0px;">
	<table>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Name : </font>
	</td>
	<td>
	<?php
			$sql='SELECT * FROM tbl_details where photopaths=""' ;
			$result=mysql_query($sql,$con);
			?>
	
	<select name="sname" id="sname" style="width:320px;border:solid 1px #000;padding:10px;font-size:18px;border-radius:15px;margin-bottom:5px;">
	<option>Select</option>
	
	<?php

		while($row=mysql_fetch_array($result))
		{
			$name=$row['name'];
			$id=$row['id'];
			echo "<option style=font-size:14px;color:#000000 value='$id'>$name</option>";
			
		}

		echo"</select>";
	
	?>
	</td>
	<br>
	</tr>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Photo Single : </font>
	</td>
	<td>
	<input class="input" type="file" id="photos" name="photos" placeholder="" >
	</td><br>
	</tr>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Photo Group : </font>
	</td>
	<td>
	<input class="input" type="file" id="photog" name="photog" placeholder="" >
	</td><br>
	</tr>
	</table><br />
	<input type="submit" name="upwd"  value="ADD" style="background:#00FF00;border:solid 1px #000;padding:10px;font-size:18px;width:200px;border-radius:15px;margin-bottom:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
	</form>
</div>
</center>
<div>
</div>
</div>
</div>
</body>
</html>
<?php
}
else
		{
			header("location:../index.php?error=Wrong password!!");
		}
?>

