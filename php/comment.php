<?php

require_once("Object.php");
$Object_oriented_index = new Database_object_oriented_index();
$check_connection = $Object_oriented_index->connect_to_database_function();
if ($check_connection == true) {

$sql = "SELECT * FROM `comments`";
$result = $check_connection->query($sql);
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
$get_image = $row['image'];
  echo "<div style='margin-top: 5px;'>  <img style='border-radius: 50%; height: 30px;width: 30px;' src='$get_image'><span style='margin-left: 5px;'>".$row['username'].":</span><span style='margin-left: 5px;'>".$row['comment'].":</span></div>";

}
}

}




																						






?>





