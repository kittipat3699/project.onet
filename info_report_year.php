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
  <title>รายงานผลทางการเงินรายวัน</title>
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
    <div class="col-md-4">    
        <h3 style="color:white;">รายงานผลทางการเงิน</h3>
    </div>
    <div class="col-md-3">
       
    </div>
    <div class="col-md-3">
       
    </div>
      <div class="col-md-2">
    <div class="dropdown">
  <button class="btn btn-warning dropdown-toggle btn-lg " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-calendar-alt"></i> สรุปรายงาน
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="info_report_month.php">รายเดือน</a>
    <a class="dropdown-item" href="info_report_year.php">รายปี</a>
  </div>
</div>
    </div>
</div>

<?php
include 'connect.php';

mysqli_query($connect, "SET NAMES 'utf8' ");
 
$query = "
SELECT SUM(cash) AS totol, DATE_FORMAT(datesave, '%Y') AS datesave
FROM order_card_table
GROUP BY DATE_FORMAT(datesave, '%Y%')
";
$result = mysqli_query($connect, $query);
$resultchart = mysqli_query($connect, $query);  


 //for chart
$datesave = array();
$totol = array();

while($rs = mysqli_fetch_array($resultchart)){ 
  $datesave[] = "\"".$rs['datesave']."\""; 
  $totol[] = "\"".$rs['totol']."\""; 
}
$datesave = implode(",", $datesave); 
$totol = implode(",", $totol); 
 
?>


<table class="dark" width="200" border="1" cellpadding="0"  cellspacing="0" align="center">
  <thead>
  <tr class="bg-info">
    <th width="10%"  class="text-center">ปี</th>
    <th width="10%"  class="text-center">ยอดขาย</th>
  </tr>
  </thead>
  
  <?php while($row = mysqli_fetch_array($result)) { ?>
    <tr class="bg-light"> 
      <td align="center"><?php echo $row['datesave'];?></td>
      <td align="right"><?php echo number_format($row['totol'],2);?></td> 
    </tr>
    <?php } ?>

</table>
<?php mysqli_close($connect);?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
<hr>
<p align="center">

 <!--devbanban.com-->

<canvas id="myChart" width="800px" height="300px"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php echo $datesave;?>
    
        ],
        datasets: [{
            label: 'รายงานภาพรวม แยกตามเดือน (บาท)',
            data: [<?php echo $totol;?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
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
</p> 

<!-- script -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <!--devbanban.com-->
</html>