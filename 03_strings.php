<?php
$str ="This is string ";
echo $str. "<br>";
$lenn = strlen($str);
echo "the length of this string is <br>".$lenn."thank you<br>";
echo "the number of word in string is :" .strrev($str) . "<br>Thank You <br>";
echo "the  Serched word in string is :" .strpos($str, "is") . "<br>Thank You <br>";
echo "the  Replaced string is :" .str_replace("is","at",$str) . "<br>Thank You <br>";
echo $lenn;

?>