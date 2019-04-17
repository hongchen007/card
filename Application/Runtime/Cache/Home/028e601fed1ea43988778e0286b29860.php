<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <link href="/card/Public/123/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet">
    <link href="/card/Public/123/css/my_purse.css" rel="stylesheet">
    <script src="/card/Public/123/js/jquery-3.1.0.js"></script>
    <title>我的钱包</title>
    <style>
    *{
        margin:0;
        padding:0;
    }
    html{
        overflow: hidden;
    }
    body{
        overflow-x: hidden;
    }
        .content{
            margin-top:0.1rem;
        }
        h4{
            text-align: center;
        }
        .tab{
          border:1px solid #48B848;  
          border-collapse: collapse;
        width:100%;
        }
        .tab td{
           border:1px solid #48B848;
            /*width:8rem;*/
            height:0.5rem;
            /*font-size:1rem; */
            text-align: center;
        }
        .footer{
        font-size: 18px;
    list-style: none;
    position: fixed;
    bottom: 0;
    left: 0;
    height:45px;
    text-align: center;
    width:100%;
    background-color: #fff;
    border-top:1px solid #9E9E9E;

}
.footer li{
    float: left;
    width:24%;
        height: 45px;
    line-height: 0.5;
    border-right:1px solid #9E9E9E;
    padding-top: 4.08px;
}
.footer li:nth-child(4){
    border-right: none;
}
.footer li a {
     font-size:12px;
     text-decoration: none;
     color:#555;
 }
 .footer li a  img{
    width:21px;
    height: 21px;
        margin-bottom: -4.46px;
}
    </style>
</head>
<body>
<div class="banner">
    <img src="<?php echo ($info['weixin_headimgurl']); ?>" class="pic">
    <h3>名称:<?php echo ($info['weixin_name']); ?></h3>
    <span class="Id">会员ID:<?php echo ($info['id']); ?></span>
    <ul>
        <li><?php echo ($info['money']); ?>元<br>账户余额</li>
        <li>累计收益<br><?php echo ($info['summoney']); ?>元</li>
        <li>我的资金<br><?php echo ($info['money']); ?>元</li>
        <li>提现资金<br><?php echo ($info['txmoney']); ?>元</li>
        <li>本月收益<br><?php echo ($info['monthmoney']); ?>元</li>
        <li><a href="<?php echo U('User/tixian',array('id'=>$info['id']));?>"><img src="/card/Public/123/images/li_03.jpg"><br>提现</a></li>
    </ul>
<!--                  
                    <table class="tab" style="font-size:0.2rem;">
                    <caption>收入细明</caption> 
                        <tr>
                            <td>名次</td>
                            <td>会员名</td>
                            <td>佣金</td>
                        </tr>
                  
                           <tr>
                              <td>111</td>
                              <td>222</td>
                              <td>333</td>
                          </tr>
                     
                    </table> -->
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
    document.documentElement.style.fontSize = _width /627* 100 + "px";
    window.onresize = function () {
        var _width = document.documentElement.clientWidth || document.body.clientWidth;
        document.documentElement.style.fontSize = _width /627* 100 + "px";
    }

</script>