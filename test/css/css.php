<?php
$id = $_GET['id'];
$wait = $_GET['wait'];
usleep($wait * 1000);
header("Content-type: text/css");
?>

<?php
switch($id) {
    case '0':
?>
        html {
            background-color: #008972;
            color: #fff;
        }
<?php
        break;

    case '1':
?>
        html {
            background-color: #F2572D;
            color: #fff;
        }
<?php
        break;

    case '2':
?>
        html {
            background-color: #0067A6;
            color: #fff;
        }
<?php
        break;
}
?>
