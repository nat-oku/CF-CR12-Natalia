<?php 
  require_once 'actions/db_connect.php';

  //fetching all data from the Database

  $sql = "SELECT * FROM products";

  $result = mysqli_query($connect, $sql);
  $colbody = '';
  
  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
      $colbody .= '
      <div class="col">
        <div class="card-group">
          <img src="pictures/'.$row['picture'].'" class="card-img-top" alt="'.$row['locationName'].'">
          <div class="card-body bg-warning">
            <h5 class="card-title text-green">Meet '.$row['locationName'].'</h5>
            <p class="card-text">'.$row['descr'].'</p>
            <p class="card-text">Date of birth: '.$row['price'].'</p>
            <a href="details.php?id=' .$row['id'].'"><button class="btn btn-primary btn-sm" type="button">See details</button></a>
          </div>
        </div>
      </div>
        ';
    }
  } else {
    $colbody = 'Nothing to display - no data in the DB';
  }

  $connect -> close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap, MDB stylings, Fonts, Awesome Icons -->
  <?php require_once 'components/boot_fonts.php' ?>

  <!-- adding link to CSS styles only for this project -->
  <style>
      <?php require_once "css/style.css" ?>

  </style>
  <title>Welcome to Mount Everest Travel Agency</title>
</head>
<body>
  <?php require_once 'partials/navbar.php'?>
  
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?= $colbody ;?>
    </div>
  </div>

  
</body>
</html>