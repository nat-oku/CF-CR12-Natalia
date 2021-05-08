<?php
require_once 'db_connect.php';
require_once  'file_upload.php';

  if ($_POST) {    
    $locationName = $_POST['locationName'];
    $price = $_POST['price'];
    $descr = $_POST['descr'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];

    $id = $_POST['id'];
    //variable for upload pictures errors is initialized
    $uploadError = '';

    $picture = file_upload($_FILES['picture']);//file_upload() called  
    if ($picture->error===0){
        ($_POST["picture"]=="product.png")?: unlink("../pictures/$_POST[picture]");          
        $sql = "UPDATE products SET locationName = '$locationName', price = '$price', descr = '$descr', longitude = '$longitude', latitude = '$latitude',  picture = '$picture->fileName' WHERE id = {$id}";
    }else{
        $sql = "UPDATE products SET locationName = '$locationName', price = '$price', descr = '$descr', longitude = '$longitude', latitude = '$latitude' WHERE id = {$id}";
    }    
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    $connect->close();    
  } else {
    header("location: ../error.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap, MDB stylings, Fonts, Awesome Icons -->
  <?php require_once '../components/boot_fonts.php' ?>

  <style>
    /* adding link to CSS styles only for this project */
    <?php require_once '../css/style.css' ?>
  </style>

  <title>Edit Offer Request</title>
</head>
<body>

<div class="container mt-3 mb-3 text-light">
    <div>
      <h2 class="text-danger fw-light">Update request response</h2>
    </div>
    <div class="alert alert-light" role="alert">
      <p><?php echo ($message) ?? ''; ?></p>
      <p><?php echo ($uploadError) ?? ''; ?></p>
      <a href='../update.php?id=<?=$id;?>' ><button class="btn btn-outline-danger" type='button'>Back</button></a>
      <a href='../index.php'><button class="btn btn-danger"  type='button'>Home</button></a>
    </div>
  
</body>
</html>