<?php
require 'DBInsert.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <a href="../index.php">index php</a> <br>

  <h3>INSERT DATA</h3>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name='name' placeholder='name' pattern="[A-z]{1,20}">
    <input type="text" name="cost" placeholder="cost" pattern="[0-9]{1,7}(\.)?[0-9]{0,4}">
    <input type="text" name="quantity" placeholder="quantity" pattern="[0-9]{1,7}">
    <input type="submit" value="INSERT">
  </form>
  <?php require 'DBDisplay.php'; ?>
</body>

</html>