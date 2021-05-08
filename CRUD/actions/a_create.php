<?php 
  require_once "db_connect.php";
  require_once "file_upload.php";

  if ($_POST) {  
    $locationName = $_POST['locationName'];
    $price = $_POST['price'];
    $descr = $_POST['descr'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];

    $uploadError = '';
    //this function exists in the service file upload.
    $picture = file_upload($_FILES['picture']);  
  
    $sql = "INSERT INTO products (locationName, price, descr, longitude, latitude, picture) VALUES ('$locationName', '$price', '$descr', '$longitude', '$latitude', '$picture->fileName')";
 
    if ($connect->query($sql) === true ) {
        $class = "success";
        $message = "The entry below was successfully created <br>
             <table class='table w-50'><tr>
             <td> $locationName </td>
             <td> $price</td>
             <td> $descr</td>
             <td> $longitude </td>
             <td> $latitude </td>

             </tr></table><hr>";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
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

  <title>Update</title>
</head>
<body>
  <div class="container mt-3 mb-3 text-light">
    <div>
      <h2 class="text-danger fw-light">Create request response</h2>
    </div>    
    <div class="alert alert-light" role="alert">
        <p><?php echo ($message) ?? ''; ?></p>
        <p><?php echo ($uploadError) ?? ''; ?></p>
        <a href='../create.php'><button class="btn btn-outline-dark"  type='button'>Add a new offer</button></a>
        <a href='../product-list.php'><button class="btn btn-danger" type='button'>Back to product list</button></a>
        <a href='../index.php'><button class="btn btn-light"  type='button'>Home</button></a>
    </div>
  </div>
</body>
</html>