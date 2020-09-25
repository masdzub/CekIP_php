<?php 
require('function/minify.php');
require('function/getip.php');
require('function/getbrow.php');
require('function/getos.php');

$json = array(
    'ip' => "$ip[0]",
    'browser' => "$brow[0]",
    'os' => "$os[0]",
    'ua' => $_SERVER['HTTP_USER_AGENT']
);
echo json_encode($json);
?>