<?php
echo "<h3>Content</h3>";
echo "<table><tr><th>ID</th><th>Name</th><th>Cost</th><th>Quantity</th></tr>";
class TableRows extends RecursiveIteratorIterator
{
  function __construct($it)
  {
    parent::__construct($it, self::LEAVES_ONLY);
  }
  function current()
  {
    return "<td>" . parent::current() . "</td>";
  }
  function beginChildren()
  {
    echo "<tr>";
  }
  function endChildren()
  {
    echo "</tr>" . "\n";
  }
}


try {
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $select = $conn->prepare("SELECT * FROM products");
  $select->execute();
  $result = $select->setFetchMode(PDO::FETCH_ASSOC);
  foreach (new TableRows(new RecursiveArrayIterator($select->fetchAll())) as $key => $value) {
    echo $value;
  }
} catch (PDOException $e) {
  echo "Error:" . $e->getMessage();
}
echo "</table>";