<?php
include ("connect.php");  

$id =$_GET['id'];
mysqli_query($connect,"DELETE FROM order_card_table WHERE order_card = '$id'")
or die(mysqli_error());

header('Location: admin_order_card2.php');
?>