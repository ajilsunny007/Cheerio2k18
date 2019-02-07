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
<title>VEEDU.com</title>
<link rel="stylesheet" type="text/css" href="style.css">

<script language="javascript1.5" type="text/javascript">

function validationForm(signup)
{
	if (document.signup.fname.value=="")
    {
        alert ("Please fill in your name.");
        return false;
    }
	if (document.signup.Nname.value=="")
	{
        alert ("Please fill in your NickName.");
        return false;
    }
	if (document.signup.email.value=="")
    {
        alert ("Please fill in your email.");
        return false;
    }
	if (document.signup.dob.value=="")
	{
        alert ("Please fill Date of Birth.");
        return false;
    }
	if (document.signup.contact.value=="")
	{
        alert ("Please fill in your phone.");
        return false;
    }
	if(isNaN(document.signup.contact.value))
	{
		alert("Please check your number");
		return false;
	}
	if(document.signup.contact.value.length!=10)
	{
		alert("Enter 10 digit number");
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
	if (document.signup.song.value=="")
    {
        alert ("Please fill in your Song.");
        return false;
    }
	if (document.signup.details.value=="")
    {
        alert ("Please fill in your Details.");
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
<div  style=" margin-top:30px; background:#00FFFF; width:45%;padding:20px;border-radius:20px; opacity:0.9;">
	<form id="signup" action="addstudents_action.php" method="post" name="signup" onsubmit="return validationForm()" enctype="multipart/form-data">
	<font color="#000000" face="Times New Roman, Times, serif" size="9">Create new account</font><br>
	<div style="margin-top:-150px;">
	<table>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Name : </font>
	</td>
	<td>
	<input class="input"  type="text" id="fname" name="fname" placeholder="Full name" >
	</td><br>
	</tr>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">NickName : </font>
	</td>
	<td>
	<input class="input"  type="text" id="Nname" name="Nname" placeholder="NickName" >
	</td><br>
	</tr>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Email : </font>
	</td>
	<td>
	<input class="input"  type="email" id="email" name="email" placeholder="Email" >
	</td><br>
	</tr>
	
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">DOB : </font>
	</td>
	<td>
	<input class="input"  type="text" id="dob" name="dob" placeholder="Date Of Birth" >
	</td><br>
	</tr>
	
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Phone : </font>
	</td>
	<td>
	<input class="input"  type="text" id="contact" name="contact" placeholder="Phone Number" >
	</td><br>
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
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Song : </font>
	</td>
	<td>
	<textarea id="song" name="song" rows="3" cols="38px" placeholder="  Dedicated Song" style="border-radius:20px;"></textarea> 
	</td><br>
	</tr>
	<tr>
	<td>
	<font size="5" face="Times New Roman, Times, serif" color="#000000">Person Details : </font>
	</td>
	<td>
	<textarea id="details" name="details" rows="6" cols="38px" placeholder="  Peron Description" style="border-radius:20px;"></textarea> 
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
