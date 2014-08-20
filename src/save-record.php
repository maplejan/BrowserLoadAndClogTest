<?php
$date = date("YmdHis");
$file = "../test/record/cache/" . $date . ".txt";
$fs = fopen($file, "a");

fwrite($fs, $_SERVER["HTTP_USER_AGENT"] . "\r\n");
fwrite($fs, $_POST["data"]);
fclose($fs);