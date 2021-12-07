<?php
session_start();
require_once("Object.php");
include "header.php";
//echo "Dear ". $_SESSION['company_name'];
        $get_comp =  $_SESSION['company_name']
        
               
?>
<body>
	

        <div style="background-color: #fff8f8f8; align-content: center;padding-bottom: 100px;">
                <div class="header">
                <h1 class="footer_paragraph">My profile.com</h1>
        </div>

        <div class="row" style="margin-bottom: 20px;">
        	<div class="col-sm-8 col-md-8 col-lg-8" style="padding:25px 55px 25px 25px;">
        		<div style="width: 150px;height: 150px; border-radius: 40%;">
                                <?php
                                 $Object_oriented_index = new Database_object_oriented_index();
                     $check_connection = $Object_oriented_index->connect_to_database_function();
                        if ($check_connection == true) {
                               $sql = "SELECT * FROM `company_and_admins` WHERE `company_name` = '$get_comp' ";
                            $result = $check_connection->query($sql);
                            if ($result->num_rows > 0) {
                                     while ($row = $result->fetch_assoc()) {
                                          $get_image = $row["company_image"];
                                            $get_company_code = $row["company_code"];
                                          $get_company_name = $row["company_name"];
                                          $get_admin_name = $row["admin"];
                                          $get_company_gig = $row["company_gig"];
                                          $get_company_address = $row["company_address"];
                                          $get_company_email = $row["company_email"];
                                          //print_r($get_image);
                                          echo "<img style='height:150px;width:150px; margin-top: 20px; border-radius:50%;'src='$get_image'>";

                                        
                                     }
                               } else{
                                echo " not done";
                               // $check_connection->error;
                               }  
                        }

                                ?>
                                       
                                </div>
        	</div>
        	<div  class="col-sm-8 col-md-8 col-lg-4" style="padding:25px 55px 25px 25px;">
                  <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-bottom-color: black;border-radius: 15px;padding:10px 10px 10px 20px; margin-top: 40px;" >
                          <?php echo "Dear ". $_SESSION["admin_username"]; ?>
                  </div>    

                </div>
        </div>
        <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6" style="padding:25px 55px 25px 25px;">
                 <label style="margin-bottom: 10px;"><strong>Company name:</strong><?php echo"<i> ". $get_company_name."</i>";?></label><br>
                   <label style="margin-bottom: 10px;"><strong>Administrative name:</strong><?php echo"<i> ". $get_admin_name."</i>";?></label><br>

                   <label style="margin-bottom: 10px;"><strong>Company Email:</strong><?php echo"<i> ". $get_company_email."</i>";?></label><br>
                    <label style="margin-bottom: 10px;"><strong>Company Address:</strong><?php echo"<i> ". $get_company_address."</i>";?></label>


                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                        <label style="margin-bottom: 10px;"><strong>Company Code:</strong><?php echo"<i> ". $get_company_code."</i>";?></label><br>
                         <label style="margin-bottom: 10px;"><strong>Company Gig:</strong><?php echo"<i> ". $get_company_gig."</i>";?></label><br>
                         <a style="color:black" class="links" href="view_workers.php">View employees</a>

                </div>
                
        </div>
        </div>
        <center>
 <div style="margin-top:50px; width: 270px; padding: 2px 0px 2px 0px;margin-bottom: 40px;">
                    <a class="links" href="help.php">Terms</a> <a class="links" href="help.php">Privacy </a>
                    <a class="links" href="help.php">Security </a> <a id="links" href="help.php">Contact Us </a><br>
                </div>
            </center>
	
</body>



<?php
include "footer.php";
?>