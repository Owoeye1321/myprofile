<?php 
session_start();
include "header.php";
require_once("Object.php");
include "header.php";

$_SESSION['err'] = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

$comment_image = array( "tmp_name" => $_FILES['comment_image']['tmp_name'], "name" =>  $_FILES['comment_image']['name'],
"size" => $_FILES['comment_image']['size']);
$image_tmp_name =$comment_image['tmp_name'];$image_name = $comment_image['name'];$image_size = $comment_image['size'];


     $username = $_SESSION["name"];
     $comment = $_POST["Comment"];

$Object_oriented_index = new Database_object_oriented_index();
    $check_connection = $Object_oriented_index->comment($image_tmp_name,$image_name,$image_size,$username,$comment);

                 $_SESSION["comment_username"] = $_POST["Comment"];           
          
          
}
?>
<body> 
<div class="container">
    <div class="header">
                <h1 class="footer_paragraph" style="font-size: 60px;">My profile.com</p>
        </div>
        <?php  echo "<p style ='font-size:20px;margin-left:10px;'>     Dear ". $_SESSION["name"]."</p>";?>
        
        <div class=" 3s animated bounce fadeInLeft">
<div class="row" style="margin-top: 20px;">
    <div class="col-sm-12 col-md-4 col-lg-4" style="padding:25px 55px 25px 25px;">
        <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-bottom-color: black;border-radius: 15px; padding:10px 10px 10px 10px;" >
            <a href="Create_company.php" class="home_links">Create a company database</a><br>
            <p style="margin-top: 15px;">Create a company database to Store employee profile,keep personal company's details,Save a document for the company.This could also make you an administrative personnel of the company,it helps employers to know the number of employee/workers and their profile.</p>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4" style="padding:25px 55px 25px 25px;">
    <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-bottom-color: black;border-radius: 15px;padding: 10px 10px 10px 10px;" >
         <a href="add_profile.php" class="home_links">Add your profile to your company</a><br>
         <p style="margin-top: 15px;">Click the above link to add your profile to your present working company.This helps family and friends as well as co-workers to verify your profile in a company,this also provide clarity within the company as your profile is being accepted by the company.</p>
         
    </div>
 
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4" style="padding:25px 55px 25px 25px;">
    <div  style="border-color: blue;box-shadow: 5px 5px 5px 5px lightblue;border-bottom-color: black;border-radius: 15px; padding: 10px 10px 10px 10px;" >
         <a href="Search_worker.php" class="home_links">Search for a worker</a><br>
        <p style="margin-top: 15px;">Your relative just got an emloyment in a company?.Verify his profile and position in the company,the average salary of individual workers might not be displayed but its provide certainity that such individual works in a company and time spent in the company.</p>

    </div>
 
    </div>
</div>
</div>


<div class=" 5s animated bounce fadeInRight">

<div class="row" style="margin-top: 20px;">
   <div class="col-sm-12 col-md-7 col-lg-7" style="padding: 20px 45px 15px 25px;">
    <div style="box-shadow: 5px 5px 5px 5px lightgrey;height: 300px;border-radius:15px;padding:10px 10px 10px 20px;"><p>Developer</p>
     <div style="float: left; width: 200px;"> <img style="width:150px; height: 200px; border-radius: 40%;" src="../images/index.jpg"></div>
     <div style="float: right;margin-left: 0px;margin-top: 20px">
        <p style="font-size: 10px;">Email: Owoeye1321@gmail.com</p>
      <p style="font-size: 10px;">Phone: 09153464158</p>
      <p style="font-size: 10px;">Github:http://Github.com/Owoeye1321</p>
      <p style="font-size: 10px;">LinkedIn://Linkedin.com/OwoeyeSamuel</p>
     </div>
    </div>
</div>
   <div class="col-sm-12 col-md-5 col-lg-5" style="padding: 20px 45px 15px 25px;">
    <div style="background-color:lightgrey;border-radius: 15px;padding:10px 5px 5px 20px;"><span>Comments...</span>
<div style="height: 200px;;margin-right: 10px; overflow-y: scroll;"> 
 <?php include "comment.php"?>
  </div>
 
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  enctype ="multipart/form-data">
       <input class="form-control" type="text" required placeholder="Comment here" name="Comment" style="margin-top: 15px; border-radius:5px; width:200px;margin-bottom: 5px;">
     
       <input type="file" required name="comment_image" style=" margin-bottom: 5px;">
      <br>
        <i style="color:red; font-size:13px;height: 20px;">
                            <?php if (isset($_SESSION["err"])){
                                               echo $_SESSION["err"];
                                        }
                                         ?></i><br>
        <input class="btn btn-primary" type="submit" value="Submit" style="width: 80px;border-radius:5px;margin-bottom:10px;margin-top:5px">
  </form>
</div>

</div>
</div>
</div>
</div>
<center>
 <div class=" 5s animated bounce zoomInDown" style="margin-top:50px; width: 270px; padding: 2px 0px 2px 0px;margin-bottom: 40px;">
                    <a class="links" href="help.php">Terms</a> <a class="links" href="help.php">Privacy </a>
                    <a class="links" href="help.php">Security </a> <a id="links" href="help.php">Contact Us </a><br>
                </div>
            </center>

</body>

<?php
include "footer.php";
?>