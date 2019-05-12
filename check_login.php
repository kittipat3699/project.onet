<?php
session_start();
error_reporting(~E_NOTICE);
if(isset($_POST['Username'])){
        //connection
  include("connect.php");
        //รับค่า user & password
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];
        //query


  $query_admin="SELECT * FROM employee_table Where employee_username='".$Username."' and employee_password='".$Password."' ";


  $result_admin = mysqli_query($connect,$query_admin);

  
  
  if(mysqli_num_rows($result_admin)==1){

                      $row = mysqli_fetch_array($result_admin); //คืนค่าข้อมูลในฐานข้อมูลที่อยู่ในลักษณะเป็นแถว

                      $_SESSION["UserID"] = $row["employee_id"];
                      $_SESSION["User"] = $row["employee_username"]." ".$row["employee_password"];
                      $_SESSION["Name"] = $row["employee_firstname"];
                      $_SESSION["img"] = $row["employee_picture"];
                      $_SESSION["status"] = $row["status"];

                     $_SESSION["status"]=="employee"; //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php


                     echo "<script>";
                            echo "alert(\"ยินดีต้อนรับ พนักงาน: $Username\");";
                            echo "window.location = 'index_employee.php'"; //ไปหน้าเเรกของพนักงาน
                            echo "</script>";

                            

                        
                        }
                        


                        $query_owner="SELECT * FROM owner_table Where owner_username='".$Username."' and owner_password='".$Password."' ";


              $result_owner = mysqli_query($connect,$query_owner);

  
  
              if(mysqli_num_rows($result_owner)==1){

                      $row = mysqli_fetch_array($result_owner); //คืนค่าข้อมูลในฐานข้อมูลที่อยู่ในลักษณะเป็นแถว

                      $_SESSION["UserID"] = $row["owner_id"];
                      $_SESSION["User"] = $row["owner_username"]." ".$row["owner_password"];
                      $_SESSION["Name"] = $row["owner_firstname"];
                      $_SESSION["img"] = $row["owner_picture"];
                      $_SESSION["status"] = $row["status"];

                     $_SESSION["status"]=="owner"; //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php


                     echo "<script>";
                     echo "alert(\"ยินดีต้อนรับ เจ้าของร้าน\");";
                            echo "window.location = 'index_owner.php'"; //ไปหน้าเเรกของพนักงาน
                            echo "</script>";
                            
                        }



                        $query_member="SELECT * FROM member_table Where member_username='".$Username."' and member_password='".$Password."' ";


                        $result_member = mysqli_query($connect,$query_member);
                        
                        if(mysqli_num_rows($result_member)==1){

                      $row = mysqli_fetch_array($result_member); //คืนค่าข้อมูลในฐานข้อมูลที่อยู่ในลักษณะเป็นแถว

                      $_SESSION["UserID"] = $row["member_id"];
                      $_SESSION["User"] = $row["member_username"]." ".$row["member_password"];
                      $_SESSION["Name"] = $row["member_firstname"];
                      $_SESSION["img"] = $row["member_picture"];
                      $_SESSION["status"] = $row["status"];


                      if($_SESSION["status"]=="member" ){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        if($_SESSION["status"]=="member" ){
                        echo "<script>";
                        echo "alert(\"ยินดีต้อนรับ คุณ: $Username\");";
                            echo "window.location = 'index_member.php'"; //ไปหน้าเเรกของพนักงาน
                            echo "</script>";
                        }

                      
                        
                    }
                  
                    } if ($_SESSION["status"]=="cencel" ){
                            echo "<script>";
                            echo "alert(\"ไอดีของคุณโดนแบน\");";
                            echo "window.location = 'login.php'";
                            echo "</script>";

                    

                        }

                        
                        else{
                            echo "<script>";
                            echo "alert(\" user หรือ  password ไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง\");";
                            echo "window.location = 'login.php'";
                            echo "</script>";
                        
    
                            }


                }

                ?>
