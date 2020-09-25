<?php

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    //check ip from share internet
        {
        $ipp = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    //to check ip is pass from proxy
        {
        $ipp = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ipp = $_SERVER['REMOTE_ADDR'];
    }
    return $ipp;
}
$getip  = getRealIpAddr();
$ip     = explode(",", $getip);
$prefix = implode(".", array_slice(explode(".", $ip[0]), 0, 3));

?>