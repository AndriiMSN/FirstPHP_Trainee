<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="index.php">index php</a> <br>
  <h1>Server data</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name='name' placeholder="Name" />
    <br />
    <input type="email" name="email" placeholder="Email"><br />
    <input type="submit" value='SUBMIT'></input>
  </form>
  <br>
  <?php
  $name = "Anonym";
  $email = "Not email";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name'])) {
      $name = $_POST['name'];
    }
    if (!empty($_POST['email'])) {
      $email = $_POST['email'];
    }
    echo "Name: $name Email: $email";
  };
  ?>
</body>

</html>