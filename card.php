<?php 
include('selectnav.php');

if ($_SESSION["status"] != "member"){  //check session

	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}?>
<?php
include ('connect.php');

if(isset($_POST['submit'])){
    $card  = $_POST['card'];
    $price  = $_POST['price'];
    $time  = $_POST['time'];
    $status  = $_POST['status'];
    
  
  

    $query = "INSERT INTO `order_card_table`(`card`,`price`,`time`,`status_card`)
    VALUES('$card','$price','$time','$status')";
    $result = mysqli_query($connect,$query);
    if($query){
        echo "<script>";
        echo "alert(\"สั่งซื้อบัตรเรียบร้อยแล้ว\");";
        echo "window.location = 'info_member.php';"; //ไปหน้าเเรก
        echo "</script>";
        
      }else {
        echo "<script>alert('สั่งซื้อบัตรไม่สำเร็จ')</script>";
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>ซื้อบัตร</title>
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
    .product-grid6{
        background: white;
    }
    .product-grid6,.product-grid6 .product-image6{overflow:hidden}
    .product-grid6{font-family:'Open Sans',sans-serif;text-align:center;position:relative;transition:all .5s ease 0s}
    .product-grid6:hover{box-shadow:0 0 10px rgba(0,0,0,.3)}
    .product-grid6 .product-image6 a{display:block}
    .product-grid6 .product-image6 img{width:100%;height:auto;transition:all .5s ease 0s}
    .product-grid6:hover .product-image6 img{transform:scale(1.1)}
    .product-grid6 .product-content{padding:12px 12px 15px;transition:all .5s ease 0s}
    .product-grid6:hover .product-content{opacity:0}
    .product-grid6 .title{font-size:20px;font-weight:600;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
    .product-grid6 .title a{color:#000}
    .product-grid6 .title a:hover{color:#2e86de}
    .product-grid6 .price{font-size:18px;font-weight:600;color:#2e86de}
    .product-grid6 .price span{color:#999;font-size:15px;font-weight:400;text-decoration:line-through;margin-left:7px;display:inline-block}
    .product-grid6 .social{background-color:#fff;width:100%;padding:0;margin:0;list-style:none;opacity:0;transform:translateX(-50%);position:absolute;bottom:-50%;left:50%;z-index:1;transition:all .5s ease 0s}
    .product-grid6:hover .social{opacity:1;bottom:20px}
    .product-grid6 .social li{display:inline-block}
    .product-grid6 .social li a{color:#909090;font-size:16px;line-height:45px;text-align:center;height:45px;width:45px;margin:0 7px;border:1px solid #909090;border-radius:50px;display:block;position:relative;transition:all .3s ease-in-out}
    .product-grid6 .social li a:hover{color:#fff;background-color:#2e86de;width:80px}
    .product-grid6 .social li a:after,.product-grid6 .social li a:before{content:attr(data-tip);color:#fff;background-color:#2e86de;font-size:12px;letter-spacing:1px;line-height:20px;padding:1px 5px;border-radius:5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
    .product-grid6 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-20px;z-index:-1}
    .product-grid6 .social li a:hover:after,.product-grid6 .social li a:hover:before{opacity:1}
    @media only screen and (max-width:990px){.product-grid6{margin-bottom:30px}
}    </style>
</head>

<body>
<br><br>

    

    <div class="container">
        <h3 class="text-center" style="color:white;">บัตรเติมเวลาสำหรับสมาชิก </h3> 
        
        <div class="row">
        <form action="order_card.php" method="post" class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="img/logo/logo2.png">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a >บัตร 1.40 ชั่วโมง</a></h3>
                        <input type="hidden" value="รอชำระเงิน" name="status">
                        <input type="hidden" value="บัตรเติมเวลาประเภท 1.40 ชั่วโมง" name="card">
                        <input type="hidden" value="20" name="price">
                        <div class="price" value="20" name="price">20฿
                            <span>25฿</span>
                        </div>
                    </div>
                    <ul class="social">                        
                        <li>  <button type="submit" name="submit" class="btn btn-primary" id='submit'
                          value='submit'>สั่งซื้อ</button></li>
                    </ul>
                </div>
        </form>
        
        <form action="order_card.php" method="post" class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="img/logo/logo2.png">
                        </a>
                    </div>
                    <div class="product-content">
                    <input type="hidden" value="รอชำระเงิน" name="status">
                        <h3 class="title"><a href="#">บัตร 4.25 ชั่วโมง</a></h3>
                        <input type="hidden" value="บัตรเติมเวลาประเภท 4.25 ชั่วโมง" name="card">
                        <input type="hidden" value="50" name="price">
                        <div class="price">50฿
                            <span>60฿</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li> <button type="submit" name="submit" class="btn btn-primary" id='submit'
                          value='submit'>สั่งซื้อ</button></li>
                    </ul>
                </div>
        </form>

             <form action="order_card.php" method="post" class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="img/logo/logo2.png">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">บัตร 9.00 ชั่วโมง</a></h3>
                        <input type="hidden" value="รอชำระเงิน" name="status">
                        <input type="hidden" value="บัตรเติมเวลาประเภท 9 ชั่วโมง" name="card">
                        <input type="hidden" value="100" name="price">
                        <div class="price">฿100

                        </div>
                    </div>
                    <ul class="social">                        
                        <li><button type="submit" name="submit" class="btn btn-primary" id='submit'
                          value='submit'>สั่งซื้อ</button></li>
                    </ul>
                </div>
            </form>
            
            <form action="order_card.php" method="post" class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="img/logo/logo2.png">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">บัตร 13.40 ชั่วโมง</a></h3>
                        <div class="price">$150
                        <input type="hidden" value="รอชำระเงิน" name="status">
                        <input type="hidden" value="บัตรเติมเวลาประเภท 13.40 ชั่วโมง" name="card">
                        <input type="hidden" value="150" name="price">

                        </div>
                    </div>
                    <ul class="social">
                        <li><button type="submit" name="submit" class="btn btn-primary" id='submit'
                          value='submit'>สั่งซื้อ</button></li>
                    </ul>
                </div>
            </form>
            
        </div>
    </div>
    <hr>

    <!-- ขึ้น row ใหม่ แบ่ง เป็นคอลัมน์ละ 3 ส่วน -->
    <div class="row justify-content-center">

        <form action="order_card.php" method="post" class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="img/logo/logo2.png">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">บัตร 18.20 ชั่วโมง</a></h3>
                    <div class="price">200฿
                    <input type="hidden" value="รอชำระเงิน" name="status">
                    <input type="hidden" value="บัตรเติมเวลาประเภท 18.20 ชั่วโมง" name="card">
                    <input type="hidden" value="200" name="price">

                    </div>
                </div>
                <ul class="social">
                    <li><button type="submit" name="submit" class="btn btn-primary" id='submit'
                          value='submit'>สั่งซื้อ</button></li>
                </ul>
            </div>
        </form>
        
        <form action="order_card.php" method="post" class="col-md-3 col-sm-6">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="img/logo/logo2.png">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">บัตร 28 ชั่วโมง</a></h3>
                    <div class="price">300฿
                    <input type="hidden" value="รอชำระเงิน" name="status"> 
                    <input type="hidden" value="บัตรเติมเวลาประเภท 28 ชั่วโมง" name="card">
                    <input type="hidden" value="300" name="price">

                    </div>
                </div>
                <ul class="social">                    
                    <li><button type="submit" name="submit" class="btn btn-primary" id='submit'
                          value='submit'>สั่งซื้อ</button></li>                    
                </ul>
            </div>
        </form>
    </div>
    
    
    <hr>

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
