<?php
include ("connect.php");  

$id =$_GET['id'];
mysqli_query($connect,"DELETE FROM member_table WHERE member_id = '$id'")
or die(mysqli_error());

header('Location: info_member.php');
?>