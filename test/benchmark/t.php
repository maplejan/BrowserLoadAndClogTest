<?php
$date = date('YmdHis');
$file = 'record/cache/' . $date . '.json';
$fs = fopen($file, 'a');

fwrite($fs, $_SERVER['HTTP_USER_AGENT'] . '\n');
fwrite($fs, $_POST['data'] . '\n');
fclose($fs);