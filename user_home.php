<?php 
session_start();
include "header.php";
require_once("Object.php");
include "header.php";

$_SESSION['err'] = "";


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

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
<div class="">
    
              <?php
              include "nav.php";
              ?>
        
        
        <div class=" 3s animated bounce fadeInLeft">
        <div class = "imageDescription" style = "height:70vh">
       
        <center><p class ="bigphrase">Cloud Data Analysis</p></center>


    </div>
    <div class = "row" style="margin-top: 30px;">
    <div class ="col-sm-12 col-md-6 col-lg-6" style = "padding-top:80px;padding-left:60px;">
    <p class = "bigphraseContent">Establish Your <br>Company Database Here</p>

    
</div>
           
    <div  class ="col-sm-12 col-md-6 col-lg-6" style = "padding:150px 40px 0px 40px ;margin-bottom:10px; ">
    <p style="width: 100%;">
    Create a company database to Store employee profile,keep
             personal company's details,Save a document for the company.This could also make you an administrative 
             personnel of the company,it helps employers to know the number of employee/workers and their profile.
             This is the best site to store secretive data that belongs to a public company,to proceed to create a database for your company kindly click
             <a href="Create_company.php" class="home_links">here</a><br> 
</p>
      
    
    </div>
         
</div>

<div class = "imageDescriptiontwo">
    <center><strong class = "desc">Are you a worker in a company? </strong>
    <p style="margin-top: 15px; color:white;" style ="width:50%;">Adding profile to your present working company.
         This helps family and friends as well as co-workers to verify your profile in a company,this also provide clarity 
         within the company as your profile is being accepted by the company. Click <a href="add_profile.php" class="home_links">Profile</a></p>

</center>
                                    
 
</div>
<center>                    
    <p class="desc" style = "color:black;">Searching for a profile.?</p>
    <p style = "font-size:20px;margin-left: 10px;margin-top: 40px;">Your relative just got an emloyment in a company?.Verify his profile and position in the 
        company,the average salary of individual workers might not be displayed but its provide certainity that such individual 
        works in a company and time spent in the company.</p>
   <button class="form-control" style="width: 200px;margin-top: 30px;"><a href="Search_worker.php" style="width: 200px;height:200px; text-decoration:none;color:black;display:block;">Click Here</a></button>
</center>
      
<div class=" 5s animated bounce fadeInRight">
<div class = "row" style = "margin-bottom:-30px;">
    <div class ="col-sm-12 col-md-6 col-lg-4" style = "padding-top:80px;">
    <center  class="">    <img src = "images/feet.jpg" class = "officialImage"/><br>
    <p class="officialdescription">CEO</p>
    <p class="reduseMargin-top">Owoeye Samuel</p>
    </center>
</div>
               
    <div  class ="col-sm-12 col-md-6 col-lg-4" style = "padding-top:80px;">
        <center  class="">    <img src = "images/huzz.jpg" class = "officialImage"/><br>
            <p class="officialdescription">Co-Founder</p>
            <p class="reduseMargin-top">Owoeye Samuel</p>
            </center>
    </div>
    <div  class ="col-sm-12 col-md-6 col-lg-4" style = "padding-top:80px;">
        
    <div style="background-color:lightgrey;border-radius: 15px;padding:10px 5px 5px 20px;"><span>Comments...</span>
<div style="height: 200px;;margin-right: 10px; overflow-y: scroll;" id = "demo"> 
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


<?php
include "footer.php";
?>