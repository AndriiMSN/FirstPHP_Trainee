<?php

$err = 0;
if (!empty($_POST['delete'])) {
  $deleteId = $_POST['delete'];
} else {
  $err++;
}
if ($err == 0) {
  try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql_del = "DELETE FROM products WHERE id=$deleteId;";
    $conn->exec($sql_del);
    echo "DELETED";
  } catch (PDOException $e) {
    echo "Error:" . $e->getMessage();
  }
} else {
  echo "no data delete";
}