<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; 
charset=utf-8">
    <title>字符串</title>
</head>
<body>
<p>
    <?php echo "hai,你好吗！"."我是你爸爸！";
    $var="苹果";
    var_dump($var);
    print_r($GLOBALS);
    ?>
</p>
</body>
</html>




<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; 
charset=utf-8">
    <title>字符串</title>
</head>
<body>
<p>
    hai,你好吗！我是你爸爸！string(6) "苹果"
    Array
    (
    [GLOBALS] => Array
    *RECURSION*
    [_POST] => Array
    (
    )

    [_GET] => Array
    (
    )

    [_COOKIE] => Array
    (
    )

    [_FILES] => Array
    (
    )

    [var] => 苹果
    )
</p>
</body>
</html>
