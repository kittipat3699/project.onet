<?php
include ("connect.php");  

$id =$_GET['id'];
mysqli_query($connect,"DELETE FROM booking_table WHERE booking_id = '$id'")
or die(mysqli_error());

header('Location: member_history_seat.php');
?>