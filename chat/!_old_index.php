<?
$lyt_color = '222';
$lyt_cookie = 'usrtilos';

$ccont = explode("/", $_COOKIE[$lyt_cookie]);
if ($ccont[1] != "") $lyt_color = $ccont[1];
$lyt_color = '#' . $lyt_color;

print <<<EOD99
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>tilos.hu - Chat</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="hu-hu" />
<link rel="stylesheet" type="text/css" href="msq_chat_index.css" title="Normál" />
<style rel="stylesheet" type="text/css" title="Normál">
body {
background-color:{$lyt_color};
}
</style>
<script type="text/javascript" src="msq_chat.js"></script>
<script type="text/javascript">
<!--
window.onload = function () {
msqgetbanner();
}
//-->
</script>
</head>
<body>
<a href="http://tilos.hu" target="_blank" style="float:left;" title="Tilos Rádió - KEZDŐLAP"><img src="tilos_chat_logo.png" alt="tilos chat logo" /></a><span id="OnAirBanner"></span><h1>TILOS RÁDIÓ - Chat</h1>
<p><a href="http://hirek.tilos.hu/?p=49" target="_blank">::&nbsp;Nyílt&nbsp;levél&nbsp;a&nbsp;chat&nbsp;használóihoz&nbsp;::</a> <a style="cursor:pointer;" onclick="msqshowwebcam()">::&nbsp;Tilos&nbsp;WebCAM&nbsp;-&nbsp;Live!&nbsp;::</a><br /><a href="http://tilos.hu/chat2/" target="_top">::&nbsp;Java&nbsp;kliens&nbsp;-&nbsp;a&nbsp;régi&nbsp;chat&nbsp;szmájliaival,&nbsp;színesben&nbsp;is&nbsp;::</a><br /><a href="http://stream.tilos.hu/tilos.m3u" target="_blank">::&nbsp;Hallgasd:&nbsp;256k&nbsp;mp3&nbsp;::</a> <a href="http://stream.tilos.hu/tilos_128.mp3.m3u" target="_blank">::&nbsp;128k&nbsp;mp3&nbsp;::</a> <a href="http://stream.tilos.hu/tilos_high.ogg.m3u" target="_blank">::&nbsp;96k&nbsp;ogg&nbsp;::</a> <a href="http://stream.tilos.hu/tilos_low.ogg.m3u" target="_blank">::&nbsp;24k&nbsp;ogg&nbsp;::</a></p>
<p><input type="button" onclick="msg(0)" value="? -> !" /> <input type="button" onclick="msg(1)" value="Névcsere" /> <input type="button" onclick="msg(2)" value="Név regisztrálása" /> <input type="button" onclick="msg(3)" value="Csoport használata" /> <input type="button" onclick="msg(4)" value="Privát üzenet" /> <input type="button" onclick="msg(5)" value="Nyelv váltás" /> <input type="button" onclick="msg(6)" value="IRC kliens" /> <input type="button" onclick="msg(7)" value="TrollKontroll" /></p>
<iframe src="http://chat.tilos.hu:8080/?nick=Hallgato_...&channels=tilos&prompt=1&uio=Mj10cnVlJjQ9dHJ1ZSY5PXRydWUmMTA9dHJ1ZSYxMT0xMDMe5" name="chat" id="chat" width="100%" height="500" scrolling="no" frameborder="0"></iframe>
<p><i>&copy; 1991-2012. tilos.hu CHAT - Tilos Kulturális Alapítvány - Minden jog fenntartva! - IP címed:&nbsp;{$_SERVER['REMOTE_ADDR']}</i></p>
</body>
</html>
EOD99;
?>