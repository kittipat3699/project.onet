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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <title>แก้ไขข้อมูลสมาชิก</title>
    <style>
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
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
    box-shadow: 3px 5px 5px rgba(0, 0, 0, 0.3);
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
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
                    <a class="nav-link" href="index_owner.php">หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">สมัครสมาชิก</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        เจ้าของร้าน</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <img src="img/people.png" id="logomember" alt="logo" width="40px" height="40px"><b>เจ้าของร้าน</b>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php">ออกจากระบบ</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_card.php">ขายบัตร</a>
                </li>
            </ul>

        </div>
    </nav><br><br>
    <!-- กำหนด form เพิ่อรับค่า input -->
    <div class="container contact-form">
        <div class="contact-image">
            <img src="img/logo/LOGO3white.png" alt="rocket_contact" />
        </div>

        <form>
            <fieldset>
                <h3>แก้ไขข้อมูลพนักงาน</h3>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-group has-error">
                            <label for="exampleSelect1">เลขพนักงาน</label>
                            <input type="num_emp" class="form-control" id="exampleInputPassword1" placeholder="เลขพนักงาน"
                                required="required" readonly />
                        </div>
                        <div class="form-group has-error">
                            <label for="exampleSelect1">Usename</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usename"
                                required="required">
                        </div>
                        <div class="form-group has-error">
                            <label for="exampleSelect1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">ชื่อ</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณาใส่ชื่อ"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">นามสกุล</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณาใส่นามสกุล"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">เพศ</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>ชาย</option>
                                <option>หญิง</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">วันเกิด</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="กรุณาใส่อายุ"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">รูปภาพ</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">*ไม่จำเป็น</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Email</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณาใส่อีเมล"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณาใส่เบอร์โทรศัพท์"
                                required="required">
                        </div><br>
                        <div class="container text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                        </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    <!-- End form -->
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