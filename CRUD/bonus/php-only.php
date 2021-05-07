<?php 
  require_once "../actions/db_connect.php";
  if(isset($_GET["id"])){ //it checks if there is a get method
    $query = "SELECT * from products where id=".$_GET['id'] ;

    $result = mysqli_query($connect, $query);

  
    $pets = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // var_dump(gettype($pets));

  
    echo json_encode($pets);
    exit(); //return is also fine
  }



  $query = "SELECT * from products";
  $result = mysqli_query($connect, $query);

  $pets = mysqli_fetch_all($result, MYSQLI_ASSOC);
  // var_dump(gettype($pets));


  echo json_encode($pets);

  $connect->close();
 

?>