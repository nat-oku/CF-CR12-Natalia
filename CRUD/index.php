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
        <div class="rounded-0 card-group h-100 border border-danger shadow">
          <img src="pictures/'.$row['picture'].'" class="rounded-0 card-img-top" alt="'.$row['locationName'].'">
          <div class="rounded-0 card-body bg-darkNew text-light">
            <h5 class="card-title">'.$row['locationName'].'</h5>
            <p class="card-text">'.$row['descr'].'</p>
            <p class="card-text">Price: '.$row['price'].'</p>
            <a href="details.php?id=' .$row['id'].'"><button class="btn btn-danger btn-sm" type="button">See details</button></a>
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
<header>
    <?php require_once 'partials/navbar.php' ?>
    <?php require_once 'partials/hero.php' ?>
  </header>
  
  <div class="container w-75 mt-3 mb-3">
    <h2 class="text-center text-danger fw-light mt-3 mb-3" id="offers"> Our travel offers</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?= $colbody ;?>
    </div>
  </div>

  <footer>
    <?php require_once 'partials/footer.php' ?>
  </footer>

  
</body>
</html>