<?php 

session_start();
        if(isset($_POST['type'])){
				//connection
                  include ("connect.php");
				//รับค่า user & password
                  $Username = $_POST['type'];
                 
				//query 
                  $sql="SELECT * FROM card_table Where member_type ='".$type."' " ;


                  $result = mysqli_query($connect,$sql);
				
                  if(mysqli_num_rows($result)==1){

                    $row = mysqli_fetch_array($result);

                      $_SESSION["Username"] = $row["card_username"];
                      $_SESSION["User"] = $row["member_username"]." ".$row["member_password"];
                      $_SESSION["Password"] = $row["card_password"];
                      $_SESSION["img"] = $row["card_img"];
                      $_SESSION["type"] = $row["typecard"];
                      
                      
                      if($_SESSION["type"]=="20฿"){ //ถ้าเป็น admin ให้กระโดดไปหน้า index_owner.php

                        Header("Location: order_card.php");

                      }

                      if($_SESSION["type"]=="50฿"){ //ถ้าเป็น admin ให้กระโดดไปหน้า index_employee.php

                        Header("Location: index_employee.php");

                      }

                      if ($_SESSION["type"]=="100฿"){  //ถ้าเป็น member ให้กระโดดไปหน้า index_member.php

                        Header("Location: index_member.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.location = 'logout.php'";
                    echo "</script>";

                  }

        }else{


             Header("Location: card.php"); //user & password incorrect back to login again

        }
?>