<?php
include "config.php";

if(isset($_REQUEST['id'])){
	$id=$_REQUEST['id'];
	
	$del="DELETE FROM register WHERE id='$id'";
	
if($delete=$dba->query($del)){
	
	echo "<script>alert('Sucess');window.location.assign('register.php');</script>";
}
else
{
	echo "<script>alert('Failed');window.location.assign('register.php');</script>";
}
}
?>

