<?php
require_once 'actions/db_connect.php';

  if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = {$id}";
    $result = $connect->query($sql);
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $locationName = $data['locationName'];
        $price = $data['price'];
        $descr = $data['descr'];
        $picture = $data['picture'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
    } else {
        header( "location: error.php");
    }
    $connect->close();
  } else {
    header("location: error.php");
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

  <style>
    /* adding link to CSS styles only for this project */
    <?php require_once 'css/style.css' ?>
  </style>
  <title>Edit Offer</title>
</head>
<body>

  <div class="container">
    <fieldset>
      <legend class='h2'> Update request <img class='img-thumbnail rounded-circle'  src='pictures/<?php echo $picture ?>' alt="<?php echo $locationName ?>"></legend>
      <form action="actions/a_update.php" method="post"  enctype="multipart/form-data">

        <table>
          <tr>
            <th>Offer Name</th>
            <td><input class ="form-control" type="text"   name="locationName" placeholder="Name of the offer" value="<?php echo $locationName ?>"/></td>
          </tr>

          <tr>
            <th>Price</th>
            <td><input class="form-control" type="number" name="price" step="any" placeholder="Price" value="<?php echo $price ?>"/></td>
          </tr>

          <tr>
            <th>Description</th>
            <td><input class='form-control' type="text" name="descr" placeholder="Short description of the offer" value="<?php echo $descr ?>"></td>
          </tr>

          <tr>
            <th>Picture</th>
            <td><input class="form-control" type="file" name= "picture"></td>
          </tr>

          <tr>
            <th>Longitude</th>
            <td><input class='form-control w-50' type="" name="longitude" placeholder="i.e. -19.94885093229765" step="any" value="<?php echo $longitude ?>"></td>
          </tr>

          <tr>
              <th>Latitude</th>
              <td><input class='form-control w-50' type="" name="latitude" placeholder="i.e. -69.63354848956602" step="any" value="<?php echo $latitude ?>"></td>
          </tr>

          <tr>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
            <input type="hidden" name="picture" value= "<?php echo $data['picture'] ?>" />
            <td><button class="btn btn-success" type="submit">Save Changes</button></td>
            <td><a href="index.php"><button class ="btn btn-warning" type ="button">Home </button></a ></td>
          </tr>
        </table>
      </form>
    </fieldset>
  </div>
  
</body>
</html>