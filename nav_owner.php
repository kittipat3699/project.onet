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
          <a class="nav-link" href="index_owner.php">หน้าแรก <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <!-- ย้าย navbar ไปไว้ฝั่งขวา -->
      <ul class="navbar-nav ml-auto">

         <li class="nav-item">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="uploads/<?php print_r($_SESSION["img"]);?>" id="logomember" alt="logo" width="40px" height="40px"><?php print_r($_SESSION["Name"]);?>
          <?php //session_destroy();?></a>
          <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">           
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
           
          </div> -->
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php" ><i class="fas white fa-sign-out-alt fa-2x" style="color:white"></i></a>
        </li>
        
      </ul>

    </div>
  </nav><br><br>
  <!-- End Navbar -->