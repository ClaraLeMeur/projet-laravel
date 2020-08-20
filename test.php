<?php
if ($sock = @fsockopen('www.google.fr', 80, $num, $error, 5))
   echo 'OK';
else
   echo 'Hors Ligne';

$ip='8.8.8.8';

$ping = exec("ping -n 1 $ip");
echo $ping;
?>