<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="index.php">index php</a> <br>
  <?php
  require 'proccesing_data.php';
  $mess = processingData();
  getInfo();
  ?>
  <div>
    <?php
    echo '<span> ' . $mess . '</span>';
    formGeneretion()
    ?>
  </div>

</body>

</html>