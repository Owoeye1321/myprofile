<?php
require_once("Object.php");

$check ="+12-202-555-0378";
function validate_phone_number($phone){
 if (preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone)) {
   echo "phone number is valid";
 } elseif(preg_match('/^[0-9]{10}+$/', $phone)){
 echo "Valid phone number";
 }elseif(preg_match('/^\+[0-9]{1,3}-[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone)){
 echo "Valid phone number seen";
 }else{
  echo "invalid phone number";
 }
 
}
validate_phone_number($check);
/*



$time  = time();
echo $time;


$val = "gabriel";

if (file_exists("../companies/$val.txt")) {
     echo "
          <script>
           
               alert('This company already exist');
             

         </script>
     "; 
    } else {
   $created = fopen("../companies/$val.txt","a+");    
      fwrite($created,"<br> <br>  $val");
    }
if (isset($_POST['submit'])) {
	$source  =  $_FILES['pic']['tmp_name'];  		
 $destination = '../images/'.$_FILES['pic']['name'];
 $filetype =strtolower(pathinfo($destination,PATHINFO_EXTENSION));
 if(file_exists($destination)){
    $err = "File already exist";
     
 }else if($_FILES['pic']['size'] > 200000){
      $err = "file too large,upload file less than 200 kilobyte";
 }else if($filetype == "png" || $filetype == "jpg" || $filetype == "jpeg"){

 if( move_uploaded_file($source,$destination)){
   $uploaded_image = $destination;
   $err = $uploaded_image ." uploaded successfully";
   
  
//fwrite($file, "<img style='height:300px;width:300px; margin-top: 20px;' src='$uploaded_image'>");
	$Object_oriented_index = new Database_object_oriented_index();
	$check_connection = $Object_oriented_index->connect_to_database_function();
	if ($check_connection == true) {
		$test_data = $Object_oriented_index->test_data($uploaded_image);
		$sql = "INSERT INTO `company_and_admins` (`company_name`,`admin`,`password`,`company_image`,`company_gig`,`company_address`,`company_email`) VALUES ('XurdeTech','Cyberxurde','owoeye1234','{$test_data}','We develop responsive,beautiful and functional sites.Your mobile application could be built here.','Lages state','owoeye1321@gmail.com')" ;
		$result = $check_connection->query($sql);
		 if ($result > 0) {
		 	 echo "
          <script>
           
               alert('Uploaded successfully');
                  window.location='test.php';
         </script>
     "; 
		 } else {$err = "Unable to connect to table";
		  echo $check_connection->error;
		 }
		 
	} else {
		$err = "Unable to connect to database";
	}
	

 }
}else{
    $err = "Only png, jpeg and jpg files are required";
}
}



?>

 <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype ="multipart/form-data">
 	<input type="file" name="pic" required>
 	<input type="submit" value="upload" name="submit">
 	<?php if(isset($err)){echo $err;} ?>
 </form>

<?php 
$company_image = array( "tmp_name" => $_FILES['pic']['tmp_name'], "name" =>  $_FILES['pic']['name'],
"size" => $_FILES['pic']['size']);
print_r($company_image['name']); echo "<br>";
print_r($company_image['size']); echo "<br>";
print_r($company_image['tmp_name']);
/*$Object_oriented_index = new Database_object_oriented_index();
	$check_connection_test = $Object_oriented_index->connect_to_database_function();
	if ($check_connection_test == true) {
   $sql = "SELECT * FROM  `company_images`";
   $check = $check_connection_test->query($sql);
   if ($check->num_rows > 0 ) {
   	 while ($row = $check->fetch_assoc())
               {
               	$value = $row['company_images'];
   echo "<img style='height:100px;width:100px; margin-top: 20px; border-radius:50%;'src='$value'>";
   echo $value;
     }
   } else {
   	$err = "No image yet";
   }
   }
    <td style = 'font-size:9px;border:1px solid black; border-collapse:collapse;'> ".$row["phone"]."</td>
                            <td style = 'font-size:10px;border:1px solid black; border-collapse:collapse;'> ".$row["occupation"]."</td>
                        <td  style = 'font-size:12px;border:1px solid black; border-collapse:collapse;'> ".$row["degree"]."</td> 
                       <td style = 'font-size:10px;border:1px solid black; border-collapse:collapse;'> ".$row["course_of_study"]."</td>
                            <td style = ';font-size:12px;border:1px solid black; border-collapse:collapse;'> ".$row["bio"]."</td>

                          <td  style = ' font-size:12px;border:1px solid black; border-collapse:collapse;'> ".$row["nationality"]."</td> 
                        <td style = ' font-size:12px;border:1px solid black; border-collapse:collapse;'> ".$row["state_of_origin"]."</td>
                                 <td style = ' font-size:10px;border:1px solid black; border-collapse:collapse;'> ".$row["city"]."</td>
                          <td  style = '; font-size:10px;border:1px solid black; border-collapse:collapse;'> ".$row["address"]."</td> 
                                  <td style = 'font-size:12px;border:1px solid black; border-collapse:collapse;'>
                                      <a href='index.php?id=$select_id_to_delete_row_from_database&edit=$target_edit' style='text-decoration:none;'>Edit</>
                                  </td>        
                                    <td style = 'font-size:12px;border:1px solid black; border-collapse:collapse;'>
                                        <a href='index.php?id=$select_id_to_delete_row_from_database&delete=$target_delete' style='text-decoration:none;'>Delete</a>
                                    </td>
  
                                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype ="multipart/form-data">
          
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6" style="padding:25px 55px 25px 25px;">
         <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-bottom-color: black;border-radius: 15px;padding:30px 10px 30px 20px;" >
            <label style="width: 150px;height: 150px; border-radius: 40%;">
              <img src="../images/index.jpg"  style="width:150px; height: 150px; border-radius: 40%; padding:5px 10px 5px 5px;" >
              <input type="file" required name="employee_image" style="border:none;">
                </label><br>
              <br>
              
                                         <input type="text" required placeholder="Company name" name="company_name" style="margin-bottom: 10px; border-radius:5px;"><br>
                                         <input type="text" required placeholder="Company Code" name="company_code" style="margin-bottom: 10px; border-radius:5px;"><br>
                                        <input type="text" required placeholder="Employee role" name="employee_role" style=" border-radius:5px;"><br>
                                        <i style="color:red; font-size:13px;">
                <?php if (isset($_SESSION["add_profile_err_one"])){
                                               echo $_SESSION["add_profile_err_one"];
                                        }
                                         ?></i>
          
          
          
         </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6" style="padding:25px 55px 25px 25px;">
         <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-bottom-color: black;border-radius: 15px;padding:30px 10px 30px 20px;" >
          <input placeholder="Full name" required style="border-radius:5px;margin-bottom:10px;" name="fullname"></input><br>
             
                                        <input type="text" required placeholder="Age" name="Age" style=" border-radius:5px; margin-bottom: 10px;"><br>
                                         <input type="text" required placeholder="Phone" name="phone" style=" border-radius:5px;margin-bottom: 10px;"><br>
                                         <input type="text" required placeholder="Email" name="email" style=" border-radius:5px;margin-bottom: 10px;"><br>
                                         <label>Gender:</label>
                                         <input type="radio" value="male" required name="gender" style="margin-bottom: 10px; border-radius:5px;"> Male
                                           <input type="radio" value="female" required  name="gender" style="margin-bottom: 10px; border-radius:5px;">Female<br>


                                        <i style="color:red; font-size:13px;">

                <?php if (isset($_SESSION["add_profile_err_two"])){
                                               echo $_SESSION["add_profile_err_two"];
                                        }
                                         ?></i><br>
                                         <input class="submit" type="submit" value="upload" name="submit" style="width: 195px;border-radius:5px;float: right;box-shadow: 2px 2px 2px 2px lightblue;"><br>
          
          
         </div>
      </div>
    </div>
    </form>
     */
 ?>

 <?php
session_start();
require_once("index.php");
include "header.php";
//echo "Dear ". $_SESSION['fullname'];
        $email =  $_SESSION['email']
        
               
?>


        <div class="row" style="margin-bottom: 20px;">
            <div class="col-sm-8 col-md-8 col-lg-8" style="padding:25px 55px 25px 25px;">
                <div style="width: 150px;height: 150px; border-radius: 40%;">
                             <img style='height:150px;width:150px; margin-top: 20px; border-radius:50%;'src='$get_image'>
                                </div>
            </div>
            <div  class="col-sm-8 col-md-8 col-lg-4" style="padding:25px 55px 25px 25px;">
                  <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-bottom-color: black;border-radius: 15px;padding:10px 10px 10px 20px; margin-top: 40px;" >
                          <?php echo  $_SESSION["email"]; ?>
                  </div>    

                </div>
        </div>
        <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6" style="padding:25px 55px 25px 25px;">
                 <label style="margin-bottom: 10px;"><strong>Company name:</strong><?php echo"<i> ". $get_company_name."</i>";?></label><br>
                  <label style="margin-bottom: 10px;"><strong>Company code:</strong><?php echo"<i> ". $get_company_code."</i>";?></label><br>
                   <label style="margin-bottom: 10px;"><strong>Employee Name:</strong><?php echo"<i> ". $get_admin_name."</i>";?></label><br>
                   <label style="margin-bottom: 10px;"><strong>Employee Role:</strong><?php echo"<i> ". $get_employee_role."</i>";?></label><br>

                   <label style="margin-bottom: 10px;"><strong> Email:</strong><?php echo"<i> ". $email."</i>";?></label><br>
                  
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                        <label style="margin-bottom: 10px;"><strong>Phone:</strong><?php echo"<i> ". $phone."</i>";?></label><br>
                         <label style="margin-bottom: 10px;"><strong>Gender:</strong><?php echo"<i> ". $gender."</i>";?></label><br>
                           <label style="margin-bottom: 10px;"><strong>Age:</strong><?php echo"<i> ". $age."</i>";?></label>



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
 <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" src = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   