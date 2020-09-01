<?php
session_start();
if (isset($_GET['color'])) {
  $_SESSION['color'] = $_GET['color'];
} else {
  $_SESSION['color'] = 'black';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  </style>
</head>

<body style="background-color:<?php echo $_SESSION['color'] ?>">
  <a href="../index.php">index php</a> <br>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <select name="color" id="">
      <option value="gray">gray</option>
      <option value="blue">blue</option>
    </select> <br> <br><br>
    <input type="submit" value="Change">
  </form>
</body>

</html>