<?php
include ('connect.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'] ;
    $birthday = $_POST['birthday'];
    $img = $_FILES["fileToUpload"]["name"];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $status = $_POST['status'];

    $query = "INSERT INTO `member_table`(`member_username`,`member_password`,`member_firstname`,`member_lastname`,`member_gender`,`member_birthday`,`member_picture`,`member_email`,`member_tel`,`status`)
    VALUES('$username','$password','$name','$lastname','$gender','$birthday','$img','$email','$tel','$status')";
    $result = mysqli_query($connect,$query);
    if($query){
        echo "<script>";
        echo "alert(\"สมัครสมาชิกเรียบร้อยแล้ว\");";
        echo "window.location = 'login.php';"; //ไปหน้าเเรก
        echo "</script>";
        
      }else {
        echo "<script>alert('สมัครสมาชิกไม่สำเร็จ')</script>";
      }


    $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          
          move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
          $uploadOk = 1;
      } else {
          
          $uploadOk = 0;
      }
 
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <title>สมัครสมาชิกใหม่</title>
    <style>
        body{
      background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(255,102,0,1) 0%, rgba(254,160,44,1) 100%);
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
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="login.php">จองเครื่อง</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register.php">สมัครสมาชิก</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="login.php"><button class="btn btn-warning my-2 my-sm-0" type="button">เข้าสู่ระบบ <i class="fas fa-sign-in-alt"></i></button></a>
            </form>
        </div>
        <>
    </nav>
    <!-- กำหนด form เพิ่อรับค่า input -->
    <div class="container contact-form">
        <div class="contact-image">
            <img src="img/logo/LOGO3white.png" alt="rocket_contact" />
        </div>

        <form action="register.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <h3>สมัครสมาชิกใหม่</h3>
                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-group has-error">
                            <label for="exampleSelect1">Usename</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username"
                                required="required" name="username">
                        </div>
                        <div class="form-group has-error">
                            <label for="exampleSelect1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                                required="required" name="password">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">ชื่อ</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณาใส่ชื่อ"
                                required="required" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">นามสกุล</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณาใส่นามสกุล"
                                required="required" name="lastname">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">เพศ</label>
                            <select class="form-control" id="exampleSelect1" name="gender">
                                <option value="ชาย">ชาย</option>
                                <option value="หญิง">หญิง</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleSelect1">วันเกิด</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="กรุณาใส่อายุ"
                                required="required" name="birthday">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">รูปภาพ</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="fileToUpload">
                            <small id="fileHelp" class="form-text text-muted">*ไม่จำเป็น</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Email</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณาใส่อีเมล"
                                required="required" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="กรุณาใส่เบอร์โทรศัพท์"
                                required="required" name="tel">
                        </div>
                        </div>
                        <div class="form-group">
                            <b for="exampleSelect1" class="text-danger">**กรุณาอ่านเงื่อนไข</b><br>
                            <div class="card border-info mb-3" style="max-width: 100rem;">
                                <div class="card-header text-danger"><h4>กฎทางร้าน</h4></div>
                                <div class="card-body">
                                   
                                    <p class="card-text text-danger"> กฎกระทรวงว่าด้วยการอนุญาตและการประกอบกิจการร้านวีดิทัศน์ ซึ่งเป็นกฎหมายสำหรับออกใบอนุญาต การต่อใบอนุญาตประกอบกิจการร้านเกม ร้านวีดิทัศน์ รวมทั้งกำหนดระยะเวลาในการเวลาเล่นเกม และการใช้บริการร้านเกมของเด็ก ดังนี้<br>

1 ) เด็กอายุต่ำกว่า 15 ปีเข้าใช้บริการวันจันทร์ถึงวันศุกร์ได้ตั้งแต่เวลา 14.00 – 20.00 น. และตั้งแต่เวลา 10.00 – 20.00 น. ในวันหยุดราชการ<br>

2 ) เด็กอายุตั้งแต่15 ปีขึ้นไป แต่ไม่เกิน 18 ปีเข้าใช้บริการวันจันทร์ถึงวันศุกร์ ได้ตั้งแต่เวลา 14.00 – 22.00 น. และตั้งแต่เวลา 10.00 – 22.00 น. ในวันหยุดราชการ
อย่างไรก็ตามกรณีคัดค้านการตัดเนื้อหาไม่ให้เด็กอายุต่ำกว่า 18 ปี เล่นเกมเกินวันละ 3 ชม. ออกจากกฎกระทรวง ตนได้ชี้แจงต่อครม. และพยายามขอเพิ่มบทเฉพาะการ 180 วัน เพื่อพัฒนาระบบสารสนเทศ แต่ครม. เห็นว่า ควรกลับไปพัฒนาระบบให้เสร็จสิ้นก่อน ค่อยเสนอแก้ไขกฎกระทรวงภายหลัง ดังนั้น วธ. จะเร่งพัฒนาระบบดังกล่าว โดยร่วมมือไปยังกระทรวงมหาดไทย (มท.) และกระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร(ไอซีที) เพื่อร่วมพัฒนาระบบ และเมื่อระบบเสร็จ วธ. จะนำเสนอแก้ไขกฎกระทรวงอีกครั้ง</p>
                                    <select class="form-control" id="exampleSelect1" name="status" required="required">
                                <option value="cencer">ไม่ยอมรับ</option>
                                <option value="member">ฉันยอมรับเงื่อนไข</option>
                            </select>
                            
  </div>
</div>
                           
                        </div><br>
                        
                        
                        <div class="container text-center">
                            <button type="submit" name="submit" class="btn btn-primary">ยืนยัน</button>
                            <a href="index.php"><button type="button" class="btn btn-danger">ยกเลิก</button></a>
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