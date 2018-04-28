<?php
$msg = "password";
$encrypt = "";

$len = strlen($msg);
$encrypt = ord($msg);
//echo $encrypt;

//hash function
$encrypt = ($encrypt % 20) + ord(substr($msg, $len, 1)) + 9;
$hh = dechex($encrypt);

//final hash!
echo $hh;
?>
