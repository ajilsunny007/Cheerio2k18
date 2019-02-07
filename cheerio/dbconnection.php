<?php
$con=@mysql_connect("localhost","root","")or die("unable to connect");
@mysql_select_db("adios",$con)or die("not select table");
//echo 'ok db connecter';
?>
