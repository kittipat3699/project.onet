
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="img/logo/logo2.png" alt="logo" width="55px" height="55px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index_member.php">หน้าแรก <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="card.php">ซื้อบัตร</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="testbook.php">จองเครื่อง</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="member_history_card.php">แจ้งโอนเงิน</a>
        </li>
        
      </ul>
      <!-- ย้าย navbar ไปไว้ฝั่งขวา -->
      <ul class="navbar-nav ml-auto">
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="uploads/<?php print_r($_SESSION["img"]);?>" id="logomember" alt="logo" width="40px" height="40px"><?php print_r($_SESSION["Name"]);?></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item " href="member_history_card.php">ประวัติสั่งซื้อบัตร</a> 
            <a class="dropdown-item " href="member_history_seat.php">ข้อมูลจองเครื่อง</a> 
            <!-- <a class="dropdown-item " href="member_info_booking.php">ข้อมูลจองเครื่อง</a>  -->
            <a class="dropdown-item " href="edit_member.php">แก้ไขข้อมูล</a>            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
           
          </div>
        </li>
        
      </ul>

    </div>
  </nav>

  <!-- End Navbar -->