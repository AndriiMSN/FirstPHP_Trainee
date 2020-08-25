<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="../index.php">index php</a> <br>
  <h3>Acces to our data</h3>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <label>
      <select name="data1" id="">
        <option value="books">Books</option>
        <option value="mentors">Mentors</option>
      </select>
    </label> <br> <br>
    <input type="submit" value='View' />
  </form>
  <?php
  if (isset($_GET['data1'])) {
    $data = $_GET['data1'];
    if ($data == 'books') {
      echo "<h3>Books list</h3>";
      echo file_get_contents("http://localhost/firstPHP/PR_2/books.php?data=books");
    }
    if ($data == 'mentors') {
      echo "<h3>Mentors list</h3>";
      echo file_get_contents("http://localhost/firstPHP/PR_2/mentors.php?data=mentors");
    }
  }
  ?>
</body>

</html>