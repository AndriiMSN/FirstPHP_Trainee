<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $mentors = array(
    array('mentors_name' => 'John', 'phone' => '123456'),
    array('mentors_name' => 'Mark', 'phone' => '654321')
  );
  function get_mentors($arr_name)
  {
    echo "<table border='1' cellpadding='5'><tr><th>Mentors name</th><th>Phone</th></tr>";
    foreach ($arr_name as $mentor) {
      echo "<tr><td>$mentor[mentors_name]</td><td>$mentor[phone]</td></tr>";
    }
    echo "</table>";
  }
  if ($_GET['data'] == 'mentors') {
    get_mentors($mentors);
  }
  ?>
</body>

</html>