<?php
  require_once 'actions/db_connect.php';
  $sql = "SELECT * FROM products";
  $result = mysqli_query($connect ,$sql);
  $tbody=''; //this variable will hold the body for the table
  if(mysqli_num_rows($result)  > 0) {    
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
         $tbody .= "<tr>
  
              <td><img class='img-thumbnail' src='pictures/" .$row['picture']."'</td>
             <td>" .$row['locationName']."</td>
              <td>" .$row['price']."</td>
              <td>" .$row['description']."</td>
              <td>" .$row['longitude']."</td>
              <td>" .$row['latitude']."</td>

             <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
             <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
              </tr>";
     };
  } else {
     $tbody =  "<tr><td colspan='8'><center>No Data Available </center></td></tr>";
  }
  
  $connect->close();

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
  
  <title>Product List || Mount Everest Travel Agency</title>
</head>
<body>
  <div class="container">
    <div class="w-75 mt-3">
      <div class='mb-3'>
        <a href="create.php"><button class='btn btn-primary' type="button">Add new offer</button></a>
      </div>
      <p class='h2'>Travel offers</p>
      <table class='table table-striped'>
        <thead class='table-success'>
          <tr>
            <th>Picture</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Longitude</th>
            <th>Latitude</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?= $tbody;?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>