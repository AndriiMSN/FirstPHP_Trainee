<?php
function filter($data)
{
  $data = stripslashes(trim(htmlspecialchars($data)));
  return $data;
}

$name = $email = "";
$errName = $errMail = $message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_REQUEST['name'])) {
    $name = filter($_REQUEST['name']);
  } else {
    $errName = "Input name!";
  };
  if (!empty($_REQUEST['email'])) {
    $email = filter($_REQUEST['email']);
  } else {
    $errMail = "Input email!";
  };
  if ($errName . $errMail == "") {
    $message = "Name: " . $name . "</br>" . "Email: " . $email;
  } else {
    $message = "Input all data!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <a href="index.php">index php</a> <br>
  <h3> INPUT DANGEROUS SCRIPT - &lt;script&gt;alert("hack")&lt;/script&gt;</h3>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <br />

    <input type="text" name='name' placeholder="Name" value="<?php if ($errName . $errMail == "") {
                                                                echo "";
                                                              } else {
                                                                echo $name;
                                                              } ?>"><span><?php echo '</br>' . $errName ?></span>
    <br>

    <input type="email" name="email" placeholder="Email" value="<?php if ($errName . $errMail == "") {
                                                                  echo "";
                                                                } else {
                                                                  echo $email;
                                                                } ?>">
    <span><?php echo '</br>' . $errMail ?></span>
    <br>
    <input type="submit" value='SUBMIT'></input>
  </form>
  <?php echo '</br>' . $message; ?>
</body>

</html>