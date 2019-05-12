<?php 
include('selectnav.php');

if ($_SESSION["status"] != "owner"){  //check session

	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}?>
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
    <title>หน้าแสดงข้อมูลพนักงาน</title>
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
    table {
  table-layout: fixed;
}
    </style>
</head>

<body>
   
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 style="color:white;">จัดการพนักงาน </h3>
            </div>
            <div class="col-4">
                <a href="create_employee.php"><button type="button" class="btn btn-warning btn-lg btn-block"><i class="fas fa-plus-circle"></i>
                        เพิ่มพนักงานใหม่</button><br></a>
            </div>

       
        <!-- สร้างตารางสำหรับข้อมูลพนักงาน -->
        
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center" width="50">#</th>
                    <th class="text-center" width="100">รูป</th>
                    <th class="text-center" width="100">Username</th>
                    <th class="text-center" width="100">Password</th>
                    <th class="text-center" width="100">ชื่อ</th>
                    <th class="text-center" width="100">นามสกุล</th>
                    <th class="text-center" width="50">เพศ</th>
                    <th class="text-center" width="100">วันเกิด</th>
                    <th class="text-center" width="100">E-mail</th>
                    <th class="text-center" width="100">เบอร์โทร</th>
                    <th class="text-center" width="100">เงินเดือน</th>
                    <th class="text-center" width="100">Status</th>
                    <th class="text-center" width="130" >ตัวเลือก</th>

                </tr>
            </thead>
            <tbody class="bg-light">
            <?php
// Include the database configuration file
include 'connect.php';

// Get images from the database
$query = $connect->query("SELECT * FROM employee_table ORDER BY employee_id ");

if($query){
    while($row = mysqli_fetch_assoc($query)){
      
        echo '<tr class="bg-light">
                    <td align="center" style="vertical-align:center">'.$row['employee_id'].'</td>
					<td align="center" style="vertical-align:center"><img src="uploads/'.$row['employee_picture'].'" style="width: 80%" ></td>
                    <td align="center" style="vertical-align:center">'.$row['employee_username'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['employee_password'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['employee_firstname'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['employee_lastname'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['employee_gender'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['employee_birthday'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['employee_email'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['employee_tel'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['employee_salary'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['status'].'</td>
                    <td align="center" style="vertical-align:center"> <a style="text-align:center"><a class="btn btn-primary" href=admin_edit_employee.php?id='.$row['employee_id'].'"><i class="fas fa-edit"></i> </a>
                    <a style="text-align:center"><a class="btn btn-danger" onclick="return myFunction()" href="delete_employee.php?id='.$row['employee_id'].'"><i class="fas fa-trash-alt"></i> </a></td>
                    
         

				</tr>';
?>

<?php }
}else{ ?>
    <p>Not found...</p>
<?php } ?>
            </tbody>
          </table>
</div>    
 <!-- end table -->
            </tbody>
        </table>
    </div><br><br><br>
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
      </script>

</body>
<!-- script -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

<script>
function myFunction() {
var r = confirm("ต้องการลบข้อมูลพนักงานหรือไม่?");
if (r == false) {
   return false;
} 
}
</script>

</html>
