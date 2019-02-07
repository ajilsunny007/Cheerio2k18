
<?php
include("../dbconnection.php");
$u_name=$_POST['sname'];
$pic=$_POST['photog'];
echo $u_name;
echo $pic;
$sql="select* from tbl_details where name='$u_name'";
$result1=mysql_query($sql,$con);
$rowcount=mysql_num_rows($result1);
$new_file_image =$_FILES['photos']['name'];
$new_file_image1 =$_FILES['photog']['name'];
echo $new_file_image;
/*move_uploaded_file($_FILES['photos']['tmp_name'],"photo/".$new_file_image);
move_uploaded_file($_FILES['photog']['tmp_name'],"photo/".$new_file_image1);
mysql_query("UPDATE tbl_details SET photopaths='$new_file_image',photopathg='$new_file_image1' WHERE id=$u_name");
header("location:addPhoto.php?text=Details Added");*/
?>