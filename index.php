<!DOCTYPE html>
<html>
<head>
	<title>Cek IP Public</title>
</head>
<body>
<div style="font-size:60px;">
<?php
    $ip4 = file_get_contents('https://api.ipify.org');
    echo "IPv4 anda adalah : " . $ip4; 
    echo "<br><br>";
    $ip6 = file_get_contents('https://api6.ipify.org');
    echo "IPv6 anda adalah: " . $ip6; 
 ?>
 </div>
 <div style="font-size: 30px;">
 <?php
    echo "<br>";
    echo "Note : Jika IPv4 dan IPv6 anda sama, maka IPv6 anda tidak ada atau jaringan anda belum memiliki IPv6" 
?>
</div>
</body>
</html>