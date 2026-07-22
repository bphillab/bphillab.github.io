<?php
$blank = isset($_GET['blank']) ? $_GET['blank'] : false;
$goto = isset($_POST['goto']) ? $_POST['goto'] : null;
$php_self = $_SERVER['PHP_SELF'];

print <<<EOF
<!DOCTYPE html>
<html>
<head>
<title>KOL URL Hacking Frameset</title>
<script language="JavaScript">
function go(){
    var URL = document.myForm.theURL.value;
    // Targeting the iframe named 'adv'
    if (window.frames['adv']) {
        window.frames['adv'].location.href = URL;
    } else {
        parent.adv.location = URL;
    }
}
</script>
</head>
<body>
EOF;

if (!$blank){

print <<<EOF
<br>
<form name="myForm" onsubmit="go(); return false;">
Goto: <input type="text" name="theURL" size="50">
<input type="button" value="Go" onClick="go()">
</form>
<br>
<iframe src="{$php_self}?blank=1" width="600" height="500" name="adv">
</iframe>
EOF;

} else {

print <<<EOF
<br>
<b>Blank result - awaiting input...</b>
<br>
<br>
waiting for url input. don't forget the http://www.kingdomofloathing.com/ part!
EOF;

} // end $blank

print <<<EOF
</body>
</html>
EOF;
?>
