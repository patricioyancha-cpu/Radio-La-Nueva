<?php
include("../res/x5engine.php");
$nameList = array("p34","mtk","wlc","ut7","juj","sjn","4vj","3rz","zmh","f5x");
$charList = array("M","H","S","6","J","4","U","L","5","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
