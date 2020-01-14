<?php
 echo "dsd";
 require_once('settings.config.php');          // Define db configuration arr>
 require_once('DBConnection.php');             // Include this file

 $database = new DBConnection($localhost);      // Create new connection by pa>

 $sqlSelect = "select * from usurios;";           // Select Statements:
 $rows = $database->getQuery($sqlSelect);      // Use this method to run sele>

 foreach($rows as $row){
              echo $row["nombre"] . "<br/>";
 }


?>