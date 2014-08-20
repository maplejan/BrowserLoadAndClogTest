<!DOCTYPE HTML>
<html>
<head>
    <?php include_once('../../src/BLACT.php'); ?>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Parallel Load Test 3</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>

    <script type="text/javascript">
        BLACT.mark('大量css+js文件资源混合加载开始');
    </script>

    <?php css('0', '2000'); ?>
    <?php js('0', '2000', '0'); ?>
    <?php css('0', '2001'); ?>
    <?php js('0', '2001', '0'); ?>
    <?php css('0', '2002'); ?>
    <?php js('0', '2002', '0'); ?>
    <?php css('0', '2003'); ?>
    <?php js('0', '2003', '0'); ?>
    <?php css('0', '2004'); ?>
    <?php js('0', '2004', '0'); ?>

    <script type="text/javascript">
        BLACT.mark('大量css+js文件资源混合加载第1批完成');
    </script>

    <?php css('1', '2000'); ?>
    <?php js('1', '2000', '0'); ?>
    <?php css('1', '2001'); ?>
    <?php js('1', '2001', '0'); ?>
    <?php css('1', '2002'); ?>
    <?php js('1', '2002', '0'); ?>
    <?php css('1', '2003'); ?>
    <?php js('1', '2003', '0'); ?>
    <?php css('1', '2004'); ?>
    <?php js('1', '2004', '0'); ?>

    <script type="text/javascript">
        BLACT.mark('大量css+js文件资源混合加载第2批完成');
    </script>

    <?php css('2', '2000'); ?>
    <?php css('2', '2001'); ?>
    <?php css('2', '2002'); ?>
    <?php css('2', '2003'); ?>
    <?php css('2', '2004'); ?>
    <?php js('2', '2000', '0'); ?>
    <?php js('2', '2001', '0'); ?>
    <?php js('2', '2002', '0'); ?>
    <?php js('2', '2003', '0'); ?>
    <?php js('2', '2004', '0'); ?>

    <script type="text/javascript">
        BLACT.mark('大量css+js文件资源混合加载第3批完成');
    </script>

    <script type="text/javascript">
        BLACT.mark('大量css+js文件资源混合加载结束');
    </script>

    <script type="text/javascript">
        BLACT.mark('head标签结束');
    </script>

</head>
<body>
    <script type="text/javascript">
        BLACT.mark('body标签开始');
    </script>

    <?php css('3', '2000'); ?>
    <?php js('3', '2000', '0'); ?>
    <?php css('3', '2001'); ?>
    <?php js('3', '2001', '0'); ?>
    <?php css('3', '2002'); ?>
    <?php js('3', '2002', '0'); ?>
    <?php css('3', '2003'); ?>
    <?php js('3', '2003', '0'); ?>
    <?php css('3', '2004'); ?>
    <?php js('3', '2004', '0'); ?>

    <script type="text/javascript">
        BLACT.mark('body标签结束');
    </script>
</body>
</html>