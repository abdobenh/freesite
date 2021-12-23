<?php
$msg = "First line of text\nSecond line of text";
$msg = wordwrap($msg,70);
mail("abdo.benh123@gmail.com","My subject",$msg);
?>
