<?php
// fuji-proxy.php
$stream_url = "http://vthanh.utako.moe/Fuji_TV/index.m3u8";
header("Content-Type: application/vnd.apple.mpegurl");
header("Access-Control-Allow-Origin: *");
readfile($stream_url);
?>
