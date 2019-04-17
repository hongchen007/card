<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <link href="/card/Public/123/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet">
    <link href="/card/Public/123/css/me.css" rel="stylesheet">
    <script src="/card/Public/123/js/jquery-3.1.0.js"></script>
    <title>个人中心</title>
</head>
<body>
<div class="banner">
    <img src="<?php echo ($userinfo['weixin_headimgurl']); ?>">
    <h3>名称:<?php echo ($userinfo["weixin_name"]); ?></h3>
    <span class="Id">会员ID:<?php echo ($userinfo['id']); ?>　关注时间：<?php echo ($userinfo["weixin_addtime"]); ?></span>
    <ul>
        <li>
            <?php if(empty($wait) == true): ?>0.00元
            <?php else: echo ($wait); ?>元<?php endif; ?>
        <br>待审核金额</li>
        <li>已提金额<br>
            <?php if(empty($tixian) == true): ?>0.00元
            <?php else: echo ($tixian); ?>元<?php endif; ?>
        </li>
        <li>我的余额<br>
            <?php if(empty($userinfo['money']) == true): ?>0.00元
            <?php else: echo ($userinfo['money']); ?>元<?php endif; ?>
        </li>
        <li><a href="<?php echo U('User/tixian',array('id'=>$userinfo['id']));?>"><img src="/card/Public/123/images/li_03.jpg"><br>提现</a></li>
    </ul>
</div>
<div class="conent">
    <ul class="clearfix">
        <li><a href="/card/index.php/Home/User/person/openid/<?php echo ($userinfo["openid"]); ?>"><img src="/card/Public/123/images/li2_03.jpg"><br>个人中心</a></li>
        <li><a href="/card/index.php/Home/User/mytream/openid/<?php echo ($userinfo["openid"]); ?>"><img src="/card/Public/123/images/li2_05.jpg"><br>我的团队</a></li>
        <li><a href="/card/index.php/Home/User/mymsg/openid/<?php echo ($userinfo["openid"]); ?>"><img src="/card/Public/123/images/li2_07.jpg"><br>我的信息</a></li>
        <li><a href="/card/index.php/Home/User/mypurse/openid/<?php echo ($userinfo["openid"]); ?>.html"><img src="/card/Public/123/images/li2_12.jpg"><br>我的钱包</a></li>
        <li><a href="/card/index.php/Home/User/mymsg/openid/<?php echo ($userinfo["openid"]); ?>"><img src="/card/Public/123/images/li2_13.jpg"><br>我要进步</a></li>
        <li><a href="/card/index.php/Home/Card/pushknow/openid"><img src="/card/Public/123/images/li2_14.jpg"><br>推广须知</a></li>
        <li><a href="/card/index.php/Home/User/hero"><img src="/card/Public/123/images/li2_18.jpg"><br>我的榜样</a></li>
        <li><a href="/card/index.php/Home/User/cooparate"><img src="/card/Public/123/images/li2_19.jpg"><br>合作共赢</a></li>
        <li><a href="/card/index.php/Home/User/resetcode/id/<?php echo ($userinfo["id"]); ?>"><img src="/card/Public/123/images/li2_20.jpg"><br>重置二维码</a></li>
    </ul>
    <div class="bot"></div>
</div>

<!-- <ul class="footer">
    <li><a href="login.html"><img src="/card/Public/123/images/li_33.jpg"><br><br>加入会员</a></li>
    <li><a href="QR.html"><img src="/card/Public/123/images/li_42.jpg"><br><br>新手帮助</a></li>
    <li><a href="updata.html"><img src="/card/Public/123/images/li_39.jpg"><br><br>我要推广</a></li>
    <li><a href="me.html"><img src="/card/Public/123/images/li_36.jpg"><br><br>个人中心</a></li>
</ul> -->
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