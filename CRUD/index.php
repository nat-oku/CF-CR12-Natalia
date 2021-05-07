<?php 
  require_once 'actions/db_connect.php';

  //fetching all data from the Database

  $sql = "SELECT * FROM products";

  $result = mysqli_query($connect, $sql);
  $cardBody = '';
  
  if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
      $cardBody .= '
          <div class="col">
            <div class="card">
            <img src="pictures/'.$row['picture'].'" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">'.$row['locationName'].'</h5>
                <p class="card-text">'.$row['price'].'</p>
                <p class="card-text">'.$row['descr'].'</p>
                <p class="card-text">'.$row['longitude'].'</p>
                <p class="card-text">'.$row['latitude'].'</p>
                <td><a href="details.php?id=' .$row['id'].'"><button class="btn btn-primary btn-sm" type="button">See details</button></a>
              </div>
            </div>
          </div>
        ';
    }
  } else {
    $cardBody = 'Nothing to display - no data in the DB';
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

  <style>
    /* adding link to CSS styles only for this project */
    <?php require_once 'css/style.css' ?>
  </style>

  <title>Welcome to Mount Everest Travel Agency</title>
</head>
<body>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?= $cardBody; ?>

    </div>
  </div>
  
</body>
</html>