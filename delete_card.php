<?php
include ('connect.php');

$id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

    if ( null==$id ) {
        header("Location: admin_info_card.php");
    }

if(isset($_POST['delete']))
{
   
    // get id to delete
    $id = $_POST['id'];
    $old_image= $row['file_name'];
    // mysql delete query 
    $query = "DELETE FROM card_table WHERE card_id = '$id'";
    
    $result = mysqli_query($connect, $query);
    
    //delete directory
    unlink("uploads/$old_image");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>

<body>
  <!--Start Navbar-->
  

    <!--divสร้างหัวข้อDelete-->
    <div class="container">
      <h3 class="text-center">Delete</h3>
    </div>


    <!--สร้างformเพื่อDeleteข้อมูลจากphp-->
    <?php
 
$sql="SELECT * FROM card_table WHERE card_id='".$_GET['id']."'";
$res=mysqli_query($connect,$sql);
$arr=mysqli_fetch_array($res);
?>
      <div class="row">
          <div class="col-md-3"></div>
                <div class="col-md-6 pb-5">
                    <form class="form-horizontal" action="delete_card.php" method="post">
                        
                    <input type="hidden" name="id" value="<?php echo $arr['card_id'] ?>">
                      <p class="alert alert-dismissible alert-danger">Are you sure to delete ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger" name="delete">Yes</button>
                          <a class="btn" href="admin_info_card.php">No</a>
                      </div>
                    </form>
                </div>

    </div> <!-- /container -->
  </body>
</html>