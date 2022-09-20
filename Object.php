<?php
  class Database_object_oriented_index
  {
    
        public  $servername = "Localhost";
            public $username ="epiz_32558059"; 
              public $password ="koqzoxofIMWT9";
             public $database_name="epiz_32558059_database";  
           
 //connection to database function block of code
 //Connecting the keyword to the database 


      
 public function connect_to_database_function()
 {
        $servername =  $this->servername;
           $username = $this->username ;
             $password = $this->password ;
               $database_name = $this->database_name ;

        $connect = new mysqli($servername,$username,$password,$database_name);
            if ($connect->connect_error) {
              die($connect->connect_error);
            } 
            return $connect;
 }

 //clearing data inputs
 public function test_data($data)
 {
   $data = trim($data);
   $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;   
 }



 //insert to database function block of code    
  //Inserting the keyword in the database 


// ABOUT YOURSELF
 //TECHNICAL CHALLENGE
 //3 WUESTION YOUD ASK ASK INTERVIEW



  //accessing the $connect return statement from the connect_to_database function
  //using an if condition statement to query the insert sql statement


  public  function insert_info_to_database($firstname, $lastname,$email_address, $gender, $age, 
           $image, $phone, $occupation, $degree, $course_of_study, $bio, $nationality, $state_of_origin, $city, $address)
 {
              $sql = "INSERT INTO `individual profile` (`firstname`,`lastname`,`email_address`,`gender`,`age`,`date_of_birth`,
              `image`,`phone`,`occupation`,`degree`,`course_of_study`, `bio`,`nationality`,`state_of_origin`,`city`,`address`)
                 VALUES ('$firstname','$lastname','$email_address','$gender','$age','$image','$phone','$occupation',
                  '$degree','$course_of_study','$bio','$nationality','$state_of_origin','$city','$address')";

               $check_connection = $this->connect_to_database_function(); 
      if ($check_connection == true) 
        {
               if ($check_connection->query($sql) === true) 
          {
             echo "New record created successfully";
          } else {
            echo "Error: " .$sql. "<br>".$check_connection->error; 
                 } 
                $check_connection->close(); 
       
        }           
 }
   //select to database function block of code
  //assigning the class variables to the method's variables using the "this" key variable     
  //selecting the keyword from the database 
  //accessing the $connect return statement from the connect_to_database function
  //using an if condition statement to query the select sql statement    


public  function admin_select_from_database_function()
{
   
  echo"
  <caption> Employee Profile</caption> <table style = 'border:1px solid black;border-collapse:collapse;width:100%;'>
  <th rowspan = '1'>S/N</th> <th  rowspan = '1'>Firstname</th><th>Lastname</th><th>Email</th><th>Gender</th><th>Age</th>
  <th>Image</th>
  </table>";
           $check_connection = $this->connect_to_database_function();
     if ($check_connection == true) 
  {
                      $sql = "SELECT * FROM `individual profile` ";
                         $result = $check_connection->query($sql);
     if ($result->num_rows > 0) 
          {
            $sn_to_identity_user = 0;
                         //output data of each row
   
                        while ($row = $result->fetch_assoc())
               {
                     
                  $sn_to_identity_user++;
                                  $select_id_to_delete_row_from_database = $row["id"];
                                    $target_delete ="delete";
                                  $target_edit ="edit";
                              

                       //  echo $select_id_to_delete_row_from_database;
                          echo 
                  "<table style = 'border:1px solid black;border-collapse:collapse;width:100%;'>

                    <tr>
                           <td  style = 'font-size:10px; border:1px solid black; border-collapse:collapse;'> ".$sn_to_identity_user."</td>
                       <td  style = 'font-size:12px; border:1px solid black; border-collapse:collapse;'> ".$row["firstname"]."</td> 
                           <td style = 'font-size:12px; border:1px solid black; border-collapse:collapse;'> ".$row["lastname"]."</td>
                   <td style = 'font-size:12px; border:1px solid black; border-collapse:collapse; font-size:10px;'> ".$row["email_address"]."</td>
                             <td  style = 'font-size:12px; border:1px solid black; border-collapse:collapse;'> ".$row["gender"]."</td> 
                           <td style = 'font-size:12px;border:1px solid black; border-collapse:collapse;'> ".$row["age"]."</td>
                                  
                              <td  style = 'font-size:8px;border:1px solid black; border-collapse:collapse;'> ".$row["image"]."</td> 
                            
        
                   </tr>       
                  </table>";
               } 

            } else {
                      die("No result with the email was found");
                     }
   
  } else {
            die("An error stil exist in database connection"); 
           }

            echo" <table style = 'border:1px solid black;border-collapse:collapse;width:100%;margin-top:40px;'>
  <th rowspan = '1'>Number</th> <th  rowspan = '1'>Occupation</th><th>Degree</th><th>Gig</th><th>Nationaity</th><th>Address</th>
  
  </table>";
           $check_connection = $this->connect_to_database_function();
     if ($check_connection == true) 
  {
                      $sql = "SELECT * FROM `individual profile` ";
                         $result = $check_connection->query($sql);
     if ($result->num_rows > 0) 
          {
            $sn_to_identity_user = 0;
                         //output data of each row
   
                        while ($row = $result->fetch_assoc())
               {
                     
                  $sn_to_identity_user++;
                                  $select_id_to_delete_row_from_database = $row["id"];
                                    $target_delete ="delete";
                                  $target_edit ="edit";
                              

                       //  echo $select_id_to_delete_row_from_database;
                          echo 
                  "<table style = 'border:1px solid black;border-collapse:collapse;width:100%;'>

                     <td style = 'font-size:9px;border:1px solid black; border-collapse:collapse;'> ".$row["phone"]."</td>
                            <td style = 'font-size:10px;border:1px solid black; border-collapse:collapse;'> ".$row["occupation"]."</td>
                        <td  style = 'font-size:12px;border:1px solid black; border-collapse:collapse;'> ".$row["degree"]."</td> 
                     
                            <td style = ';font-size:12px;border:1px solid black; border-collapse:collapse;'> ".$row["bio"]."</td>

                          <td  style = ' font-size:12px;border:1px solid black; border-collapse:collapse;'> ".$row["nationality"]."</td> 
                        
                          <td  style = '; font-size:10px;border:1px solid black; border-collapse:collapse;'> ".$row["address"]."</td> 
                                  <td style = 'font-size:12px;border:1px solid black; border-collapse:collapse;'>
                                      <a href='index.php?id=$select_id_to_delete_row_from_database&edit=$target_edit' style='text-decoration:none;'>Edit</>
                                  </td>        
                                    <td style = 'font-size:12px;border:1px solid black; border-collapse:collapse;'>
                                        <a href='index.php?id=$select_id_to_delete_row_from_database&delete=$target_delete' style='text-decoration:none;'>Delete</a>
                                    </td>    
                  </table>";
               } 
               
            } else {
                      die("No result with the email was found");
                     }
   
  } else {
            die("An error stil exist in database connection"); 
           }
  
}
  //Delete the data function block of code  
  //Getting the id of the data to delete
  //Else returnt to admin select from database function

public  function admin_delete_function()
{
        if (isset($_GET["id"]) && isset($_GET["delete"])) 
        {
               $delete_user_with_id = $_GET["id"];
               $check_connection_for_deleting_from_the_database = $this->connect_to_database_function();
               if ($check_connection_for_deleting_from_the_database == true)
                {
                  $sql = "DELETE FROM `individual profile` WHERE `id` = $delete_user_with_id";
                     $check = $check_connection_for_deleting_from_the_database->query($sql);
                      if ($check == true)
                      {
                        echo "<script>alert('Deleted successfully')</script>";

                      } else {
                        echo "<script>alert('Unable to delete data')</script>";
                      }
                      $this->admin_select_from_database_function();              
               } else {
                echo "No we are not";
               }
               
             
    
        } else {
                  $this->admin_select_from_database_function();
                }
  
    
}

  //Update the data function block of code  
  //Checking connection from database and updating the data
 

 public  function update_data_in_database($firstname, $lastname, $gender, $age, $date_of_birth, $image, $phone,
   $occupation, $degree, $course_of_study, $bio, $nationality, $state_of_origin, $city, $address)
 {
      $check_connection_to_update_in_the_database = $this->connect_to_database_function();
        
              if (isset($_GET["id"]) && isset($_GET["edit"]))
              {
                $id_to_update =$_GET["id"];
                if ($check_connection_to_update_in_the_database == true)
                {
                   $sql ="UPDATE `individual profile` SET `firstname`=$firstname SET `lastname`=$lastname SET `gender`=$gender SET `age`=$age 
                       SET `date_of_birth` = $date_of_birth SET `image` = $image SET `phone` = $phone SET `occupation` = $occupation
                         SET`degree` = $degree SET `course_of_study` = $course_of_study SET `bio` = $bio SET `nationality` = $nationality
                         SET `state_of_origin` = $state_of_origin SET `city` = $city SET `address` = $address WHERE `id` = $id_to_update" ;
                              if ($check_connection_to_update_in_the_database->query($sql) == true) 
                                    {
                                      echo "<script>alert('Updated successfully')</script>";
                                    } else {
                                      echo "<script>alert('Unable to update')</script>";
                                      $this->admin_select_from_database_function();

                                           }
                                    
                } else {
                             echo "<script>alert('Unable to connect to database')</script>";
                       }
              } else {
                $this->admin_select_from_database_function();
                      }
              
         
          

              
 }

//logging in to database
 public function login_by_user($username,$password)
 {
$get_username = $username;
$get_password=$password;
   $check_connection_to_login  = $this->connect_to_database_function();
   if ($check_connection_to_login == true) {
    $sql = "SELECT `id` from `user_login` where `username` = '$get_username' and `password` = '$get_password'";
    $proper_check_to_database = $check_connection_to_login->query($sql);
       if ($proper_check_to_database->num_rows > 0) {
        //$_SESSION["Logged in"] = "<span style = 'color:green;'>logged in successfully</span>";  
         echo "
          <script>
           
               alert('Login successfully');
                  window.location='user_home.php';
         </script>
     ";                
              

    } else{
      $_SESSION["Invalid login"] = "Invalid username or password";
     

    }
    
   } else {
    echo "Unable to access database";
   
   }
   
 }

//signing up to database
 public function signup_by_user($username,$password,$email)
 {

   $check_connection_to_signup = $this->connect_to_database_function();
   if ($check_connection_to_signup == true)
  {

     $get_username = $this->test_data($username);
     $get_password =  $this->test_data($password);
     $get_email =  $this->test_data($email);
     if (!preg_match("/^[a-zA-Z ]*$/",$get_username)) {
      $_SESSION["err"] = "Only letters and white space allowed for username";
    }
    if (!filter_var($get_email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION["err"] = "Invalid email format";
    }
    
    if (strlen($get_password) < 8) {
      $_SESSION["err"] = "Password must be at least 8";
    }

    if (empty($_SESSION["err"]) & isset($get_username) & isset($get_password) & isset($get_email) ) {
      $sql = "SELECT `username`,`email_address` FROM `user_login` WHERE `username` == '$get_username' or `email_address` == '$get_email' ";
      $result = $check_connection_to_signup->query($sql);
      if ($result == true) {
        $_SESSION["err"] = "User already exist";
      } else {          
     $sql = "INSERT INTO `user_login` (`username`,`password`,`email_address`) VALUES ('$get_username','$get_password','$get_email');";
     $result = $check_connection_to_signup->query($sql);
     if ($result > 0) {
       //$_SESSION["signed up"] = "<span style = 'color:green;'>Signed up successfully</span>";
        
           echo "
          <script>
           
               alert('Signed up successfully');
                  window.location='user_home.php';
         </script>
     "; 
       } else {
       $_SESSION["signed up"] = "Unable to sign up sucessfully";
     }
     
           }
   
    } else {
      $_SESSION["signed up"] = "Unable to sign up";
    }
    
  } else {
    $_SESSION["err"] = "Server issues";
   }
   

 }

 //Creating a database for a company
 public function create_company_database($image_tmp_name,$image_name,$image_size,$company_name,$admin_username,$admin_password,$company_gig,$company_address,$company_email)
{
   $admin_username = $this->test_data($admin_username); $company_name = $this->test_data($company_name);  $admin_password = $this->test_data($admin_password);   $company_gig = $this->test_data($company_gig);  $company_address = $this->test_data($company_address);$company_email = $this->test_data($company_email);

    if (!preg_match("/^[a-zA-Z ]*$/",$company_name)) {
      $_SESSION["company_sign_err_one"] = "<span style='color:red;'>Only letters and white space allowed for Company name</span>";
    }
     if (!preg_match("/^[a-zA-Z ]*$/",$admin_username)) {
      $_SESSION["company_sign_err_one"] = "<span style='color:red;'>Only letters and white space allowed for username</span>";
    }    
    if (strlen($admin_password) < 8) {
      $_SESSION["company_sign_err_one"] = "<span style='color:red;'> Password must be at least 8 characters</span>";
    }else{ $_SESSION["company_sign_err_one"] = "";}
    if (!filter_var($company_email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION["company_sign_err_two"] = "<span style='color:red;'>Invalid email format</span>";
    }
     if (!preg_match("/^[a-zA-Z ]*$/",$company_address)) {
      $_SESSION["company_sign_err_one"] = "<span style='color:red;'>Only letters and white space allowed for username</span>";
    }  
    $source  = $image_tmp_name; 
       
    $destination = 'company images/'.$image_name;
    $filetype = strtolower(pathinfo($destination,PATHINFO_EXTENSION));
    if(file_exists($destination)){  
     $_SESSION["company_sign_err_one"] = "File already exist";
     
    }else if($image_size > 200000){
      $err = "file too large,upload file less than 200 kilobyte";
   }else if($filetype == "png" || $filetype == "jpg" || $filetype == "jpeg"){
       $_SESSION["add_profile_err_one"] = "";
  }else{ $_SESSION["add_profile_err_one"] = "Only png,jpg and jpeg file is accepted";}


    if (empty($_SESSION["company_sign_err_one"]) & empty($_SESSION["company_sign_err_two"])) {
      
       $check_connection = $this->connect_to_database_function();
        if ($check_connection == true) {
           $company_code = time();
    if (file_exists("companies/$company_name.txt")) {
     echo "
          <script>
           
               alert('This company already exist');
               window.location='create_company.php';

         </script>
     "; 
    } else {
       if( move_uploaded_file($source,$destination)){
     $uploaded_image = $destination;
  // $_SESSION["company_sign_err_two"]  = $uploaded_image ." uploaded successfully";
   
  
//fwrite($file, "<img style='height:300px;width:300px; margin-top: 20px;' src='$uploaded_image'>");
    } 
    $f_myfile =   fopen("companies/$company_name.txt", "a+");
      fwrite($f_myfile, " Company name : $company_name");
     $s_myfile =   fopen("companies/$admin_username.txt", "a+");
   $detail = "Username : ".$admin_username ."<br> Password: ".$admin_password;
    fwrite($s_myfile, $detail);
     $code_file =   fopen("companies/company_code/$company_code.txt", "a+");
      fwrite($code_file, " Company name : $company_name");

  
     
   // $test_data = $Object_oriented_index->test_data($uploaded_image);
     
    $sql = "INSERT INTO `company_and_admins` (`company_name`,`admin`,`password`,`company_image`,`company_code`,`company_gig`,`company_address`,`company_email`) VALUES ('$company_name','$admin_username','$admin_password','$uploaded_image','$company_code','$company_gig','$company_address','$company_email')" ;
    $result = $check_connection->query($sql);
     if ($result > 0) {
       echo "
          <script>
           
               alert('Uploaded successfully');
               window.location='administrative_page.php';

         </script>
     "; 
     } else {$_SESSION["company_sign_err_two"] = "Unable to connect to table";
      echo $check_connection->error;
     }
   }
     
  } else {
   $_SESSION["company_sign_err_two"] = "Unable to connect to database";
  }
   }
  

  

       
  
     
 }


public function add_profile_to_database($image_tmp_name,$image_name,$image_size,$company_name,$company_code,$employee_role,$fullname,$gender,$age,$phone,$email)
{

    $company_name = $this->test_data($company_name); $company_code = $this->test_data($company_code);  $employee_role = $this->test_data($employee_role); $gender = $this->test_data($gender);  $age = $this->test_data($age);$phone = $this->test_data($phone);$email = $this->test_data($email);$fullname = $this->test_data($fullname);
     if (!preg_match("/^[a-zA-Z ]*$/",$company_name)) {
      $_SESSION["add_profile_err_one"] = "<span style='color:red;'>Only letters and white space allowed for Company name</span>";
    }
     if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
      $_SESSION["add_profile_err_one"] = "<span style='color:red;'>Only letters and white space allowed for Company name</span>";
    }
     if (!preg_match("/^[a-zA-Z ]*$/",$employee_role)) {
      $_SESSION["add_profile_err_one"] = "<span style='color:red;'>Only letters and white space allowed for username</span>";
    }    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION["add_profile_err_two"] = "<span style='color:red;'>Invalid email format</span>";
    }
    if (preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone)) {
       $_SESSION["add_profile_err_two"] = "";
     } 
     elseif(preg_match('/^[0-9]{11}+$/', $phone)){
     $_SESSION["add_profile_err_two"] = "";
     }elseif(preg_match('/^\+[0-9]{1,3}-[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone)){
    $_SESSION["add_profile_err_two"] = "";
    }else{
     $_SESSION["add_profile_err_two"] = "<span style='color:red;'>Invalid number</span>";
     }

      $source  = $image_tmp_name; 
       
      $destination = 'workers images/'.$image_name;
      $filetype = strtolower(pathinfo($destination,PATHINFO_EXTENSION));
       if(file_exists($destination)){
     $_SESSION["add_profile_err_one"] = "File already exist";
     
    }else if($image_size > 200000){
      $err = "file too large,upload file less than 200 kilobyte";
   }else if($filetype == "png" || $filetype == "jpg" || $filetype == "jpeg"){
    $_SESSION["add_profile_err_one"] = "";
  }else{ $_SESSION["add_profile_err_one"] = "Only png,jpg and jpeg file is accepted";}

//fwrite($file, "<img style='height:300px;width:300px; margin-top: 20px;' src='$uploaded_image'>");
    if (empty($_SESSION["add_profile_err_one"]) & empty($_SESSION["add_profile_err_two"])) {

       $check_connection = $this->connect_to_database_function();
        if ($check_connection == true) {
    if (file_exists("workers/$fullname.txt")) {
     echo "
          <script>
           
               alert('This employee already exist');
               window.location='add_profile.php';

         </script>
     "; 
    } else {
       
   // $test_data = $Object_oriented_index->test_data($uploaded_image);
     if (file_exists("companies/company_code/$company_code.txt") && 
              file_exists("companies/$company_name.txt")) {
       if( move_uploaded_file($source,$destination)){
     $uploaded_image = $destination;
  // $_SESSION["company_sign_err_two"]  = $uploaded_image ." uploaded successfully";
  }
      
      $f_myfile =   fopen("workers/$fullname.txt", "a+");
      fwrite($f_myfile, " Workers name : $fullname");
     $s_myfile =   fopen("workers/$fullname.txt", "a+");
   $detail = "Username : ".$fullname ."<br> Role: ".$employee_role;
    fwrite($s_myfile, $detail);

       // code...
       $sql = "INSERT INTO `individual profile` (`fullname`,`email_address`,`gender`,`age`,`image`,`phone`,`employee_role`,`company_name`,`company_code`) VALUES ('$fullname','$email','$gender','$age','$uploaded_image','$phone','$employee_role','$company_name','$company_code')" ;

    $result = $check_connection->query($sql);
     if ($result > 0) {
       echo "
          <script>
           
               alert('Uploaded successfully');
               window.location='user_page.php';

         </script>
     "; 
     } else {
      $_SESSION["company_sign_err_two"] = "Unable to connect to table";
      echo $check_connection->error;
        }
     } else {
      echo "
          <script>alert('Company Name or code is not correct')
           window.location='add_profile.php';
           </script>
      ";
      $_SESSION["add_profile_err_one"] = "Company Name or code is not correct";
     }
     
   
   }
     
  } else {
   $_SESSION["add_profile_err_one"] = "Unable to connect to database";
  }
   }
  
 


}

public function Search_for_worker($email){
  $email = $this->test_data($email);
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION["invalid_email"] = "<span style='color:red;'>Invalid email format</span>";
    }else{

     echo "
          <script>alert('Processing . . . ')
            window.location='worker_profile.php';
           </script>
      ";
    }
}

public function comment($image_tmp_name,$image_name,$image_size,$username,$comment){
    $get_username = $this->test_data($username);
     $get_comment = $this->test_data($comment);

     $source  = $image_tmp_name;                                           
       
      $destination = 'comment images/'.$image_name;
      $filetype = strtolower(pathinfo($destination,PATHINFO_EXTENSION));
       if($image_size > 200000){
       $_SESSION["err"] = "file too large,upload file less than 200 kilobyte";
   }else if($filetype == "png" || $filetype == "jpg" || $filetype == "jpeg"){
    $_SESSION["err"] = "";
  }else{ $_SESSION["err"] = "Only png,jpg and jpeg file is accepted";}

     $check_connection = $this->connect_to_database_function();
     if ($check_connection == true) {
       if( move_uploaded_file($source,$destination)){
     $uploaded_image = $destination;
  }
      $sql = "INSERT INTO `comments` (`image`,`username`,`comment`) VALUES ('$uploaded_image','$get_username','$get_comment')";
      $result = $check_connection->query($sql);
      if ($result > 0) {
         echo "
          <script>alert('Commented Successfully ')
          
           </script>
      ";
       } else {
        echo $check_connection->error;
         echo "
          <script>alert('Unable to comment ')
            
           </script>
      ";
      }
      
     }

}


}

  //$Object_oriented_index = new Database_object_oriented_index();
   //$Object_oriented_index->connect_to_database_function();
 /* $Object_oriented_index->insert_info_to_database("Samuel","Owoeye","Owoeye1321@gmail.com","Male","23","1998-04-29 ","image","09153464158","Developer","Bsc","Computer science",
  "I love to write codesI love to write codesI love to write codesI love to write codesI love to write codesVI love to write codesI love to write codes","Nigeria","lagos","Agbado","Address go far");
     
  $Object_oriented_index->admin_select_from_database_function();
   
  $Object_oriented_index->admin_delete_function();
   */
  //$Object_oriented_index->update_data_in_database("Olamide","Ishola","Cyberxurde@gmail.com","Male","24","1997-04-29 ","image","08136197329","Programmer","Bsc","Agric technology",
//  "I'm a software developerI'm a software developerI'm a software developerI'm a software developerI'm a software developerVI'm a software developerI'm a software developer","United state","Texas","San antonio","West avenue");
//$Object_oriented_index->login_by_user("Cyberxurde","password");
  
?>