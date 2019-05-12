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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <title>หน้าแสดงข้อมูลสั่งซื้อบัตร</title>
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
    /* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
} 
    </style>
</head>

<body>
<br>
<div class="container">
<div class="row">

    <div class="col-8">
        <h3 style="color:white;">ลูกค้าสั่งซื้อบัตร </h3>
    </div>
    <!--สร้างกล่องเพื่อ create สมาชิก -->
   </div>
<br>



 <!-- สร้างตารางแสดงข้อมูลสมาชิก -->
 <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th width="50" class="text-center">เลขคำสั่งซื้อ</th>
                <th width="100" class="text-center">สลิป</th>
                <th width="100" class="text-center">ประเภทบัตรเติมเงิน</th>
                <th width="100" class="text-center">ราคาบัตร</th>
                <th width="100" class="text-center">สถานะ</th>
                <th width="100" class="text-center">เงินโอนที่ได้รับ</th>
                <th width="200" class="text-center">Option</th>
              </tr>
            </thead>
            <tbody>

            <?php
// Include the database configuration file
include 'connect.php';

// Get images from the database
$query = $connect->query("SELECT * FROM order_card_table ORDER BY order_card desc");

if($query){
    while($row = mysqli_fetch_assoc($query)){
      
      
        echo '<tr class="bg-light">
                    <td align="center" style="vertical-align:center">'.$row['order_card'].'</td>
          <td align="center" style="vertical-align:center"><img id="myImg" src="uploads/'.$row['img_card'].'" style="width: 80%" ></td>


                    <td align="center" style="vertical-align:center">'.$row['card'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['price'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['status_card'].'</td>
                    <td align="center" style="vertical-align:center">'.$row['cash'].'</td>
                    <td class="text-center"><a class="btn btn-primary" href=admin_edit_order_card.php?id='.$row['order_card'].'"><i class="fas fa-plus-circle"></i> ชำระเงินเรียบร้อย</a>
                    <a class="btn btn-danger" onclick="return myFunction()" href=delete_order_card2.php?id='.$row['order_card'].'"><i class="fas fa-trash-alt"></i> ลบ</a>
                    </td>
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
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
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
    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</html>
<script>
function myFunction() {
var r = confirm("ต้องการลบข้อมูลหรือไม่?");
if (r == false) {
   return false;
} 
}
</script>


