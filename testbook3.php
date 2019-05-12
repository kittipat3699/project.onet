<?php 
include('selectnav.php');

if ($_SESSION["status"] != "member"){  //check session

	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}?>
  <?php
//ถ้ามีการส่งค่าข้อมูล
              include('connect.php');

              $id = null;
              if(isset($_GET["id"]))
              {
                $id = $_GET["id"]; 
            } 

            $sql = "SELECT * FROM `booking_table` WHERE booking_id = '".$id."' ";
            $query = mysqli_query($connect,$sql);
            $data=mysqli_fetch_array($query,MYSQLI_ASSOC);
            
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
    /* The container */
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
.container input {
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
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
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

  

<br><br>
  <div class="container">
    <div class="row">
      <h1 style="color:white;">กรุณาเลือกเครื่องที่ท่านต้องการจอง</h1><br><br>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            ท่านสามารถจองเครื่องได้ 1 เครื่องต่อ 1 ไอดีได้เท่านั้น
          </div>          
          
          <div class="card-body">
          <div class="row">
          <div class="col-md-8">
          <img src="img/book/plan.jpg" width="600px" height="800px">
                       
            <!-- <a href="confirm_booking.php" class="btn btn-primary">ยืนยัน</a>
            <a href="index_member.php" class="btn btn-danger">ยกเลิก</a> -->
          </div>

          <div class="col-md-4">
          <?php
                $z_sql = " SELECT * FROM booking_table where booking_id  = " . $id . " ";
                $z_query = mysqli_query($connect,$z_sql);?>



                <?php

                $Keyword = 0;

                if (isset($_POST["Keyword"])) {
                  $Keyword = $_POST["Keyword"];
              }
              
              ?>
              <form method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>?booking_id=<?php echo $data["id"];?>">
               <select class="form-control" type="text" id="Keyword" name="Keyword">
               

                 <?php while ($z_row = mysqli_fetch_array($z_query,MYSQLI_ASSOC)) { ?>
                    <option value="<?php echo $z_row["booking_seat_no"];?>"><?php echo $z_row["status"];?></option>
                    <?php
                }
                ?>
            </select>


        </div>
        <div class="col-md-4">
            <p>&nbsp;&nbsp;&nbsp;</p>
            <input type="submit" value="เลือก" class="btn btn-info">

        </div>

    </form>
    
        
                            
                            
          </div>  
          </div>
          </div>
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