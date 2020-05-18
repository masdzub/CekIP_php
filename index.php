<!DOCTYPE html>
<html>
<head>
	<title>Cek IP Public</title>
</head>
<body>
<div style="font-size:60px;">
<?php
    $ip = file_get_contents('https://api.ipify.org');
    echo "IP anda adalah : " . $ip; 
    echo "<br>";
    $ip6 = file_get_contents('https://api6.ipify.org');
    echo "IPv6 anda adalah: " . $ip6; 
 ?>
 </div>
 <div>
 <?php
    echo "<br>";
    echo "jika IPv4 dan IPv6 anda sama, maka IPv6 anda tidak ada atau jaringan anda belum memiliki IPv6" 
?>
</div>
</body>
</html>