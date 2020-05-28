<?php
header("content-type:text/html;charset=utf-8"); 
$ch=  curl_init("https://www.tpzzjl.com/test/kvm.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
curl_setopt($ch, CURLOPT_NOBODY, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_exec($ch);
$aaa = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
//echo $aaa;
//var_dump($aaa); 	


$time2 = substr($aaa , 80, 14);
//echo "<br />";
//https://cpsino.cqcp.net/station_lottery/load_buyer_qrcode.action?token=33070197_U1588949928482&placeCode=33070197&placeName=40070197&nClientID=1&nClientIP=10.50.11.55&version=51&codeType=1
$url = 'https://cpsino.cqcp.net/station_lottery/load_buyer_qrcode.action?token=33130163_'.$time2.'&placeCode=33130163&placeName=40130163&nClientID=1&nClientIP=10.50.11.55&version=51&codeType=1';
//echo $url;
Header("Location: $url"); 

?>
