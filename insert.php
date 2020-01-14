<?php
  require_once('settings.config.php');          // Define db configuration arrays here
  require_once('DBConnection.php');             // Include this file
 
  $database = new DBConnection($localhost);      // Create new connection by passing in your configuration array
  $test3 = "hermest";
  $sqlInsert = "insert into usurios(nombre) VALUES('".$test3."');";              // Insert/Update/Delete Statements:
  $count = $database->runQuery($sqlInsert);     // Use this method to run inserts/updates/deletes
  echo "number of records inserted: " . $count;

  ?>