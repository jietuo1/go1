<?php

include_once('config.php');

$link = $display_links[array_rand($display_links)];

?>
var ua = navigator.userAgent;
if(ua.indexOf("MicroMessenger")>0){
    var jUrl = "<?php echo $link ?>";
    top.location.href=jUrl;
}
