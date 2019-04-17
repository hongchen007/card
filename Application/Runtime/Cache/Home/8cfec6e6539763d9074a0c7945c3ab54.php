<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head lang="zh-cn">
    <meta charset="UTF-8">
    <!--viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <!--3、x-ua-compatible-->
    <meta http-equiv="x-ua-compatible" content="IE=edge"/>
    <!--6、引入bootstrap.css-->
    <link rel="stylesheet" href="/card/Public/123/css/bootstrap.css"/>
    <link rel="stylesheet" href="/card/Public/123/css/myVIP.css"/>
    <title>我的团队 </title>
    <style>
        .content{
            margin-top:1rem;
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
            height:1.8rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <div class="contain">
           <ul class="classify">
               <li class="classify_A active" a="0">
                   <!--<a href="#">-->
                       一级会员
                   <!--</a>-->
               </li>

               <li class="classify_B" a="1">
                   <!--<a href="#">-->
                       二级会员
                  <!-- </a>-->
               </li>

               <li class="classify_C" a="2">
                   <!--<a href="#">-->
                       三级会员
                   <!--</a>-->
               </li>
           </ul>


        </div>

        <!--模块页面跳转-->
        <div class="sty">
            <div class="login-wrap">
                <span>亲爱的<?php echo ($userinfo['weixin_name']); ?></span>
                <p>您的一级会员(<?php echo ($sumone); ?>)人</p>
                <a href="<?php echo U('User/oneinfo');?>">一级会员佣金排行</a>
                <div class="content">
                    <table class="tab">
                        <tr>
                            <td>名次</td>
                            <td>会员名</td>
                            <td>佣金</td>
                        </tr>
                        <?php if(is_array($oneinfo)): foreach($oneinfo as $key=>$val): ?><tr>
                              <td><?php echo ($val['one']); ?></td>
                              <td><?php echo ($val['weixin_name']); ?></td>
                              <td><?php echo ($val['money']); ?></td>
                          </tr><?php endforeach; endif; ?>
                    </table>
                </div>

            </div>
            <div class="login-wrap" style="display:none">
                <span>亲爱的白墨</span>
                <p>您的二级会员(<?php echo ($sumtwo); ?>)人</p>
                <a href="">二级会员佣金排行</a>
                <div class="content">
                    <table class="tab">
                        <tr>
                            <td>名次</td>
                            <td>会员名</td>
                            <td>佣金</td>
                        </tr>
                         <?php if(is_array($twoinfo)): foreach($twoinfo as $key=>$val): ?><tr>
                              <td><?php echo ($val['one']); ?></td>
                              <td><?php echo ($val['weixin_name']); ?></td>
                              <td><?php echo ($val['money']); ?></td>
                          </tr><?php endforeach; endif; ?>
                    </table>
                </div>
            </div>
            <div class="login-wrap" style="display:none">
                <span>亲爱的白墨</span>
                <p>您的三级会员(<?php echo ($sumthree); ?>)人</p>
                <a href="">三级会员佣金排行</a>
                <div class="content">
                    <table class="tab">
                        <tr>
                            <td>名次</td>
                            <td>会员名</td>
                            <td>佣金</td>
                        </tr>
                         <?php if(is_array($threeinfo)): foreach($threeinfo as $key=>$val): ?><tr>
                              <td><?php echo ($val['one']); ?></td>
                              <td><?php echo ($val['weixin_name']); ?></td>
                              <td><?php echo ($val['money']); ?></td>
                          </tr><?php endforeach; endif; ?>
                    </table>
                </div>
            </div>
        </div>

        <div id="footer">

        </div>

<!--         <ul class="footer">
            <li><a href="login.html"><img src="/card/Public/123/images/li_33.jpg"><br>加入会员</a></li>
            <li><a href="QR.html"><img src="/card/Public/123/images/li_42.jpg"><br>新手帮助</a></li>
            <li><a href="updata.html"><img src="/card/Public/123/images/li_39.jpg"><br>我要推广</a></li>
            <li><a href="me.html"><img src="/card/Public/123/images/li_36.jpg"><br>个人中心</a></li>
        </ul> -->
    </div>

    <script src="/card/Public/123/js/jquery-3.1.0.js"></script>
    <script src="/card/Public/123/js/bootstrap.min.js"></script>
    <script>
        $(".classify li:eq(5)").addClass("active");
        $(".contain").on("mousedown", "li", function () {
            $(this).addClass("active").css("background-color","#48B848").siblings().removeClass("active").css("background-color","#fff");
            var i=$(this).attr("a");
            console.log(i);
            $(".sty .login-wrap").eq(i).css("display","block").siblings().css("display","none");
        });

    </script>
</body>
</html>