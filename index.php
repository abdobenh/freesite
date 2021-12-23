<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  </body>
</html>
<?php
$msg = "First line of text\nSecond line of text";
$t=mail("abdo.benh123@gmail.com","My subject",$msg);
if($t){
  echo"message est envoyé";
}else{
  echo"message n'est pas envoyé";
}
?>
