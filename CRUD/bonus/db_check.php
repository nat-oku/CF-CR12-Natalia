<?php

// Require conn.php (DB connection) file
require_once("../actions/db_connect.php");

// This query will check do we have car_id in the table car
// for the provided $id
if(isset($_GET["id"])){
    $id= ($_GET["id"] == "all") ? "" : " WHERE id=".$_GET["id"];
}else {
    $id= "";
}
$sql= "SELECT * FROM products $id";


// Perform a query on the DB
$result = mysqli_query($connect, $sql);

  // put all results in the rows array
  if(mysqli_num_rows($result) == 1){
      $rows = mysqli_fetch_assoc($result);
  }else {
      $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  }

// Close the DB connection
mysqli_close($connect);
