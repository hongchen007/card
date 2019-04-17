<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="UTF-8">
    <!--viewport-->
    <meta charset="UTF-8" name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <!--3、x-ua-compatible-->
    <meta http-equiv="x-ua-compatible" content="IE=edge"/>
    <title>对不起，您不是VIP会员无法登陆此页面</title>
    <style>
        body,html{
            margin:0;
            padding:0;
            width:100%;
            overflow-x: hidden;
        }
        #content{
            margin-left:1.5rem;
            margin-right: 1.5rem;
        }
        #not{
            text-align:center;
            margin-top:1rem;
            margin-bottom:1rem;
        }
        h3{
            text-align:center;
        }
        span{
            display: block;
            text-align:center;
            color:#ABABAB;
            font-size: 0.88rem;
        }
        a{
            text-decoration: none;
            color:#fff;
            font-size:1.33rem;
            background-color:#EF4F4F;
            display:block;
            width:100%;
            text-align:center;
            height:3.55rem;
            line-height:3.55rem;
            border-radius:0.5rem;
        }
        a:hover{
            text-decoration: none;
            color:#fff;
        }
    </style>
</head>
<body>
<div id="content">
    <p id="not">
        <img src="/card/Public/123/images/not.png" alt="">
        <h3>对不起，你不是VIP会员</h3>
        <span id="skip"></span>
    </p>
    <a href="<?php echo U('Login/index');?>">点击直接订购VIP会员</a>
</div>
<!--5、引入jquery,bootstrap js-->
<script src="js/jquery-3.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    onload=function(){
        setInterval(go, 2000);
    };
    var x=4; //利用了全局变量来执行
    function go(){
        x--;
        if(x>0){
            document.getElementById("skip").innerHTML=x+"秒后系统自动跳转到订购页面";  //每次设置的x的值都不一样了。
        }else{
            location.href='/card/index.php/Home/Login/index';
        }
    }
</script>
</body>
</html>