<?php
/**
 * getOS method
 *
 * @param void
 * @return string
 */
function getOS()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    
    $osPlatform = "Unknown OS Platform";
    
    $osArray = array(
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/windows nt 6.0/i' => 'Windows Vista',
        '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
        '/windows nt 5.1/i' => 'Windows XP',
        '/windows xp/i' => 'Windows XP',
        '/windows nt 5.0/i' => 'Windows 2000',
        '/windows me/i' => 'Windows ME',
        '/win98/i' => 'Windows 98',
        '/win95/i' => 'Windows 95',
        '/win16/i' => 'Windows 3.11',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/mac_powerpc/i' => 'Mac OS 9',
        '/linux/i' => 'Linux',
        '/ubuntu/i' => 'Ubuntu',
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );
    
    foreach ($osArray as $regex => $value) {
        
        if (preg_match($regex, $userAgent)) {
            $osPlatform = $value;
        }
        
    }
    
    return $osPlatform;
    
}

$getOS  = getOS();
$os     = explode(",", $getOS);
$prefix = implode(".", array_slice(explode(".", $os[0]), 0, 3));