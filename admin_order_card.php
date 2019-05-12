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
    <title>หน้ายืนยันซื้อบัตรสำหรับแอดมิน</title>
    <style>    
    .dropdown-menu {
    background-color:#fea02c;
    }
    #logomember{
      padding:5px
    }
    body{
      background: rgb(2,0,36);
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
} 
	.form-control {
		min-height: 41px;
		background: #f2f2f2;
		box-shadow: none !important;
		border: transparent;
	}
	.form-control:focus {
		background: #e2e2e2;
	}
	.form-control, .btn {        
        border-radius: 2px;
    }
	.login-form {
		width: 350px;
		margin: 30px auto;
		text-align: center;
	}
	.login-form h2 {
        margin: 10px 0 25px;
    }
    .login-form form {
		color: #7a7a7a;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 3px 5px 5px rgba(0, 0, 0, 0.3);
        padding: 30px;
   }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
		
		border: none;
        outline: none !important;
    }
	.login-form .btn:hover, .login-form .btn:focus {
		background: #2389cd;
	}
	.login-form a {
		color: #fff;
		text-decoration: underline;
	}
	.login-form a:hover {
		text-decoration: none;
	}
	.login-form form a {
		color: #7a7a7a;
		text-decoration: none;
	}
	.login-form form a:hover {
		text-decoration: underline;
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
                <li class="nav-item ">
                    <a class="nav-link" href="index_employee.php">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_add_member.php">สมัครสมาชิก</a>
                </li>
            </ul>
            <!-- ย้าย navbar ไปไว้ฝั่งขวา -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        พนักงาน</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <img src="img/people.png" id="logomember" alt="logo" width="40px" height="40px"><b>พนักงาน</b>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php">ออกจากระบบ</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_card.php">ขายบัตร</a>
                </li>
            </ul>

        </div>
    </nav><br>
    <!-- End Navbar -->

  <div class="container">
        <div class="row content-center">
            <div class="col-md-12 text-center " id="site-intro">
                <div class="login-form">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <img src="img/logo/logo2.png" alt="logo" width="100px" height="100px">
                        <h2 class="text-center text-dark">ยืนยันการสั่งซื้อบัตร</h2>
                        <div class="form-group has-error">
                            <h4 class="text-dark">รายละเอียดบัตร</h4>
                            <b>ราคา : **</b>
                            <p>จำนวนชั่วโมง : **</p>
                        </div><br>
                        <div class="form-group">
                            <a href="index_employee.php"><button type="button" class="btn btn-primary btn-lg btn-block">ยืนยัน</button></a><br>
                            <a href="index_employee.php"><button type="button" class="btn btn-danger btn-lg btn-block">ยกเลิก</button></a><br>

                        </div>                        
                    </form>
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