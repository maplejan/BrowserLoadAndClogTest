<!DOCTYPE HTML>
<html>
<head>
    <?php include_once('../../src/BLACT.php'); ?>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Parallel Load Test 1</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>

    <script type="text/javascript">
        BLACT.mark('大量css文件资源加载开始');
    </script>

    <?php css('0', '2000'); ?>
    <?php css('0', '2001'); ?>
    <?php css('0', '2002'); ?>
    <?php css('0', '2003'); ?>
    <?php css('0', '2004'); ?>
    <?php css('0', '2005'); ?>
    <?php css('0', '2006'); ?>

    <?php css('1', '2000'); ?>
    <?php css('1', '2001'); ?>
    <?php css('1', '2002'); ?>
    <?php css('1', '2003'); ?>
    <?php css('1', '2004'); ?>
    <?php css('1', '2005'); ?>
    <?php css('1', '2006'); ?>

    <?php css('2', '2000'); ?>
    <?php css('2', '2001'); ?>
    <?php css('2', '2002'); ?>
    <?php css('2', '2003'); ?>
    <?php css('2', '2004'); ?>
    <?php css('2', '2005'); ?>
    <?php css('2', '2006'); ?>

    <script type="text/javascript">
        BLACT.mark('大量css文件资源加载完成');
    </script>

    <script type="text/javascript">
        BLACT.mark('head标签结束');
    </script>

</head>
<body>
    <script>
        BLACT.mark('body标签开始');
    </script>

    <?php css('3', '2000'); ?>
    <?php css('3', '2001'); ?>
    <?php css('3', '2002'); ?>
    <?php css('3', '2003'); ?>
    <?php css('3', '2004'); ?>
    <?php css('3', '2005'); ?>
    <?php css('3', '2006'); ?>

    <script>
        BLACT.mark('body标签结束');
    </script>
</body>
</html>