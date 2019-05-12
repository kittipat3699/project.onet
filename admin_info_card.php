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

$sql = 'SELECT * FROM card_table';
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <title>หน้าแสดงบัตรเติมเวลา</title>
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
        <div class="row">
            <div class="col-8">
                <h3 style="color:white;">บัตรเติมเวลา</h3><br>
            </div>
            <div class="col-4">
                <a href="admin_add_card.php"><button type="button" class="btn btn-warning btn-lg btn-block"><i class="fas fa-plus-circle"></i>
                        เพิ่มบัตรเติมเวลา</button><br></a>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    <div class="card shadow ">
                        <div class="card-header">
                            <form class="form-inline my-2 my-lg-0" action="admin_info_card.php" method="post">
                                <div class="input-append">
                                    <p>ค้นหาบัตร</p>
                                    <input class="form-control mr-sm-2" name="search_text" type="text" placeholder="Search">
                                    <button class="btn btn-secondary my-2 my-sm-0" name="search_submit" type="submit">Search</button>
                                </div>
                                <!-- Example single danger button -->
                                <div class="col-md-3 align-self-end">
                                <div class="btn-group" >
                                    <button onclick="myFunction()" type=" button" class="btn btn-info dropdown-toggle"
                                        data-toggle="dropdown" id="Demo">
                                        ประเภทบัตร
                                    </button>
                                    <div id="Demo" class="dropdown-menu" >
                                        <a href="admin_info_card.php?typecard=20฿" class="dropdown-item">20</a>
                                        <a href="admin_info_card.php?typecard=50฿" class="dropdown-item">50</a>
                                        <a href="admin_info_card.php?typecard=100฿" class="dropdown-item">100</a>
                                        <a href="admin_info_card.php?typecard=150" class="dropdown-item">150</a>
                                        <a href="admin_info_card.php?typecard=200฿" class="dropdown-item">200</a>
                                        <a href="admin_info_card.php?typecard=300฿" class="dropdown-item">300</a>
                                    </div>
                                </div>
                            </div>
                                <br>
                                <div class="col-md-12 col-sm-6">
                                <table class="table">
                                    <?php
              include ('connect.php');
              if(isset($_GET['typecard'])){
                $typecard = $_GET['typecard'];
                $query = $connect->query("SELECT * FROM `card_table` WHERE `typecard` = '$typecard'");
             
                //เลือกข้อมูลที่ต้องการ query
}else{ $sql = "SELECT * FROM card_table WHERE typecard LIKE '%$search_text%'ORDER BY card_id ASC";
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
                                <img class="card-img" src="uploads/'.$row['card_img'].'" style="width: 100%">
                                </div>
                                <div class="col-md-8 col-12">
                                    <div class="card-body">
                                    <p class="card-text">Username : <span class="text-muted">'.$row['card_username'].'</span></p>
                                        <p class="card-text">Password : <span class="text-muted">'.$row['card_password'].'</span></p>
                                        <p class="card-text">ชนิดบัตร : <span class="text-muted">'.$row['typecard'].'</span> </p>
                                        

                                        <a class="btn btn-success" href="admin_edit_card.php?id='.$row['card_id'].'"><i class="fas fa-edit"></i>   แก้ไขบัตรเติมเวลา</a>
                                        <a class="btn btn-danger" href="delete_card.php?id='.$row['card_id'].'"><i class="fas fa-trash-alt"></i>   ลบบัตรเติมเวลา</a>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>

                ';
            }}?>
                                </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
        </div>
    <!-- สำหรับปุ่ม option -->

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
    
<!-- สำหรับปุ่ม option -->
<script>
    function myFunction() {
      var x = document.getElementById("Demo");
      if (x.className.indexOf("show") == -1) {
        x.className += " show";
      } else {
        x.className = x.className.replace(" show", "");
      }
    }

  </script>

</html>