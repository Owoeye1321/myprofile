
<?php 
session_start();
require_once("Object.php");
include "header.php";

$_SESSION['add_profile_err_one'] = "";

$_SESSION['add_profile_err_two'] = "";

if (isset($_POST["submit"])) {
    
$employee_image = array( "tmp_name" => $_FILES['employee_image']['tmp_name'], "name" =>  $_FILES['employee_image']['name'],
"size" => $_FILES['employee_image']['size']);
$image_tmp_name =$employee_image['tmp_name'];$image_name = $employee_image['name'];$image_size = $employee_image['size'];
$company_name = $_POST['company_name'];$company_code = $_POST['company_code'];$employee_role = $_POST['employee_role'];
$gender = $_POST['gender'];$age = $_POST['age'];$phone = $_POST['phone'];$email = $_POST['email'];
$fullname = $_POST['fullname'];

 $Object_oriented_index = new Database_object_oriented_index();
 $Object_oriented_index->add_profile_to_database($image_tmp_name,$image_name,$image_size,$company_name,$company_code,$employee_role,$fullname,$gender,$age,$phone,$email);
$_SESSION['email'] =  $_POST['email'];
}
?>
<body>
         <div class="animate animated animate zoomInUp">
<div class="header">
                <h1 style="font-size: 40px;">Add A Profile To Company</h1>
        </div>
        <center>
        <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-radius: 15px; padding:10px 10px 10px 10px;;width: 80%;">
        	<p>Only an administrative executive or a employee is qualified to open a company database</p>
        </div>
    </center>
</div>
   <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype ="multipart/form-data">
    	<div class=" 3s animated bounce fadeInLeft">	 	
    <div class="row" style="margin-top: 50px;">
    	<div class="col-sm-12 col-md-6 col-lg-6" style="padding:25px 55px 25px 25px;">
    		 <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-bottom-color: black;border-radius: 15px;padding:30px 10px 30px 20px;" >
    		 		<label style="width: 150px;height: 150px; border-radius: 40%;">
    		 			<img src="images/index.jpg"  style="width:150px; height: 150px; border-radius: 40%; padding:5px 10px 5px 5px;" >
    		 			<input type="file" required name="employee_image" style="border:none;">
    		 				</label><br>
    		 			<br>
    		 			
                                         <input class="form-control" type="text" required placeholder="Company name" name="company_name" style="margin-bottom: 10px; border-radius:5px;width: 200px;">
                                         <input class="form-control" type="text" required placeholder="Company Code" name="company_code" style="margin-bottom: 10px; border-radius:5px;width: 200px;">
                                        <input class="form-control" type="text" required placeholder="Employee role" name="employee_role"  style=" border-radius:5px;width: 200px;">
                                        <i style="color:red; font-size:13px;">
    		 				<?php if (isset($_SESSION["add_profile_err_one"])){
                                               echo $_SESSION["add_profile_err_one"];
                                        }
                                         ?></i>
    		 	
    		 	
    		 	
    		 </div>
    	</div>
    	<div class="col-sm-12 col-md-6 col-lg-6" style="padding:25px 55px 25px 25px;">
    		 <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-bottom-color: black;border-radius: 15px;padding:30px 10px 30px 20px;" >
    		 	
    		 		 <input class="form-control" type="text" required placeholder="Full name"  name="fullname" style="margin-bottom: 10px; border-radius:5px;width: 200px;">
                                        <input class="form-control" type="text" required placeholder="Age" name="age" style=" border-radius:5px;margin-bottom: 10px;width: 200px;">
                                        <input class="form-control" type="text" required placeholder="Phone" name="phone" style=" border-radius:5px;margin-bottom: 10px;width: 200px;">
                                         <input class="form-control" type="text" required placeholder="Email" name="email" style=" border-radius:5px;margin-bottom: 10px;width: 200px;">
                                         <label>Gender:</label><br>
                                         <input type="radio" value="male" required name="gender" style="margin-bottom: 10px; border-radius:5px;"> Male<br>
                                           <input type="radio" value="female" required  name="gender" style="margin-bottom: 10px; border-radius:5px;">Female<br>
                                        <i style="color:red; font-size:13px;">
    		 				<?php if (isset($_SESSION["add_profile_err_two"])){
                                               echo $_SESSION["add_profile_err_two"];
                                        }
                                         ?></i><br>
                                         <input class="btn btn-outline-primary" type="submit" value="Upload" name="submit" style="width: 195px;border-radius:5px;float: right;box-shadow: 2px 2px 2px 2px lightblue;"><br>
    		 	
    		 	
    		 </div>
    	</div>
    </div>
</div>
    </form>
    
<center>
 <div class=" 5s animated bounce zoomInDown" style="margin-top:50px; width: 270px; padding: 2px 0px 2px 0px;margin-bottom: 40px;">
                    <a class="links" href="help.php">Terms</a> <a class="links" href="help.php">Privacy </a>
                    <a class="links" href="help.php">Security </a> <a id="links" href="help.php">Contact Us </a><br>
                </div>
            </center>


<?php
include "footer.php";
?>