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

  <title>Add Offer || Mount Everest Travel Agency</title>
</head>
<body>
  <div class="container">
    <fieldset>
      <legend class="h2">Add New Offer</legend>
      <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
        <table class="table">
          <tr>
            <th>Offer Name</th>
            <td><input class='form-control' type="text" name="locationName" placeholder="Name of the offer"></td>
          </tr>

          <tr>
            <th>Price</th>
            <td><input class='form-control' type="number" name="price" placeholder="Price" step="any"></td>
          </tr>

          <tr>
            <th>Description</th>
            <td><input class='form-control' type="text" name="descr" placeholder="Short description of the offer"></td>
          </tr>

          <tr>
            <th>Picture</th>
            <td><input class='form-control' type="file" name="picture"></td>
          </tr>

          <tr>
            <th>Longitude</th>
            <td><input class='form-control w-50' type="number" name="longitude" placeholder="i.e. -19.94885093229765" step="any"></td>
          </tr>

          <tr>
            <th>Latitude</th>
            <td><input class='form-control w-50' type="number" name="latitude" placeholder="i.e. -69.63354848956602" step="any"></td>
          </tr>

          <tr>
            <td><button class='btn btn-success' type="submit">Insert offer</button></td>
            <td><a href="index.php"><button class='btn btn-warning' type= "button">Home</button></a></td>
          </tr>
        </table>
      </form>
    </fieldset>
  </div>

  
</body>
</html>