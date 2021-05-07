<?php
  require_once "actions/db_connect.php";

  if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = {$id}" ;
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    if ($result->num_rows == 1) {
      $locationName = $data['locationName'];
      $price = $data['price'];
      $descr = $data['descr'];
      $picture = $data['picture'];
      $longitude = $data['longitude'];
      $latitude = $data['latitude'];
    } else {
        header("location: error.php");
    }
    $connect->close();
  }  

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

  <title>Details for <?php echo $locationName ;?></title>
</head>
<body>
  <header>
    <?php require_once 'partials/navbar.php' ?>
  </header>
  <div class="container">
    <div class="card">
      <img src="pictures/<?php echo $picture ;?>" class="card-img" alt="<?php echo $locationName ;?>">
      <div class="card-img-overlay d-flex justify-content-center align-items-center ">
        <h5 class="card-title "><?php echo $locationName ;?></h5>
      </div>
      <div>
        <p class="card-text"><?php echo $descr ;?></p>
        <p class="card-text"><?php echo $price ;?>€</p>
      </div>
    </div>
  </div>
  
  <div id="map">hello</div>
  <script>
    var map;
    function initMap() {
      console.log("the function works");
        var location = {
          lat: <?php echo $longitude ;?>,
          lng: <?php echo $latitude ;?>
        };
        console.log("after location works");

        map = new google.maps.Map(document.getElementById('map'), {
            center: location,
            zoom: 8
        });
        console.log("map works");

        var pinpoint = new google.maps.Marker({
            position: location,
            map: map
        });
        console.log("pinpoint works");
    }
  </script>
  
  <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap">
  </script>
  


</body>
</html>