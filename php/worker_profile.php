<?php 
session_start();
require_once("Object.php");
include "header.php";

$get_email =$_SESSION['email'];
$Object_oriented_index = new Database_object_oriented_index();
  $check_connection = $Object_oriented_index->connect_to_database_function();
  if ($check_connection == true) {
  	 $sql = "SELECT * FROM `individual profile` WHERE `email_address` = '$get_email' ";
                            $result = $check_connection->query($sql);
                            if ($result->num_rows > 0) {
                            	 while ($row = $result->fetch_assoc()) {
$get_image = $row["image"];$get_company_code = $row["company_code"];$get_company_name = $row["company_name"];
$get_employee_role = $row["employee_role"];$get_admin_name = $row["fullname"];$gender = $row["gender"];
$age = $row["age"];$phone = $row["phone"];	echo " 
<div style='background-color: #fff8f8f8; align-content: center;padding-bottom: 100px;'>
     	<div class='header'><h1 class='footer_paragraph'>Worker Profile</h1></div>

        <div class='row' style='margin-bottom: 20px;'>
            <div class='col-sm-8 col-md-8 col-lg-8' style='padding:25px 55px 25px 25px;'>
                <div style='width: 150px;height: 150px; border-radius: 40%;'>
                             <img style='height:150px;width:150px; margin-top: 20px; border-radius:50%;'src='$get_image'>
                                </div>
            </div>
            <div  class='col-sm-8 col-md-8 col-lg-4' style='padding:25px 55px 25px 25px;'>
                  <div  style='border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-bottom-color: black;border-radius: 15px;padding:10px 10px 10px 20px; margin-top: 40px;' >
                           ".$_SESSION['email'] ."
                  </div>    

                </div>
        </div>

  <div class='row'>
                <div class='col-sm-12 col-md-6 col-lg-6' style='padding:25px 55px 25px 25px;'>
                 <label style='margin-bottom: 10px;'><strong>Company name:</strong><i> ". $get_company_name."</i></label><br>                 
                   <label style='margin-bottom: 10px;'><strong>Employee Name:</strong><i> ". $get_admin_name."</i></label><br>
                   <label style='margin-bottom: 10px;'><strong>Employee Role:</strong><i> ". $get_employee_role."</i></label><br>

                   <label style='margin-bottom: 10px;'><strong> Email:</strong><i> ". $get_email."</i></label><br>
                  
                </div>
                <div class='col-sm-12 col-md-6 col-lg-6'>
                        <label style='margin-bottom: 10px;'><strong>Phone:</strong><i> ". $phone."</i></label><br>
                         <label style='margin-bottom: 10px;'><strong>Gender:</strong><i> ". $gender."</i></label><br>
                           <label style='margin-bottom: 10px;'><strong>Age:</strong><i> ". $age."</i></label>



                </div>
                
        </div>
         
</div>
  <center>
 <div style='margin-top:50px; width: 270px; padding: 2px 0px 2px 0px;margin-bottom: 40px;'>
                    <a class='links' href='help.php'>Terms</a> <a class='links' href='help.php'>Privacy </a>
                    <a class='links' href='help.php'>Security </a> <a id='links' href='help.php'>Contact Us </a><br>
                </div>
            </center>
                            	 	";
                            	 }

                            }else{
                       

                              header("Location:search_worker.php");
                               $_SESSION['invalid_email'] = "The profile with the email does not exist";
                            }
  } else {
  	echo "Unable to connect to database";
  }
  











include "footer.php";
?>
