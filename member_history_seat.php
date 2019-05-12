<?php 
include('selectnav.php');

if ($_SESSION["status"] != "member"){  //check session

	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}?>
<?php 
include ('connect.php');

$id = $_SESSION['UserID'];

$select = mysqli_query($connect,"SELECT * FROM booking_table WHERE member_id = '".$id."'");
$row = mysqli_fetch_assoc($select);

if(isset($_POST['submit'])){

 
  $order_card = $_POST['order_card'];
  $old_image= $row['img_card'];


  if(isset($_FILES['profile']['name']) && ($_FILES['profile']['name']!="")){
      $size = $_FILES['profile']['size'];
      $temp = $_FILES['profile']['tmp_name'];
      $type = $_FILES['profile']['type'];
      $file_name = $_FILES['profile']['name'];
      //1st delete old file
      
      //new file add to dir
      move_uploaded_file($temp,"uploads/$file_name");
  } else {
      $file_name = $old_image;
  }

  $sql = "UPDATE `booking_table` set `img_card`='".$file_name."' WHERE `order_card` = '".$order_card."'";

  $update = $connect -> query($sql);

if($update){
  // echo "<script>";
  // echo "alert(\"บันทึกข้อมูลเรียบร้อยแล้ว\");";
  // echo "window.location = 'member_history_card.php';"; //ไปหน้าเเรก
  // echo "</script>";
  
}else {
  echo "<script>alert('data was not update')</script>";
}
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="font/stylesheet.css">
  <link rel="stylesheet" href="css/min.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <title>ประวัติสั่งซื้อบัตร</title>
  <style>
    body{
      background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(255,102,0,1) 0%, rgba(254,160,44,1) 100%);
    }     
    .dropdown-menu {
    background-color:#fea02c;
    }
    #logomember{
      padding:5px
    }
    a:link {
    text-decoration: none;
    }
    table {
  table-layout: fixed;
}
   
    </style>
</head>

<body>
<br>
<div class="container">
<div class="row">
    <div class="col-8">
        <h3 style="color:white;">ประวัติจองเครื่อง </h3>
    </div>
    <!--สร้างกล่องเพื่อ create สมาชิก -->

</div>

 <!-- สร้างตารางแสดงข้อมูลสมาชิก -->
 <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th width="100" class="text-center">ที่นั่ง</th>
                <th width="200" class="text-center">เวลาที่ท่านเลือกจอง</th>
               <th width="150" class="text-center">Option</th>
              </tr>
            </thead>
            <tbody>
            <?php
// Include the database configuration file
include 'connect.php';

// Get images from the database
$query = $connect->query("SELECT * FROM booking_table WHERE member_id ='{$_SESSION['UserID']}' order by booking_seat_no desc");

if($query){
    while($row = mysqli_fetch_assoc($query)){
      
        echo '<tr class="bg-light">
                    <td align="center" style="vertical-align:center">'.$row['booking_seat_no'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['booking_endtime'].'</td>
                   
                   
                    
                      <td  align="center" style="vertical-align:center">          
                   <a class="btn btn-danger" onclick="return myFunction()" href="delete_history_seat.php?id='.$row['booking_id'].'"><i class="fas fa-trash-alt"></i> ยกเลิกจอง</a></td>
              </tr>';
?>

<?php }
}else{ ?>
    <p>Not found...</p>
<?php } ?>
            </tbody>
          </table>
</div>    <br><br><br><br>

 <!-- end table -->



<!-- Footer -->
<footer class="page-footer font-small bg-secondary disabled pt-4 mt-4">
    <div class="container-fluid text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-12 text-center" id="site-intro">
          <!-- Content -->
          <h5 class="text-uppercase">โครงงานของระบบสารสนเทศ </h5>
          <p>คณะวิทยาการจัดการ มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตหาดใหญ่</p>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/">Bootstrap.com</a>
    </div>


  </footer>
  
  <script>
      function confirmDelete(delUrl) {
      if (confirm("Are you sure you want to delete")) {
        document.location = delUrl;
        }
      }
      </script>
</body>
<!-- script -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

</html>

<script>
function myFunction() {
var r = confirm("คุณจะยกเลิกการจองหรือไม่?");
if (r == false) {
   return false;
} 
}
</script>


