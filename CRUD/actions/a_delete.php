<?php 
require_once 'db_connect.php';

  if  ($_POST) {
    $id = $_POST['id'];
    $picture = $_POST['picture'];
    ($picture =="product.png")?: unlink("../pictures/$picture" );

    $sql = "DELETE FROM products WHERE id = {$id}";
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "Successfully Deleted!";
    } else {
        $class = "danger";
        $message = "The entry was not deleted due to: <br>" . $connect->error;
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
  <title>Delete Reuqest</title>
</head>
<body>
  <div class="container">
    <div class="mt-3 mb-3">
      <h1>Delete request response</h1>
    </div>
    <div class="alert alert-<?=$class;?>" role="alert">
      <p><?=$message;?></p >
      <a href ='../index.php'><button class= "btn btn-success" type='button'> Home</button></a>
    </div>
  </div>
  
</body>
</html>