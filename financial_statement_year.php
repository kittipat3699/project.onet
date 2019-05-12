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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <title>รายงานผลทางการเงินรายปี</title>
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
    canvas{
      background-color:white;
    }
    
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" ></script>
</head>

<body>

  <div class="container">
<div class="row">
    <div class="col-md-4 ">
        <h3 style="color:white;">รายงานผลทางการเงิน</h3>
    </div>
    <div class="col-md-3">
        <a href="add_statement.php"><button type="button" class="btn btn-success btn-lg btn-block"><i class="fas fa-save"></i> บันทึกยอดขายรายวัน</button><br></a>
    </div>
    <div class="col-md-3">
        <a href="edit_statement.php"><button type="button" class="btn btn-danger btn-lg btn-block"><i class="far fa-edit"></i> แก้ไขยอดขาย</button><br></a>
    </div>
      <div class="col-md-2">
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle btn-lg " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    สรุปรายงาน
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="financial_statement_day.php">รายวัน</a>
    <a class="dropdown-item" href="financial_statement_month.php">รายเดือน</a>
    <a class="dropdown-item" href="financial_statement_year.php">รายปี</a>
  </div>
</div>
    </div>
</div>

<!-- สร้างกราฟแท่งโดยใช้ Chart.js -->
<canvas id="myChart" width="400" height="400"></canvas><br>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["พ.ศ.2555", "พ.ศ.2556", "พ.ศ.2557", "พ.ศ.2558", "พ.ศ.2559", "พ.ศ.2560" , "พ.ศ.2561" , "พ.ศ.2562"],
        datasets: [{
            label: 'รายได้',
            data: [589000, 513500, 515000, 517000, 551600, 517000, 514500,540000],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(192,192,192,0.3)',
                'rgba(255,0,255,0.3)'
               
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(0,0,255,0.3)',
                'rgba(255, 0, 0, 0.8)'
                
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

 <!-- สร้าง table เพื่อใส่ค่ารายรับแบบรายปี

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th class="text-center" scope="col"></th>
      <th class="text-center" scope="col">รายได้จากบัตรเติมเวลา</th>
      <th class="text-center" scope="col">รายได้จากขนมและเครื่องดื่ม</th>
      <th class="text-center" scope="col">อื่นๆ</th>
      <th class="text-center" scope="col">รายได้รวม</th>     
    </tr>
  </thead>
  <tbody class="bg-light">
    <tr>
      <th class="text-center" scope="row">พ.ศ.2555</th>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
    </tr>
    <tr>
      <th class="text-center" scope="row">พ.ศ.2556</th>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>      
    </tr>
    <tr>
      <th class="text-center" scope="row">พ.ศ.2557</th>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
    </tr>
    <tr>
      <th class="text-center" scope="row">พ.ศ.2558</th>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
    </tr>
    <tr>
      <th class="text-center" scope="row">พ.ศ.2559</th>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
    </tr>
    <tr>
      <th class="text-center" scope="row">พ.ศ.2560</th>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
    </tr>
    <tr>
      <th class="text-center" scope="row">พ.ศ.2561</th>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
      <td class="text-center"></td>
    </tr>
  </tbody>
</table> -->
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
