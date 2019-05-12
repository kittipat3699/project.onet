<?php 
include('selectnav.php');

if ($_SESSION["status"] == "owner" and $_SESSION["status"] == "employee" ){  //check session

	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
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
  <title>หน้าแสดงข้อมูลสมาชิก</title>
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
<div class="container">
<div class="row">
    <div class="col-8">
        <h3 style="color:white;">จัดการสมาชิก </h3>
    </div>
    <!--สร้างกล่องเพื่อ create สมาชิก -->
    <div class="col-4">
        <a href="admin_add_member.php"><button type="button" class="btn btn-warning btn-lg btn-block"><i class="fas fa-plus-circle"></i> เพิ่มสมาชิกใหม่</button><br></a>
    </div>
</div>

 <!-- สร้างตารางแสดงข้อมูลสมาชิก -->
 <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th width="50" class="text-center">#</th>
                <th width="100" class="text-center">รูป</th>
                <th width="100" class="text-center">Username</th>
                <th width="100" class="text-center">Password</th>
                <th width="100" class="text-center">ชื่อ</th>
                <th width="100" class="text-center">นามสกุล</th>
                <th width="100" class="text-center">เพศ</th>
                <th width="100" class="text-center">วันเกิด</th>
                <th width="100" class="text-center">E-mail</th>
                <th width="100" class="text-center">เบอร์โทร</th>
                <th width="100" class="text-center">Status</th>
                <th width="150" class="text-center">ตัวเลือก</th>
              </tr>
            </thead>
            <tbody>
            <?php
// Include the database configuration file
include 'connect.php';


// Get images from the database
$query = $connect->query("SELECT * FROM member_table ORDER BY member_id ");

if($query){
    while($row = mysqli_fetch_assoc($query)){
      
        echo '<tr class="bg-light">
                    <td align="center" style="vertical-align:center">'.$row['member_id'].'</td>
					<td align="center" style="vertical-align:center"><img src="uploads/'.$row['member_picture'].'" style="width: 80%" ></td>
                    <td align="center" style="vertical-align:center">'.$row['member_username'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['member_password'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['member_firstname'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['member_lastname'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['member_gender'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['member_birthday'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['member_email'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['member_tel'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['status'].'</td>
                    <td align="center" style="vertical-align:center"><a style="text-align:center"><a class="btn btn-primary" href=admin_edit_member.php?id='.$row['member_id'].'"><i class="fas fa-edit"></i> </a>
                    <a style="text-align:center"><a class="btn btn-danger" onclick="return myFunction()" href="delete_member.php?id='.$row['member_id'].'"><i class="fas fa-trash-alt"></i> </a></td>
                   
         

				</tr>';
?>

<?php }
}else{ ?>
    <p>Not found...</p>
<?php } ?>
            </tbody>
          </table>
</div>    
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

<script>
function myFunction() {
var r = confirm("ต้องการลบข้อมูลสมาชิกหรือไม่?");
if (r == false) {
   return false;
} 
}
</script>

</html>

