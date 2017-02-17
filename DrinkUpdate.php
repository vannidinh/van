<?php

 include "dbConnection.php";
 
        if ($conn->query($sql) === TRUE) {
         $sql = "UPDATE `Sportsdrink`.`drinks` SET `drinks_id` = \'2\' WHERE `drinks`.`ID` = 2 
         AND `drinks`.`flavor` = \'Blackberry\';";

            echo "<h1>New record created successfully</h1> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        
      ?>
