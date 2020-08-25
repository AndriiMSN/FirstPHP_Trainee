<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="index.php">index php</a> <br>
  <h1>Test method</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Submit">
  </form>
  <?php echo $_SERVER["REQUEST_METHOD"]; ?>
  <br><br>
  <?php echo $_SERVER["REQUEST_URI"]; ?>
</body>

</html>