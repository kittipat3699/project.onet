
<?php 
include ('connect.php');

if(isset($_POST['update'])){

  $booking_id = $_POST['bookingId'];
  $status = $_POST['status'];
  $date = $_POST['date'];
  $end = $_POST['end'];
  $member = $_POST['member'];

  $update = mysqli_query($connect,"UPDATE booking_table set `status_seat`='".$status."',`booking_date`='".$date."',`member_id`='".$member."',`booking_endtime`='".$end."' WHERE booking_id = '".$booking_id."'");

if($update){
  echo "<script>";
  echo "alert(\"บันทึกข้อมูลเรียบร้อยแล้ว\");";
  echo "window.location = 'info_booking.php';"; //ไปหน้าเเรก
  echo "</script>";
  
}else {
  echo "<script>alert('data was not update')</script>";
}
}
?>
