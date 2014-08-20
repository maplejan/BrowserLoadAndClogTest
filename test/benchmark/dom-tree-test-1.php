<!DOCTYPE HTML>
<html>
<head>
    <?php include_once('../../src/BLACT.php'); ?>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>DOM Tree Test 1</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>

    <script type="text/javascript">
        BLACT.mark('head标签内资源加载开始');
    </script>

    <?php css('0', '3000'); ?>
    <?php css('1', '500'); ?>
    <?php css('2', '2000'); ?>
    <?php js('0', '1000', '100'); ?>

    <script type="text/javascript">
        BLACT.mark('head标签内资源加载结束');
    </script>

    <script type="text/javascript">
        BLACT.mark('head标签结束');
    </script>

</head>
<body>
    <script>
        BLACT.mark('body标签开始');
    </script>

    <h1>标题1</h1>
    <script>
        BLACT.mark('h1标签显示');
    </script>

    <h2>标题2</h2>
    <script>
        BLACT.mark('h2标签显示');
    </script>

    <h3>标题3</h3>
    <script>
        BLACT.mark('h3标签显示');
    </script>

    <h4>标题4</h4>
    <script>
        BLACT.mark('h4标签显示');
    </script>

    <h5>标题5</h5>
    <script>
        BLACT.mark('h5标签显示');
    </script>

    <h6>标题6</h6>
    <script>
        BLACT.mark('h6标签显示');
    </script>

    <p>段落</p>
    <script>
        BLACT.mark('p标签显示');
    </script>

    <?php js('1', '3000', '1000'); ?>

    <script>
        BLACT.mark('body标签结束');
    </script>
</body>
</html>
<script>
    BLACT.mark('html标签结束');
</script>