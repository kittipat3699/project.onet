<?php
include ("connect.php");  

$id =$_GET['id'];
mysqli_query($connect,"DELETE FROM order_card_table WHERE order_card = '$id'")
or die(mysqli_error());

header('Location: member_history_card.php');
?>