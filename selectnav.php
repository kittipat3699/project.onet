<?php
        session_start();
        include ('connect.php');
        
       if($_SESSION["status"] == "owner"){
            include("nav_owner.php");
        }
       
        else if ($_SESSION["status"] == "employee"){
            include("nav_employee.php");
        }   
        else  if($_SESSION["status"] == "member"){
            include("nav_member.php");
        }
        else {
            include("nav.php");
        }
       
?>
