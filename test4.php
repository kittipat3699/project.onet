<?php 

session_start();
        if(isset($_POST['Username'])){
				//connection
                  include ("connect.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = $_POST['Password'];
				//query 
                  $sql="SELECT * FROM member_table,employee_table Where member_table.member_user ='".$Username."' and member_table.member_password='".$Password."' ,employee_table.employee_user ='".$Username."' and employee_table.employee_password='".$Password."' "; 


                  $result = mysqli_query($connect,$sql);
				
                  if(mysqli_num_rows($result)==1){

                    $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["member_id"];
                      $_SESSION["User"] = $row["member_username"]." ".$row["member_password"];
                      $_SESSION["Name"] = $row["member_firstname"];
                      $_SESSION["img"] = $row["member_picture"];
                      $_SESSION["wallet"] = $row["member_wallet"];
                      $_SESSION["time"] = $row["member_alltimecard"];
                      $_SESSION["status"] = $row["status"];
                      
                      if($_SESSION["status"]=="owner"){ //ถ้าเป็น admin ให้กระโดดไปหน้า index_owner.php

                        Header("Location: index_owner.php");

                      }

                      if($_SESSION["status"]=="employee"){ //ถ้าเป็น admin ให้กระโดดไปหน้า index_employee.php

                        Header("Location: index_employee.php");

                      }

                      if ($_SESSION["status"]=="member"){  //ถ้าเป็น member ให้กระโดดไปหน้า index_member.php

                        Header("Location: index_member.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.location = 'logout.php'";
                    echo "</script>";

                  }

        }else{


             Header("Location: form.php"); //user & password incorrect back to login again

        }
?>