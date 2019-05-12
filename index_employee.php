<?php 
include('selectnav.php');

if ($_SESSION["status"] != "employee"){  //check session

	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}?>
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
  <title>หน้าแรกของพนักงาน</title>
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
   


    </style>
</head>

<body>
<div class="container">
<h3 style="color:white;">ระบบจัดการร้าน สำหรับพนักงาน</h3>
    <div class="row">
       <div class="col-md-3"><br>
        <a href="info_member.php"><button type="button" class="btn btn-warning btn-lg btn-block" style="width:200px;height:100px"><i class="fas fa-users fa-2x"></i><br> จัดการสมาชิก</button></a><br>
        <!-- <a href="info_booking.php"><button type="button" class="btn btn-warning btn-lg btn-block">จัดการจองเครื่อง</button></a><br>
        <a href="admin_info_card.php"><button type="button" class="btn btn-warning btn-lg btn-block">บัตรเติมเวลา</button></a><br> -->
       
       
        </div>

        <div class="col-md-3"><br>
        
        <a href="info_booking.php"><button type="button" class="btn btn-warning btn-lg btn-block" style="width:200px;height:100px"><i class="fas fa-desktop fa-2x"></i><br> จัดการจองเครื่อง</button></a><br>
       
        </div>

        <!-- <div class="col-md-3"><br>
        <a href="admin_info_card.php"><button type="button" class="btn btn-warning btn-lg btn-block">บัตรเติมเวลา</button></a><br>
        <a href="admin_order_card2.php"><button type="button" class="btn btn-info btn-lg btn-block" style="width:200px;height:200px"><i class="fas fa-shopping-basket"></i><br> ลูกค้าที่สั่งซื้อบัตร</button></a><br>
       
        </div> -->

    </div>
    <div class="row">
    <div class="col-md-3">
    <a href="admin_order_card2.php"><button type="button" class="btn btn-info btn-lg btn-block" style="width:485px;height:200px"><i class="fas fa-shopping-basket fa-3x"></i><br><br> ลูกค้าที่สั่งซื้อบัตร</button></a><br>
</div>
</div>
</div>
<br><br><br>
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


</body>
<!-- script -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

</html>

