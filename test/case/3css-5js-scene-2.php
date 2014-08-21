<!DOCTYPE HTML>
<html>
<head>
    <?php include_once('../../src/BLACT.php'); ?>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>3 css and 5 js</title>
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

    <?php css('0', '800'); ?>
    <?php css('1', '1800'); ?>
    <?php css('2', '2000'); ?>

    <?php js('0', '3000', '1000'); ?>
    <?php js('0', '1500', '800'); ?>
    <?php js('0', '1300', '3000'); ?>
    <?php js('0', '2800', '200'); ?>
    <?php js('0', '1900', '400'); ?>

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
<p>段落</p>
<p>段落</p>
<p>段落</p>
<p>段落</p>
<p>段落</p>
<p>段落</p>
<p>段落</p>
<p>段落</p>
<script>
    BLACT.mark('p标签显示');
</script>

<?php img('0', '1000'); ?>
<?php img('0', '1001'); ?>
<?php img('0', '1002'); ?>
<?php img('0', '1003'); ?>
<?php img('0', '1004'); ?>
<?php img('0', '1005'); ?>
<script>
    BLACT.mark('批量图片显示');
</script>

<ul>
    <li><a href="">1</a></li>
    <li><a href="">2</a></li>
    <li><a href="">3</a></li>
    <li><a href="">4</a></li>
    <li><a href="">5</a></li>
    <li><a href="">6</a></li>
    <li><a href="">7</a></li>
    <li><a href="">8</a></li>
    <li><a href="">9</a></li>
    <li><a href="">10</a></li>
    <li><a href="">11</a></li>
    <li><a href="">12</a></li>
    <li><a href="">13</a></li>
</ul>
<script>
    BLACT.mark('ul标签显示');
</script>

<script>
    BLACT.mark('body标签结束');
</script>
</body>
</html>
<script>
    BLACT.mark('html标签结束');
</script>