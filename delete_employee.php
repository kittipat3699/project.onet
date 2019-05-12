<?php
include ("connect.php");  

$id =$_GET['id'];
mysqli_query($connect,"DELETE FROM employee_table WHERE employee_id = '$id'")
or die(mysqli_error());

header('Location: info_employee.php');
?>