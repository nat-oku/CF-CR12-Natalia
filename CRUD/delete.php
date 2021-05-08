<?php 
require_once 'actions/db_connect.php';

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

  <style>
    /* adding link to CSS styles only for this project */
    <?php require_once 'css/style.css' ?>
  </style>
  <title>Delete Offer</title>
</head>
<body>
<div  class="container mt-3 mb-3"> 
    <fieldset>
      <legend class='h2 text-danger fw-light'> Delete request <img class='img-thumbnail'src='pictures/<?php echo $picture ?>' alt="<?php echo $locationName ?>"></legend>
      <h5 class="text-light fw-light">You have selected the data below:</h5>

      <table class="table w-75 mt-1 text-light">
        <tr>
          <td><?php echo $locationName?></td>
          <td><?php echo $price?></td>
          <td><?php echo $latitude?></td>
          <td><?php echo $longitude?></td>
        </tr>
      </table>

      <h3 class="mb-4 text-danger fw-light">Do you really want to delete this offer?</h3>

      <form action="actions/a_delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>" />
        <input type="hidden" name="picture" value="<?php echo $picture ?>" />
        <button class="btn btn-danger"  type="submit"> Yes, delete it! </button>
        <a href="product-list.php"><button class="btn btn-outline-light" type="button"> No, go back! </button></a >
      </form>

    </fieldset>
  </div>
  
</body>
</html>

