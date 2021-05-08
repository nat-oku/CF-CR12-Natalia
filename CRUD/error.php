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
  <title>Error</title>
</head>
<body>
    <div  class="container mt-3 mb-3"> 
    <h2 class="text-danger fw-light">Invalid Request</h2>

        <div class="alert alert-danger" role="alert">
            <p>You've made an invalid request. Please <a href="index.php" class ="alert-link">go to home</a> and try again.</p>
        </div>
    </div>
</body>
</html>

