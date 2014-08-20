<?php
$wait = $_GET['wait'];
usleep($wait * 1000);
header("Content-type: image/png");
readfile("img.png");
?>

