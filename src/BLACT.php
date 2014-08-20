<?php
function js($id, $waitTime, $runTime) {
    echo '<script type="text/javascript" src="../js/js' . '.php?id=' . $id .
        '&wait=' . $waitTime .'&run=' . $runTime . '" onload="BLACT.mark(\'js' .
        '-' . $id . '-' . $waitTime . '-' . $runTime . ' Load Event\')"' .
        '"></script>
    ';
}

function css($id,  $waitTime) {
    echo '<link rel="stylesheet" href="../css/css' .
        '.php?id=' . $id . '&wait=' . $waitTime . '" onload="BLACT.mark(\'css' .
        '-' . $id . '-' . $waitTime .' Load Event\')"/>
    ';
}

function img($id,  $waitTime) {
    echo '<img src="../img/img.php?id=' . $id . '&wait=' . $waitTime . '" ' .
        'onload="BLACT.mark(\'img' . '-' . $id . '-' . $waitTime .' Load Event\')" />
    ';
}

?>
<script type="text/javascript">
   <?php include('../../src/BLACT.js'); ?>
</script>


