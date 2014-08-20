<?php
$id = $_GET['id'];
$wait = $_GET['wait'];
$run = $_GET['run'];
usleep($wait * 1000);
header("Content-type: application/x-javascript");
?>

(function (window, document) {
    BLACT.mark('js-<?php echo $id ?>-<?php echo $wait ?>-<?php echo $run ?> Run Start');

    var run = parseInt(<?php echo $run ?>);
    var date = 1 * new Date();
    while(1 * new Date() -  date < run) { }

    BLACT.mark('js-<?php echo $id ?>-<?php echo $wait ?>-<?php echo $run ?> Run End');

})(window, document);

