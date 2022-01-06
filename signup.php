
<?php
session_start();
require_once("Object.php");
include "header.php";

$Object_oriented_index = new Database_object_oriented_index();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"]; 
        $password = $_POST["password"];        
        $email = $_POST["email"];
        $Object_oriented_index->signup_by_user($username,$password,$email);
        
             $_SESSION["name"] = $_POST["username"]; 
      

}
include "header.php";
?>
    <body> 
    
  <center>
     <div style="margin-top:100px;margin-bottom: 10px;"><img style="border-radius: 50%; height: 50px;width: 50px;" src="../images/xurde.jpg"></div>
                   <div style="width:270px; height: 270px;padding-top: 20px;background-color: #fff8f8f8;border-radius: 10px;"><p class="login_text">Sign in to My Profile</p>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <input class="form-control" type="text" required placeholder="Username" name="username" style="margin-bottom: 10px; border-radius:5px;width:200px">
                                        <input class="form-control" class="form-control"type="text" required placeholder="Email" name="email" style="margin-bottom: 10px; border-radius:5px;width:200px">
                                        <input class="form-control" type="password" required placeholder="Password" name="password" style = " border-radius:5px;width:200px" >
                                        <i style="color:red; font-size:13px;"><?php if (isset($_SESSION["err"])) {
                                               echo $_SESSION["err"];
                                        } elseif(isset($_SESSION["signed up"])){echo $_SESSION["signed up"];}
                                         ?></i><br>
                                        <input class="btn btn-outline-primary" type="submit" value="Submit" style="width: 195px;  border-radius:5px;"><br>
                                        


                        </form>
                      
     
    
                    </div>
                     <div style="border:1px solid; border-radius: 5px; margin-top: 9px; width: 270px; padding: 2px 0px 2px 0px;">
                    <span style="font-size: 13px;">Already have an account?</span> <a id="sign_up" href="login.php">Sign in</a><br></div>
                      <div style="margin-top:20px; width: 270px; padding: 2px 0px 2px 0px;">
                    <a class="links" href="help.php">Terms </a> <a class="links" href="help.php">Privacy </a>
                    <a class="links" href="help.php">Security </a> <a id="links" href="help.php">Contact Us </a><br>
                </div>

                    </center>
 </body>
 
</html>