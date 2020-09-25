<?php 
require('function/minify.php');
require('function/getip.php');
require('function/getbrow.php');
require('function/getos.php');

echo "IP : $ip[0]";
echo "<br>";
echo "Browser : $brow[0]";
echo "<br>";
echo "Operation System : $os[0]";
?>