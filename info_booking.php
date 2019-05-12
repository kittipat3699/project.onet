<?php 
include('selectnav.php');

if ($_SESSION["status"] == "owner" and $_SESSION["status"] == "employee" ){  //check session

	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
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
    <title>หน้าจัดการการจองเครื่อง</title>
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
            <!-- ตั้งฟังก์ชั่น onclick รับ parameter จาก php -->
  

  <!-- Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">เปลี่ยนสถานะเครื่อง</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="form-group row">
                    <div class="col-md-12">
                    <form action="admin_update_statusbook.php" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" id="bookingId" name="bookingId">
                    <input type="hidden" value="" name="member">
                    <input type="hidden" value="" name="date">
                    <input type="hidden" value="" name="end">
                       
                        <div class="form-group">
                            <label for="exampleSelect1">สถานะ</label>
                            <select class="form-control" id="exampleSelect1" name="status" value="<?=$row['status_seat']; ?>">
                                <option value="a">ว่าง</option>
                                <option value="b">ไม่ว่าง</option>
                            </select>
                        </div>
                       <br>
                       <div class="modal-footer">
                        <div class="container text-center">
                            <button type="submit" class="btn btn-primary" name="update" value="update">Submit</button>
                            <a href="info_booking.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                            </div>
                        </div>
        </form>
          <p id="testName"></p> 
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</div>
</div>

                <h3 style="color:white;">จัดการจองเครื่อง </h3>
            </div>
            <div class="col-4">
                <a href="admin_add_com.php"><button type="button" class="btn btn-warning btn-lg btn-block"><i class="fas fa-plus-circle"></i>
                        เพิ่มเครื่องคอมพิวเตอร์</button><br></a>
            </div>

        </div>
        <!-- สร้างตารางสำหรับข้อมูลพนักงาน -->
        <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th width="50" class="text-center">#</th>
                <th width="100" class="text-center">ที่นั่ง</th>
                <th width="100" class="text-center">เลขรหัสสมาชิก</th>
                <th width="100" class="text-center">เวลาที่ลูกค้าจอง</th>
                <th width="100" class="text-center">สถานะ</th>
                <th width="100" class="text-center">option</th>
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
        echo    '<td align="center" style="vertical-align:center">'.$row['booking_id'].'</td>';
        echo       '<td align="center" style="vertical-align:center">'.$row['booking_seat_no'].'</td>';
        echo          '<td align="center" style="vertical-align:center">'.$row['member_id'].'</td>';
        echo                '<td align="center" style="vertical-align:center">'.$row['booking_endtime'].'</td>';
        if($row['status_seat'] == "a"){
            
            echo '<td align="center" ><span style="color:green " >ว่าง</span></td>';
            
                    }else{
            
            echo '<td align="center" ><span style="color:red">ไม่ว่าง</span></td>';
            
            }
                    
        

         echo          '<td style="text-align:center"><button class="btn btn-primary" onclick="openModal('.$row['booking_id'].')"><i class="fas fa-edit"></i> Edit</button></td>';
         echo           '</td>';                                                     
                   
         

				echo  '</tr>';
?>

<?php }
}else{ ?>
    <p>Not found...</p>
<?php } ?>


            </tbody>
          </table>
    </div>
    <!-- end table -->




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
    <script>
      function confirmDelete(delUrl) {
      if (confirm("Are you sure you want to delete")) {
        document.location = delUrl;
        }
      }

        const openModal = (id) => {
            $('#bookingId').val(id)
            $('#updateModal').modal('show')
        }

      </script>

</body>
<!-- script -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

</html>