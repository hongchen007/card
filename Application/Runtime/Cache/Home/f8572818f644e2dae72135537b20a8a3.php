<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <link href="/card/Public/123/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet">
    <link href="/card/Public/123/css/person.css" rel="stylesheet">
    <script src="/card/Public/123/js/jquery-3.1.0.js"></script>
    <title>个人中心</title>
    <style>
        html{
    overflow:hidden; 
    }
    body{
        overflow-x: hidden;
    }
    </style>
</head>
<body>
<div class="banner">
    <img src="/card/Public/123/images/li.jpg" style="height:3.2rem;width:100% ;">
    <img src="<?php echo ($selfinfo['weixin_headimgurl']); ?>" class="pic">
    <h3>名称:<?php echo ($selfinfo['weixin_name']); ?></h3>
    <span class="mid_top_text"><img src="/card/Public/123/images/arrow_03.jpg"> 推荐人姓名:
        <?php if(empty($tuijian_name['weixin_name']) == true): ?>无
        <?php else: echo ($tuijian_name['weixin_name']); endif; ?>  
    </span>
    <span class="Id">会员ID:<?php echo ($selfinfo['id']); ?></span>
    <span>关注时间：<?php echo ($selfinfo['weixin_addtime']); ?></span>
    <p style="color:green;font-size:18px;">
        <?php if($userinfo["grade"] == 1): ?>[绿钻会员]<?php endif; ?>
        <?php if($userinfo["grade"] == 2): ?>[白银会员]<?php endif; ?>
    </p>
    <ul>
        <li>
            <?php if(empty($selfinfo['money']) == true): ?>0.00元
            <?php else: echo ($selfinfo['money']); ?>元<?php endif; ?>  
        <br>账户余额</li>
        <li>累计收益<br>
            <?php if(empty($money) == true): ?>0.00元
            <?php else: echo ($money); ?>元<?php endif; ?>        
        </li>
        <li>我的资金<br>
            <?php if(empty($selfinfo['money']) == true): ?>0.00元
            <?php else: echo ($selfinfo['money']); ?>元<?php endif; ?> 
        </li>
        <!--<li><a href="javascript:;"><img src="/card/Public/123/images/li_03.jpg"><br>提现</a></li>-->
    </ul>
</div>
</body>
</html>

<script>
    var _width = document.documentElement.clientWidth || document.body.clientWidth;
    document.documentElement.style.fontSize = _width /627* 100 + "px";
    window.onresize = function () {
        var _width = document.documentElement.clientWidth || document.body.clientWidth;
        document.documentElement.style.fontSize = _width /627* 100 + "px";
    }

</script>