<?php 
include('selectnav.php');

if ($_SESSION["status"] != "member"){  //check session

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
  <title>หน้าแรกของสมาชิก</title>
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
    </style>
</head>

<body>

  <!-- เช็ค navbar ตาม session -->

  <!-- Start SlidesShow -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/cover/cover1.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/cover/cover2.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/cover/cover3.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><br><br>
  <!-- End SlidesShow -->
 <!--Content -->
 <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 text-center" id="site-intro">
        <h1 class="display-4" style="color:white;">ร้านอินเทอร์เน็ตโอเน็ต อินเทอร์เน็ต&คาเฟ่</h1>       
        <hr><br>
        <div class="card-deck">
          <div class="card shadow p-3 mb-5 bg-white rounded">
            <img class="card-img-top" src="img/PCBang1.jpg" width="200px" height="200px" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">บรรยากาศร้าน 1</h5>
              <p class="card-text">คอมเร็ว คอมแรง สุดยอดร้านแห่งม.อ.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Updated 25.11.2561</small>
            </div>
          </div>
          <div class="card shadow p-3 mb-5 bg-white rounded">
            <img class="card-img-top" src="img/onet2.jpg" width="200px" height="200px" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">บรรยากาศร้าน 2</h5>
              <p class="card-text">สะอาด สะดวก ปลอดภัย</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Updated 28.11.2561</small>
            </div>
          </div>
          <div class="card shadow p-3 mb-5 bg-white rounded">
            <img class="card-img-top" src="img/onet3.jpg" width="200px" height="200px" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">บรรยากาศร้าน 3</h5>
              <p class="card-text">ร้านปลอดโปร่ง สบายตา ไฟสว่างทั้งร้าน สามารถนำอาหารและเครื่องดื่มเข้ามารับประทานได้ มีพนักงานคอยต้อนรับตลอดเวลา 24 ชั่วโมง</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Updated 30.11.2561</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
