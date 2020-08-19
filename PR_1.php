<?php
require 'proccessing_data1.php';
$mess = processingData();
?>
<!Doctype HTML>
<html>

<head>
  <title>Feedback</title>
  <meta charset="UTF-8" />
</head>

<body>
  <a href="index.php">index php</a> <br>
  <div class="container">
    <?php
    formGeneration($mess);
    echo "<hr/>";
    showData($mess);
    ?>
  </div>
</body>

</html>