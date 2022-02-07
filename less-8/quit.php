<?php
session_start();
session_destroy(); 
$redicet = $_SERVER['HTTP_REFERER'];
@header ("Location: $redicet");
?>