<?php

 include 'dbConnection.php';
 
?>


<?php

  $brand_id = $_POST['ID'];
   
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
// sql to delete a record
  $sql = "DELETE FROM brand WHERE id=$brand_id";
 
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    "ALTER TABLE `brand`\n"
    . "auto_increment = $brand_id--1;";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 

