<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\phpstudy\PHPTutorial\WWW\xmglg\public/../application/admin/view/public/success.tpl";i:1561339780;}*/ ?>
<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <script src="/xmglg/public/static/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/xmglg/public/static/admin/js/layer/layer.js"></script>
</head>

<body>
    <script>
    layer.msg('<?php echo $msg?>', { icon: 1, shade: 0.1 });
    </script>
    <script type="text/javascript">
    setTimeout(function() {
        location.href = '<?php echo($url);?>';
    }, 2000);
    </script>
</body>

</html>