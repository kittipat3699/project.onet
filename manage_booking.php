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
  <title>หน้าจองเครื่อง</title>
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
    .container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container #radio {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover #radio ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container #radio:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container #radio:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

    </style>
</head>

<body>

  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="img/logo/logo2.png" alt="logo" width="55px" height="55px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index_employee.php">หน้าแรก <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">สมัครสมาชิก</a>
        </li>
      </ul>
      <!-- ย้าย navbar ไปไว้ฝั่งขวา -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
           พนักงาน</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <img src="img/people.png" id="logomember" alt="logo" width="40px" height="40px"><b>นัสเรน</b>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php">ออกจากระบบ</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="card.php">ซื้อบัตร</a>
        </li>
      </ul>

    </div>
  </nav><br><br>
  <!-- End Navbar -->


  <div class="container">
    <div class="row">
      <h1 style="color:white;">กรุณาเลือกเครื่องที่ท่านต้องการจอง</h1><br><br>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
        <form class="form-inline">
            <div class="form-group mb-2">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="ค้นหาสมาชิก">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">กรุณาใส่ Username</label>
                <input type="text" class="form-control" id="inputPassword2" placeholder="กรุณาใส่ Username">
            </div>
            <button type="submit" class="btn btn-secondary mb-2">ยืนยัน</button>
        </form>
          </div>          
          <div class="card-body">
              <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">แถวที่ 1</th>
                      <th scope="col">แถวที่ 2</th>
                      <th scope="col">แถวที่ 3</th>
                      <th scope="col">แถวที่ 4</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr> 
                      <td scope="row"><label class="container">1 <b style="color:red;">ไม่ว่าง</b>
                          
                        </label></td>
                      <td><label class="container">11 <b style="color:red;">ไม่ว่าง</b>
                         
                        </label></td>
                      <td><label class="container">21 <b style="color:green;">ว่าง</b>
                          <input id="radio" type="radio" checked="checked" name="radio">
                          <span class="checkmark"></span>
                        </label></td> 
                      <td><label class="container">31 <b style="color:green;">ว่าง</b>
                          <input id="radio" type="radio" checked="checked" name="radio">
                          <span class="checkmark"></span>
                        </label></td>
                    </tr>
                    <tr>
                      <td scope="row"><label class="container">2 <b style="color:green;">ว่าง</b>
                          <input id="radio" type="radio" checked="checked" name="radio">
                          <span class="checkmark"></span>
                        </label></td>
                      <td><label class="container">12 <b style="color:green;">ว่าง</b>
                          <input id="radio" type="radio" checked="checked" name="radio">
                          <span class="checkmark"></span>
                        </label></td>
                      <td><label class="container">22 <b style="color:green;">ว่าง</b>
                          <input id="radio" type="radio" checked="checked" name="radio">
                          <span class="checkmark"></span>
                        </label></td>
                      <td><label class="container">32 <b style="color:green;">ว่าง</b>
                          <input id="radio" type="radio" checked="checked" name="radio">
                          <span class="checkmark"></span>
                        </label></td>
                    </tr>
                    <tr>
                        <td scope="row"><label class="container">3 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">13 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">23 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">33 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                    </tr>
                    <tr>
                        <td scope="row"><label class="container">4 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">14 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">24 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">34 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                    </tr>
                    <tr>
                        <td scope="row"><label class="container">5 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">15 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">25 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">35 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                    </tr>
                    <tr>
                        <td scope="row"><label class="container">6 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">16 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">26 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">36 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                    </tr>
                    <tr>
                        <td scope="row"><label class="container">7 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">17 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">27 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">37 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                    </tr>
                    <tr>
                        <td scope="row"><label class="container">8 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">18 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">28 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">38 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                    </tr>
                    <tr>
                        <td scope="row"><label class="container">9 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">19 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">29 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">39 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                    </tr>
                    <tr>
                        <td scope="row"><label class="container">10 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">20 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">30 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                        <td><label class="container">40 <b style="color:green;">ว่าง</b>
                            <input id="radio" type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                          </label></td>
                    </tr>
                    
                  </tbody>
                </table> 
                <div class="container text-center">           
            <a href="admin_confirm_booking.php" class="btn btn-primary">ยืนยัน</a>
            <a href="index_employee.php" class="btn btn-danger">ยกเลิก</a>
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