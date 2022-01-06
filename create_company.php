
<?php 
session_start();
require_once("Object.php");
include "header.php";

$_SESSION['company_sign_err_one'] = "<span style='color:green;'> Password must be at least 8 characters</span>";

$_SESSION['company_sign_err_two'] = "";

if (isset($_POST["submit"])) {
    
$company_image = array( "tmp_name" => $_FILES['company_image']['tmp_name'], "name" =>  $_FILES['company_image']['name'],
"size" => $_FILES['company_image']['size']);
$image_tmp_name =$company_image['tmp_name'];$image_name = $company_image['name'];$image_size = $company_image['size'];
$company_name = $_POST['company_name'];$admin_username = $_POST['admin_username'];$admin_password = $_POST['admin_password'];
$company_gig = $_POST['company_gig'];$company_address = $_POST['company_address'];$company_email = $_POST['company_email'];

 $Object_oriented_index = new Database_object_oriented_index();
 $Object_oriented_index->create_company_database($image_tmp_name,$image_name,$image_size,$company_name,$admin_username,$admin_password,$company_gig,$company_address,$company_email);
$_SESSION['company_name'] =  $_POST['company_name'];
$_SESSION['admin_username'] =  $_POST['admin_username'];
}
?>
<body>
    
<?php
              include "nav.php";
              ?>
        <div class="animate animated animate zoomInUp">
<div class="header">
                <h1 style="font-size: 40px;">Create a company database</h1>
        </div>
        <center>
        <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-radius: 15px; padding:10px 10px 10px 10px;;width: 80%;">
        	<p>Only an administrative personnel or a manager is qualified to open a company database</p>
        </div>
    </center>
</div>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype ="multipart/form-data">
 <div class=" 3s animated bounce fadeInLeft">
    <div class="row" style="margin-top:  30px;">

    	<div class="col-sm-12 col-md-6 col-lg-6" style="padding:25px 55px 25px 25px;">
    		 <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-bottom-color: black;border-radius: 15px;padding:30px 10px 30px 20px;" >
    		 		<label style="width: 150px;height: 150px; border-radius: 40%;">
    		 			<img src="images/index.jpg"  style="width:150px; height: 150px; border-radius: 40%; padding:5px 10px 5px 5px;" >
    		 			<input type="file" required name="company_image" style="border:none;display:none;">
                        <span> Choose an image</span>
    		 				</label><br>
    		 			<br>
    		 			
                                         <input class="form-control" type="text" required placeholder="Company name" name="company_name" style="margin-bottom:10px; border-radius:5px;width: 200px;">
                                         <input class="form-control" type="text" required placeholder="Admin username" name="admin_username" style="margin-bottom: 10px; border-radius:5px;width: 200px;">
                                        <input class="form-control" type="password" required placeholder="Admin password" name="admin_password" style=" border-radius:5px;width: 200px;">
                                        <i style="color:red; font-size:13px;">
    		 				<?php if (isset($_SESSION["company_sign_err_one"])){
                                               echo $_SESSION["company_sign_err_one"];
                                        }
                                         ?></i>
    		 	
    		 	
    		 	
    		 </div>
    	</div>
    	<div class="col-sm-12 col-md-6 col-lg-6" style="padding:25px 55px 25px 25px;">
    		 <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-bottom-color: black;border-radius: 15px;padding:30px 10px 30px 20px;" >
    		 	<textarea class="form-control" placeholder="Company's Gig" required style="border-radius:9px;width: 100%;height: 200px;margin-bottom: 10px;" name="company_gig"></textarea>
    		 		 <input class="form-control" type="text" required placeholder="Company Address" name="company_address" style="margin-bottom: 10px; border-radius:5px;width: 200px;">
                                        <input class="form-control" type="text" required placeholder="Company Email" name="company_email" style=" border-radius:5px;width: 200px;">
                                        <i style="color:red; font-size:13px;">
    		 				<?php if (isset($_SESSION["company_sign_err_two"])){
                                               echo $_SESSION["company_sign_err_two"];
                                        }
                                         ?></i><br>
                                         <input class="btn btn-outline-primary" type="submit" value="Upload" name="submit" style="width: 195px;border-radius:5px;float: right;box-shadow: 2px 2px 2px 2px lightblue;"><br>
    		 	
    		 	
    		 </div>
    	</div>
    </div>
</div>
    </form>


<?php
include "footer.php";
?>