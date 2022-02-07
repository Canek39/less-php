<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

const SERVER = "localhost";
const DB = "lesson6";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB);
define("DIR_BIG","img/");
define("DIR_SMALL","img/mini/");
@mkdir(DIR_BIG, 0777);
@mkdir(DIR_SMALL, 0777);


?>