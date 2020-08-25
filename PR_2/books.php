<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $books = array(
    array('auth_name' => 'Jane Austen', 'book_name' => 'Pride and Prejudice', 'year_publ' => '1999', 'quantity' => 5),
    array('auth_name' => 'Ernest Hemingway', 'book_name' => 'For whom the Bells Tells', 'year_publ' => '2005', 'quantity' => 3),
    array('auth_name' => 'Goethe', 'book_name' => 'Faust', 'year_publ' => '1995', 'quantity' => 2)
  );
  function get_books($arr_name)
  {
    echo "<table border='1' cellpadding='5'><tr><th>Author name</th><th>Book name</th><th>Year of publication</th><th>Numbers of books</th></tr>";
    foreach ($arr_name as $book) {
      echo "<tr><td>$book[auth_name]</td><td>$book[book_name]</td><td>$book[year_publ]</td><td>$book[quantity]</td></tr>";
    }
    echo "</table>";
  }
  if ($_GET['data'] == 'books') {
    get_books($books);
  }
  ?>
</body>

</html>