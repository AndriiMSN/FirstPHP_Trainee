<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="index.php">index php</a> <br>
  <?php

  # GLOBAL, STATIC ...

  echo "<br/>";
  $x = 7;
  function power()
  {
    global $x;
    return $x * $x;
  }
  echo $x . ' - global';
  echo "<br/>";
  echo power();
  echo "<br/>";
  echo "<br/>";
  function power1()
  {
    static $y = 0;
    $y += 3;
    return $y ** 2;
  }
  for ($i = 1; $i < 7; $i++) {
    echo "<br/> $i - : " . power1();
  };


  # STRING

  $text = 'first func';
  function infoLength($textLen)
  {
    echo 'length = ' . mb_strlen($textLen) . ' symbols';
  }
  INFoLength($text);
  echo "<br/>";
  echo "<br/>";
  function infoLengthReturn($textLen)
  {
    return 'return length = ' . mb_strlen($textLen) . ' symbols';
  }
  echo infoLengthReturn($text);
  echo "<br/>";
  echo "<br/>";


  # CONCAT STRINGS

  $name = "Andrii";
  $age = 22;
  echo "My name is - ..$name";
  echo "<br/>";
  echo "$age years";

  $adress = "pokrovsk";
  $nr = " kv 000";
  $rez = $adress . $nr;
  echo "<br/>" . $rez;
  $name = "Anna";
  $phone = "066677788";
  echo $name . ":" . $phone . "<br/>";
  $x = 25;
  $z = 25;
  echo "<br/>" . "..." . $x . "...." . "<br/>";


  # ? :

  if ($x >= $z) {
    echo "$x " . ">= " . "$z";
  } else {
    echo "$x " . "< " . "$z";
  }
  echo ($x == $z) ? " Равно" : " Не равно";
  echo "<br/>";

  #TIMEZONE

  echo ini_get('date.timezone');
  echo "<br/>";
  echo date("l F jS, Y - g:ia", time());
  echo "<br/>";

  # STRING FUNC

  echo strlen('string');
  echo "<br/>";
  echo mb_strlen('string');
  echo "<br/>";
  echo mb_strpos('new string', 'string');
  echo "<br/>";
  echo str_replace('new', 'old', 'new string');
  echo "<br/>";

  # NUMBERS 

  echo (is_numeric("55")) ? 'num' : 'NaN';
  echo "<br/>";
  echo rand(5, 77);
  echo "<br/>";
  echo round(1.255445, 2);
  echo "<br/>";

  # EMPTY ISSET 
  $emp;
  $emp2 = '';
  echo (isset($emp) ? "+" : '-');
  echo "<br/>";
  echo (empty($emp) ? "+" : '-');
  echo "<br/>";

  # FOR WHILE

  for ($i = 1; $i <= 7; $i++) {

    echo   '<li>' . (8 - $i) . '  ' . $i . '</li>';
  };
  echo "<br/>";
  $summ = 0;
  $point = 8;
  $counter = 0;
  while ($summ < 100) {
    $summ += $point;
    $counter++;
  }
  echo $summ . ' ' . $counter;
  echo "<br/>";
  do {
    $summ += $point;
    $counter++;
  } while ($summ < 8);
  echo $summ . ' ' . $counter;
  echo "<br/>";

  # ARRAY

  $array_names = array('html', 'css', 'js', 'php');
  for ($i = 0; $i < count($array_names); $i++) {
    echo "at pos $i --- $array_names[$i]";
    echo "<br/>";
  }
  echo "<br/>";
  foreach ($array_names as $value) {
    echo $value;
    echo "<br/>";
  }
  echo "<br/>";
  $array_names2 = array('A' => 1, 'B' => 2, 'C' => 3);
  echo $array_names2['B'];
  echo "<br/>";
  echo "<br/>";
  foreach ($array_names2 as $key => $value) {
    echo "Key - $key has value - $value";
    echo "<br/>";
  }

  echo "<br/>";
  echo "<br/>";
  $dataUsers = array(
    array("First", "apple", 6),
    array("Second", "juice", 12),
    array("Third", "banana", 4)
  );
  echo $dataUsers[1][1];


  ?>
</body>

</html>