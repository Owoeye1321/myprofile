
<?php
require_once("Object.php");
include "header.php";
session_start();
 $_SESSION["Invalid login"] = "";
$Object_oriented_index = new Database_object_oriented_index();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"]; 
        $password = $_POST["password"];
        $Object_oriented_index->login_by_user($username,$password);
               
               
                 $_SESSION["name"] = $_POST["username"];           
          
          
        


}
 include_once "header.php";
?>

<body> 

 <center>
    <div class="animate animated animate zoomInUp">
  <div  style="margin-top:100px;margin-bottom: 10px;"><img style="border-radius: 50%; height: 50px;width: 50px;" src="../images/xurde.jpg"></div>
                 <div  style="width:270px; height: 250px;padding-top: 20px;background-color: #fff8f8f8;border-radius: 10px;"><p class="login_text">Sign in to My Profile</p>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <input style="width:200px;margin-bottom: 10px; border-radius:5px;" class="form-control" type="text" required placeholder="Username" name="username" >
                                        <input style="width:200px; border-radius:5px;" class="form-control" type="password" required placeholder="Password" name="password">
                                        <i style="color:red; font-size:13px;"><?php if (isset($_SESSION["Invalid login"])) {
                                               echo $_SESSION["Invalid login"];
                                        } elseif(isset($_SESSION["Logged in"])){echo $_SESSION["Logged in"];}
                                         ?></i><br>
                                        <input class="btn btn-outline-primary" type="submit" value="Submit" style="width: 195px;border-radius:5px;"><br>
                                        <a id="forget_password" href="#">Forget password?</a>
                                        
                                      


                        </form>
                      
                </div>
                <div style="border:1px solid; border-radius: 5px; margin-top: 9px; width: 270px; padding: 2px 0px 2px 0px;">
                    <span style="font-size: 13px;">New to My Profile?</span> <a id="sign_up" href="signup.php">Create an account</a><br></div>
                <div style="margin-top:20px; width: 270px; padding: 2px 0px 2px 0px;">
                    <a class="links" href="help.php">Terms</a> <a class="links" href="help.php">Privacy </a>
                    <a class="links" href="help.php">Security </a> <a id="links" href="help.php">Contact Us </a><br>
                </div>
                </div>
                </center>
        
 </body>
<?php include "footer.php"; ?>