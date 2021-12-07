<?php 
session_start();
require_once("Object.php");
include "header.php";

if (isset($_POST["submit"])) {
$worker_email = $_POST['email'];

 $Object_oriented_index = new Database_object_oriented_index();
 $Object_oriented_index->Search_for_worker($worker_email);
$_SESSION['email'] =  $_POST['email'];
};
if(isset($_SESSION['invalid_email'])){
   $_SESSION['invalid_email'] = $_SESSION['invalid_email'];
} else {
  $_SESSION['invalid_email'] = "";
}


?>
<body>
     <div class=" 3s animated bounce fadeInLeft">
<div class="header">
                <h1 style="font-size: 40px;margin-top: 50px;">Worker Profile Search</h1>
        </div>
    </div>
        <center>
            <div  class=" 9s animated bounce zoomInDown" style="width:270px; height: 250px;padding-top: 20px;background-color: #fff8f8f8;border-radius: 10px;margin-top: 40px;"><p class="login_text">Search for a worker</p>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <input style="width:200px;margin-bottom: 10px; border-radius:5px;" class="form-control" type="text" required placeholder="Email" name="email" >
                                        <i style="color:red; font-size:11px;">
                                             <?php if (isset($_SESSION["invalid_email"])){
                                               echo $_SESSION["invalid_email"];
                                        }
                                         ?></i>
                                                                          
                                        <input class="btn btn-outline-primary" name="submit" type="submit" value="Search" style="width: 195px;border-radius:5px; margin-top: 15px;"><br>
                                        
                                        
                                      


                        </form>
                      
                </div>
        </center>


 </body>
<?php include "footer.php"; ?>