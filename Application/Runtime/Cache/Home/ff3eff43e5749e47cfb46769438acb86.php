<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关于我们</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <link href="font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet">
    
    <link href="/card/Public/123/css/QR.css" rel="stylesheet">
    <script src="/card/Public/123/js/jquery-3.1.0.js"></script>
    <style>
        body,html{
            padding:0;
            margin:0;
        }
        .about{
            padding:0.2rem 0.1rem;
            /*background-color: #FEEF8A;*/
            height:100%;
        }
        h3{
            font-size:0.5rem;
        }
        html {
            height: 100%;
            width:100%;
            /*font-size:0.3rem;*/
        }
        a{
            text-decoration: none;
        }
        p{
            font-size:0.4rem;
        }
        p>span{
            color:#5BE3CC;
        }
    </style>
</head>
<body>
<div class="about">
   <h3>联系我们</h3>
    <p>
        客服微信：<br>
        <?php if(is_array($info)): foreach($info as $key=>$val): ?><span style="margin-left:17%"><?php echo ($val["weixin"]); ?></span><br><?php endforeach; endif; ?>
        钱宝商城：<a href="/card/index.php/Home/Card/shangchengaa/openid/<?php echo ($openid); ?>">点击这里</a>
    </p>
</div>
<ul class="footer">
    <li><a href="http://<?php echo C('url1');?>/card/index.php/Home/Login/index"><img src="/card/Public/123/images/li_33.jpg"><br><br>加入会员</a></li>
    <li><a href="http://<?php echo C('url1');?>/card/index.php/Home/Card/newknow"><img src="/card/Public/123/images/li_42.jpg"><br><br>新手帮助</a></li>
    <li><a href="http://<?php echo C('url1');?>/card/index.php/Home/Card/pushknow"><img src="/card/Public/123/images/li_39.jpg"><br><br>我要推广</a></li>
    <li><a href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=<?php echo C('const.appid');?>&redirect_uri=http%3a%2f%2f<?php echo C('url1');?>%2fcard%2findex.php%2fHome%2fCard%2fhuiyuanzhongxin&response_type=code&scope=snsapi_base&state=123#wechat_redirect"><img src="/card/Public/123/images/li_36.jpg"><br><br>个人中心</a></li>
</ul>

</body>
</html>
<script>
        var _width = document.documentElement.clientWidth || document.body.clientWidth;
            document.documentElement.style.fontSize = _width /640 * 100 + "px";
        window.onresize = function () {
            var _width = document.documentElement.clientWidth || document.body.clientWidth;
            document.documentElement.style.fontSize = _width /640 * 100 + "px";
        };
    
        var _detail_list=document.getElementById("detai_list");
        var _p=_detail_list.getElementsByTagName("p");
        var _ul=_detail_list.getElementsByTagName("ul");
        
    
        for(var i=0;i<_p.length;i++){
            _p[i].index=i;
            _p[i].off=true;
            _p[i].onclick=function(){
            var _index=this.index;
            
                if(this.off){
                    
                    $(_ul[_index]).slideDown();

                }else { 
                    $(_ul[_index]).css("display","none")
                
                }
                this.off=!this.off;

            }
        }   
</script>






<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关于我们</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <link href="__PUBLIC/123/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet">


    <style>
        body,html{
            padding:0;
            margin:0;
        }
        .code{
            padding:0.2rem 1.0rem;
            background-color: #FEEF8A;
            height:100%;
        }
        html {
            height: 100%;
            width:100%;
        }
        body {
            width:100%;
            height: 100%;
        }
        p>span{
            color:#5BE3CC;
        }
    </style>

</head>
<body>
<div class="code">
   <h3>联系我们</h3>
    <p>
        客服微信：<br>
        <?php if(is_array($info)): foreach($info as $key=>$val): ?><span style="margin-left:17%"><?php echo ($val["weixin"]); ?></span><br><?php endforeach; endif; ?>
        钱宝商城：<a href="/card/index.php/Home/Card/shangchengaa/openid/<?php echo ($openid); ?>">点击这里</a>
    </p>
</div>

</body>
</html>
 -->