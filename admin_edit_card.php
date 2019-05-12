<?php 
include('selectnav.php');

if ($_SESSION["status"] == "owner" and $_SESSION["status"] == "employee" ){  //check session

	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
}

?>
<?php 
include ('connect.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
$select = mysqli_query($connect,"SELECT * FROM card_table WHERE card_id = '".$id."'");
$row = mysqli_fetch_assoc($select);

if(isset($_POST['update'])){

 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $old_image= $row['card_img'];
   


  if(isset($_FILES['profile']['name']) && ($_FILES['profile']['name']!="")){
      $size = $_FILES['profile']['size'];
      $temp = $_FILES['profile']['tmp_name'];
      $type = $_FILES['profile']['type'];
      $file_name = $_FILES['profile']['name'];
      //1st delete old file
      unlink("uploads/$old_image");
      //new file add to dir
      move_uploaded_file($temp,"uploads/$file_name");
  } else {
      $file_name = $old_image;
  }



  $update = mysqli_query($connect,"UPDATE card_table set `card_username`='".$username."',`card_password`='".$password."',`typecard`='".$type."',`card_img`='".$file_name."' WHERE card_id = '".$id."'");

if($update){
  echo "<script>";
  echo "alert(\"บันทึกข้อมูลเรียบร้อยแล้ว\");";
  echo "window.location = 'admin_info_card.php';"; //ไปหน้าเเรก
  echo "</script>";
  
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <title>แก้ไขข้อมูลบัตรเติมเวลา</title>
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

   
    <!-- กำหนด form เพิ่อรับค่า input -->
    <div class="container contact-form">
        <div class="contact-image">
            <img src="img/logo/LOGO3white.png" alt="rocket_contact" />
        </div>

        <form action="" method="post" enctype="multipart/form-data">
            <fieldset>
                <h3>แก้ไขบัตรเติมเวลา</h3>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-group has-error">
                            <label for="exampleSelect1">Username</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usename"
                                required="required" name="username" value="<?=$row['card_username']; ?>">
                        </div>
                        <div class="form-group has-error">
                            <label for="exampleSelect1">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password"
                                required="required" name="password" value="<?=$row['card_password']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1"></label>
                            <select class="form-control" id="exampleSelect1" name="type" value="<?=$row['typecard']; ?>">
                            <option value="20฿">1.40 hr 20 ฿</option>
                                <option value="50฿">4.25 hr 50 ฿</option>
                                <option value="100฿">9 hr 100 ฿</option>
                                <option value="150฿">13.40 hr 150 ฿</option>
                                <option value="200฿">18.20 hr 200 ฿</option>
                                <option value="300฿">28 hr 300 ฿</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">รูปภาพ</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="profile">
                            <small id="fileHelp" class="form-text text-muted">*ไม่จำเป็น</small>
                        </div><br>
                        <div class="container text-center">
                            <button type="submit" class="btn btn-primary" name="update" value="update">Submit</button>
                            <a href="admin_info_card.php"><button type="button" class="btn btn-danger">Cancel</button></a>
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