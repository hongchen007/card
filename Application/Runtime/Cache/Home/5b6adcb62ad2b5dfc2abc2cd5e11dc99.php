<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head lang="zh-cn">
    <meta charset="UTF-8">
    <!--viewport-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <!--3、x-ua-compatible-->
    <meta http-equiv="x-ua-compatible" content="IE=edge"/>
    <!--6、引入bootstrap.css-->
    <link rel="stylesheet" href="/card/Public/123/css/newindex.css"/>
    <title>订购商品</title>
    <style>
        ul,li{
    list-style: none;
}
a{
    text-decoration: none;
    color:#C2C2C2;
}
body,html{
    background-color: #F7F7F7;
    width:100%;
    height:100%;
    overflow-x: hidden;
}
*{
    margin:0;
    padding:0;
}
/*******banner******/
#banner img{
    width:100% ;
    height:100%;
}
#main,#banner,body{
    background-color: #FFF4A5;
}
h4{
    padding-bottom:0.88rem;
    padding-left:1.55rem;
}
#main_top .main_top_text{
    font-size: 0.88rem;
    color: #ED752B;
    line-height: 2rem;
}
.vip{
    height:2.66rem;
    line-height:2.66rem;
    width:12rem;
    margin-left: 0.5rem;
    margin-bottom: 0.04rem;
}
.vip li{
    font-size: 0.88rem;
    display: block;
    float:left;

    text-align: center;
    outline: none;
}
#vip1{
    background-color: #EB6D21;
    border-radius:1.5rem 0 0 1.5rem ;
    width:5.60rem;
    height:100%;
    color:#fff;
}
#vip2{
    background-color: #fff;
    border-radius: 0  1.5rem 1.5rem 0  ;
    width:5.60rem;
    height:100%;
    color:#EB6D20
}


.form{
    width:100%;
    text-align: center;
    margin: 0 3% 0.42rem;
}
.form input{
    outline: none;
    display: inherit;
    height:2.5rem;
    width:85%;
    margin-top: 0.6rem ;
    border: 1px solid #EB6D20;
    border-radius: 1.8rem;
    padding-left: 3%;
    font-size: 0.88rem;
}
#main_box{
    width:100%;
    /*height: 1.93rem;*/
    /*line-height: 1.93rem;*/
}

.footer .money{
    font-size: 1.3rem;
    color:#E96E20;
    padding-left: 1.23rem;
}
.footer .money span{
    font-weight: bolder;
}
.footer .buy{
    font-size: 1.3rem;
    color:#fff;
    width:30%;
    background-color: #EB6D21;
    text-decoration: none;
    text-align: center;
}
.footer{
    height:3rem;
    line-height:3rem;
    display:flex;
    justify-content: space-between;
    background-color:#fff;
    position:fixed;
    bottom:0;
    width:100%;
}
#main_top,.vip,.form{
    padding-left:0.5rem;
}
    </style>
</head>
<body>
<div class="contain">
    <div id="banner">
        <img src="/card/Public/123/images/li.jpg">
    </div>
    <div id="main">
        <div id="main_top">
            <span class="main_top_text">
                <img src="/card/Public/123/images/arrow_03.jpg">
                我的上级:晓数点钱宝会员
            </span>
        </div>
        <div id="main_mid">
            <h4>请选择会员权限</h4>
            <div class="vip-box">
              <ul class="vip">
                  <li  id="vip1" class="active" a="0">金卡会员</li>
                  <li  id="vip2" a="1">银卡会员</li>
              </ul>
            </div>
            <div id="main_box">

                <!-- <form action="<?php echo U(Card/zhifu);?>"> -->
                  <div class="wrap">
                    <div class="form">
                        <input type="text"  placeholder="收货姓名" name='name' id="name">
                        <input type="text"  placeholder="微信号码" name='wxname' id="wxname">
                        <input type="text"  placeholder="手机号码" name='tel' id="tel">
                        <input type="text"  placeholder="收货地址" name='addresss' id="address">
                        <input type="hidden" id="id" name="id" value="1">
                    </div>
                    <div class="footer">
                        <p class="money">价格:<span class="price">￥388</span></p>
                        <a href="<?php echo U('Card/zhifu',array('id'=>1));?>" class="buy">立即购买</a>
                    </div>
                  </div>
        <!--         </form>

                <form action="<?php echo U(Card/zhifu);?>"> -->
                  <div class="wrap" style="display:none">
                    <div class="form">
                        <input type="text"  placeholder="收货姓名" name='name' id="name">
                        <input type="text"  placeholder="微信号码" name='wxname' id="wxname">
                        <input type="text"  placeholder="手机号码" name='tel' id="tel">
                        <input type="text"  placeholder="收货地址" name='addresss' id="address">
                        <input type="hidden" id="id" name="id" value="2">
                    </div>
                    <div class="footer">
                        <p class="money">价格:<span class="price">￥88</span></p>
                        <a href="<?php echo U('Card/zhifu',array('id'=>2));?>" class="buy">立即购买</a>
                    </div>
                  </div>
                <!-- </form> -->

            </div>
        </div>
    </div>
</div>
<script src="/card/Public/123/js/jquery-1.8.3.min.js"></script>
<!-- 
<script type="text/javascript">
    $(".buy").click(function(){
        var id=$("#id").val();
       $.ajax({
           url: "<?php echo U(Card/zhifu);?>",
           type:"GET",
           dataType: 'text',
           data:{
               id:id
           },
           dataType:"json",
           success: function(data){
                if(data == 1){
                   alert("验证码不正确");
                }else if(data == 2){
                   alert("用户名不存在");
                }else if(data == 3){
                    alert("密码不正确");
                }else if(data == 4){
                    alert("你的权限不够，请联系管理员"); 
                }else{
                    window.location.href="/card/index.php/Home/Index/index";
                }
           }
        });       
    })
</script>
 -->
<script>
    $(function(){
        $("#vip1").click(function(){
            $(this).css({"background":"#EB6D20","color":"#fff"}).siblings().css({"background":"#fff","color":"#EB6D20"});
            var v=$(this).index()+1;
            console.log(v);
            $('#grade').val(v);
        });
        $("#vip2").click(function(){
            $(this).css({"background":"#EB6D20","color":"#fff"}).siblings().css({"background":"#fff","color":"#EB6D20"});
            var v=$(this).index()+1;
            console.log(v);
            $('#haha').val(v);
        });
        $(".vip").addClass("active");
        $(".vip").on("click", "li", function () {
            $(this).addClass("active").siblings().removeClass("active");
            var i=$(this).attr("a");
            $("#main_box .wrap").eq(i).css("display","block").siblings().css("display","none");
        });
    })
</script>
</body>
</html>