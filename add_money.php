<?php 
include('selectnav.php');

if ($_SESSION["status"] == "owner" and $_SESSION["status"] == "employee" ){  //check session

	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
}

?>
<?php
  $search_text = ''; // ค้นหาข้อมูล
  if(isset($_POST['search_submit'])){
      $search_text = $_POST['search_text'];
  }
  include ('connect.php');

$sql = 'SELECT * FROM member_table';
$query = mysqli_query($connect, $sql);

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
    <title>เติมเงิน</title>
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
        <h3 style="color:white;">บัตรเติมเวลา</h3><br>
        <div class="row">
            <div class="col-md-12 col-sm-6">
                <div class="card shadow ">
                <div class="card-header">
                <form class="form-inline my-2 my-lg-0" action="add_money.php" method="post">
                        <div class="input-append">
                        <p>ค้นหาสมาชิก</p>
                        <input class="form-control mr-sm-2" name="search_text" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0"name="search_submit" type="submit">Search</button>
                      </div>
                      </form>
                      <br>
        <table class="table">
              <?php
                //เลือกข้อมูลที่ต้องการ query
                $sql = "SELECT * FROM member_table WHERE member_username LIKE '%$search_text%'ORDER BY member_id DESC";
                $query = mysqli_query($connect, $sql);
                
                if (!$query) {
                    die ('SQL Error: ' . mysqli_error($connect));
                }
                while ($row = mysqli_fetch_array($query))
                {
                        // $row['...'] ใช้เรียกข้อมูลของแต่ละฟีวของฐานข้อมูล
                        // รวมถึงสร้างปุ่ม Update เพือเชื่อมต่อไปยังหน้า Update
                        // รวมถึงสร้างปุ่ม Delete เพือเชื่อมต่อไปยังหน้า Delete
                        echo '
                <tr>
                    <td >
                        <div class="card text-primary  blockquote  mx-md-5 my-md-2" >
                            <div class="row my-md-3 mx-md-3 " >
                                <div class="col-md-4 col-12">
                                <img class="card-img" src="uploads/'.$row['member_picture'].'" style="width: 100%">
                                </div>
                                <div class="col-md-8 col-12">
                                    <div class="card-body">
                                    <p class="card-text">Username : <span class="text-muted">'.$row['member_username'].'</span></p>
                                        <p class="card-text">ชื่อ : <span class="text-muted">'.$row['member_firstname'].'</span></p>
                                        <p class="card-text">นามสกุล : <span class="text-muted">'.$row['member_lastname'].'</span> </p>
                                        <p class="card-text">วันเกิด: <span class="text-muted"> '.$row['member_birthday'].'</span> </p>
                                        <p class="card-text">E-mail: <span class="text-muted"> '.$row['member_email'].'</span> </p>

                                        <a class="btn btn-warning" href="admin_add_money.php?id='.$row['member_id'].'"><i class="fas fa-plus"></i>  เพิ่มบัตรเติมเวลา</a>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>

                ';
            }?>
          </table>
          </div>
                    
                </div>
            </div>
        </div>

    </div><br><br><br><br>

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