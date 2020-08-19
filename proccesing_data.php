<?php
function getInfo()
{
  echo '<div> Require content</div>';
};
function formGeneretion()
{
?>
<h1>TEST</h1>
<h5>First 3 inputs are imp!</h5>
<form action='<?php echo $_SERVER['PHP_SELF'] ?>' method='post'>
  <label>
    <input value='Name' type='text' name='name' maxlength='255' pattern='[A-zА-Я]{1,255}[-]?[A-zА-я]{0,255}'
      title='Only letters' />
  </label>
  <hr />
  <p>JS IS - </p>
  <input type="radio" value='1' name='s1'>framework
  <input type="radio" value='2' name='s1'>preproc
  <input type="radio" value='3' name='s1'>prog lang
  <hr>
  <p>What are not real</p>
  <input type="checkbox" name='v1'>RUE.JS
  <input type="checkbox" name='v2'>ROORSTRAP
  <input type="checkbox" name='v3'>REACT.JS
  <br />
  <input type="reset" value='Reset'>
  <input type='submit' name='start' value='SUBMIT'>
</form>
<?php
}
function processingData()
{
  $text_mess = "";
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name']) || empty($_POST['s1'])) {
      $text_mess = 'Fill all input fields';
    } else {
      $points = 0;
      if ($_POST['s1'] == '3') {
        $points += 5;
      }
      $check = 0;
      if (@$_POST['v1'] == 'on') {
        $check += 2.5;
      }
      if (@$_POST['v2'] == 'on') {
        $check += 2.5;
      }
      if (@$_POST['v3'] == 'on') {
        $check -= 5;
      }
      if ($check > 0) {
        $points += $check;
      };
      $text_mess = $_POST['name'];
      if ($points == 0) {
        $text_mess .= ', imrove your knowledge!<br/>';
      };
      if (($points < 10)) {
        $text_mess .= ', middle level';
      };
      if ($points >= 10) {
        $text_mess .= ', Senior developer';
      };
    }
  }
  return $text_mess;
}
?>