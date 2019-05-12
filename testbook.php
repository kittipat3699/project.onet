<?php 
include('selectnav.php');

if ($_SESSION["status"] != "member") {  //check session

  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

} ?>
<?php 
include('connect.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
$select = mysqli_query($connect, "SELECT * FROM booking_table");
$row = mysqli_fetch_assoc($select);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="font/stylesheet.css">
  <link rel="stylesheet" href="css/min.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <title>หน้าจองเครื่อง</title>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
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

.datetimepicker  {
  top: 100px !important;
  left: 35%;
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
          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th width="100" class="text-center">ที่นั่ง</th>
                <th width="100" class="text-center">สถานะ</th>
              </tr>
            </thead>
            <tbody>

            <?php
// Include the database configuration file
include 'connect.php';

// Get images from the database
$query = $connect->query("SELECT * FROM booking_table ORDER BY booking_id ");



if($query){
    while($row = mysqli_fetch_assoc($query)){

    
        echo '<tr class="bg-light">';
      
        echo       '<td align="center" style="vertical-align:center">'.$row['booking_seat_no'].'</td>';
        
        if($row['status_seat'] == "a"){
            
            echo '<td align="center" ><span style="color:green " >ว่าง</span></td>';
            
                    }else{
            
            echo '<td align="center" ><span style="color:red">ไม่ว่าง</span></td>';
            
            }
                    
        

         
                   
         

				echo  '</tr>';
?>

<?php }
}else{ ?>
    <p>Not found...</p>
<?php } ?>


            </tbody>
          </table>
          
                       
            <!-- <a href="confirm_booking.php" class="btn btn-primary">ยืนยัน</a>
            <a href="index_member.php" class="btn btn-danger">ยกเลิก</a> -->
          </div>

          <div class="col-md-4">
            <div class="form-group row">
                   
                        <div class="form-group">
                            <label for="exampleSelect1">กรุณาเลือกที่นั่ง</label>
                            
                            <select class="form-control" id="seatSelect" name="seat" >
                                <?php foreach ($select as $row) { ?>
                                <option value="<?= $row['booking_seat_no']; ?>"><?php echo $row['booking_seat_no']; ?></option>
                                <?php 
                              } ?>
                            </select>
                            <br>
                            <label for="exampleSelect1">ใส่วันเวลาที่ต้องการจอง</label>
                            <input id="datepicker" placeholder="กรุณาใส่เวลาที่ต้องการจอง" width="250" />
                            
                        </div>
                        <br>
                       <br>
                        <div class="container ">
                            <button type="buttom" class="btn btn-primary" id="submit" name="update">จอง</button>
                            <a href="index_member.php"><button type="button" class="btn btn-danger">ย้อนกลับ</button></a>
                        </div>
                        </div> 
          <div>
          <p>รูปภาพแผนผังร้าน</p>
          </div>
          <div class="col-xs-1 text-center">
          <img src="img/book/plan.jpg" width="70%" > 
          </div>
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
<script>
    $('#submit').click(() => {

    let seat = $('#seatSelect').val()
    let date = $('#datepicker').val()

      $.get(`api/check_seat.php?seat=${seat}`, (data) => {
          if (data[0].status_seat === 'b') {
              alert('เครื่องไม่ว่าง กรุณาเลือกเครื่องอื่นคะ')
          } else {
            let seatId = data[0].booking_id
            let userId = <?php echo json_decode($_SESSION['UserID']); ?> ;
            $.post( "./api/reserve_seat.php", { seatId: seatId, userId: userId, date: date } , (res) => {
              if (res.success) {
                alert('ท่านได้จองเรียบร้อยแล้วมีเวลา 30 นาทีคะ')
                window.location.href = "member_history_seat.php";
                
              }
            });
          }
      });
    })
    </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

    <script>
      $('#datepicker').datetimepicker({ footer: true, modal: true });

    </script>

</html>