<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/js/bootstrap.js">
    <link rel="stylesheet" href="css/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" integrity="sha384-DmABxgPhJN5jlTwituIyzIUk6oqyzf3+XuP7q3VfcWA2unxgim7OSSZKKf0KSsnh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <title>ซื้อบัตร</title>
    <style>    
    .dropdown-menu {
    background-color:#fea02c;
    }
    #logomember{
      padding:5px
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

    <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="img/logo/logo2.png" alt="logo" width="55px" height="55px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">จองเครื่อง</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">สมัครสมาชิก</a>
        </li>
      </ul>
      <!-- ย้าย navbar ไปไว้ฝั่งขวา -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            ข้อมูลสมาชิก</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <img src="img/people.png" id="logomember" alt="logo" width="40px" height="40px"><b>กิตติพัฒน์</b>
            <a class="dropdown-item " href="edit_member.php">แก้ไขข้อมูล</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php">ออกจากระบบ</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ticket.php">ซื้อบัตร</a>
        </li>
      </ul>

    </div>
  </nav><br><br>
  <!-- End Navbar -->

    <div class="container">
        <h3 class="text-center">บัตรเติมเวลาสำหรับสมาชิก </h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="img/logo/logo2.png">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">บัตร 1.40 ชั่วโมง</a></h3>
                        <div class="price">20฿
                            <span>25฿</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="img/logo/logo2.png">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">บัตร 4.25 ชั่วโมง</a></h3>
                        <div class="price">50฿
                            <span>60฿</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="img/logo/logo2.png">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">บัตร 9.00 ชั่วโมง</a></h3>
                        <div class="price">฿100

                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" src="img/logo/logo2.png">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">บัตร 13.40 ชั่วโมง</a></h3>
                        <div class="price">$150

                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- ขึ้น row ใหม่ แบ่ง เป็นคอลัมน์ละ 3 ส่วน -->
    <div class="row justify-content-center">
        <div class="col-md-3 col-sm-6 ">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="img/logo/logo2.png">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">บัตร 18.20 ชั่วโมง</a></h3>
                    <div class="price">200฿

                    </div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 align-self-center">
            <div class="product-grid6">
                <div class="product-image6">
                    <a href="#">
                        <img class="pic-1" src="img/logo/logo2.png">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">บัตร 28 ชั่วโมง</a></h3>
                    <div class="price">300฿

                    </div>
                </div>
                <ul class="social">
                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    ้
    <hr>

    <!-- Footer -->
    <footer class="page-footer font-small bg-secondary disabled pt-4 mt-4">
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-sm-12 text-center" id="site-intro">
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

</html>