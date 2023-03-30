<?php
// sesion_start();
// include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, "SELECT * FROM users");
$ouput = "";

if(mysqli_num_rows($sql) == 1){
          $ouput .= "No user maches your search";

}elseif(mysqli_num_rows($sql) > 0){
}
?>