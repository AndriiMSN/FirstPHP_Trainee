<?php
$servername = 'localhost';
$username = 'root';
$pass = 'root';
$dbname = 'product';
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "fail" . $e->getMessage();
}
require 'DBInsert.php';
echo "<br/>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
  td,
  tr,
  th {
    width: fit-content;
    padding: 15px;
    border: 1px solid green;
  }

  th {
    border: 1px solid black;
    background-color: green;
  }

  tr:nth-child(2n) {
    background-color: aqua;
  }
  </style>
</head>

<body>
  <br>
  <a href="../index.php">index php</a> <br>
  <div class="container row">
    <div class="col-md-6">
      <?php
      require 'DBDisplay.php';
      $conn = null; ?>
    </div>
    <div class="col-md-6">
      <h3>INSERT DATA</h3>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name='name' placeholder='name' pattern="[A-z]{1,20}">
        <input type="text" name="cost" placeholder="cost" pattern="[0-9]{1,7}(\.)?[0-9]{0,4}">
        <input type="text" name="quantity" placeholder="quantity" pattern="[0-9]{1,7}">
        <input type="submit" value="INSERT">
      </form>

      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <h3>Delete data</h3>
        <input type="text" autocomplete="off" name='delete' placeholder='id' pattern='[0-9]{1,8}'>
        <input type="submit" value="DELETE">
      </form>
    </div>



  </div>
</body>

</html>