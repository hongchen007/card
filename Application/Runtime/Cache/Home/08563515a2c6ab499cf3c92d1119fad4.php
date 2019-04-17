<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head lang="zh-cn">
    <meta charset="UTF-8">
    <!--viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <!--3、x-ua-compatible-->
    <meta http-equiv="x-ua-compatible" content="IE=edge"/>
    <!--6、引入bootstrap.css-->
    <link rel="stylesheet" href="/card/Public/123/css/mall.css"/>
    <title>金融商城</title>
</head>
<body>
<div>

    <div class="contain" style="min-height:23rem;margin-bottom:55px;">
        <div class="detail">
        <?php if(is_array($info)): foreach($info as $key=>$val): ?><a href="<?php echo U('Card/detail',array('id' => $val['id']));?>">
                <div class="content">
                    <img src="/card/Public/Uploads/<?php echo ($val['pic']); ?>" alt="">
                    <div>
                        <p style="font-size:0.8rem;"><?php echo ($val["name"]); ?> <?php echo ($val["des"]); ?></p>
                        <span style="color: #e4393c;">会员价:￥<?php echo ($val["price"]); ?></span>
                        <p>原价:￥<?php echo ($val["price"]); ?></p>
                    </div>
                </div>
            </a><?php endforeach; endif; ?>
        </div>
    </div>

    <div id="footer" style="margin-top=55px;font-size:0.9rem;">
        Copyright @版本所有 坤坤
    </div>
    <ul class="footer">
        <li><a href=""><img src="/card/Public/123/images/li_28.jpg"><br>商城主页</a></li>
        <li><a href=""><img src="/card/Public/123/images/li_26.jpg"><br>商品分类</a></li>
        <li><a href=""><img src="/card/Public/123/images/nav_03.jpg" style="border-radius:5px"><br>我的订单</a></li>
        <li><a href="/card/index.php/Home/User/index/openid/<?php echo ($openid); ?>"><img src="/card/Public/123/images/li2_03.jpg"><br>会员中心</a></li>
    </ul>
</div>

<script src="js/jquery-3.1.0.js"></script>
<script>
    $(".page li:eq(5)").addClass("active");
    $(".contain").on("mousedown", "li", function () {
        $(this).addClass("active").css("color","#E3E3E3").siblings().removeClass("active").css("color","#000");
    });
</script>
</body>
</html>