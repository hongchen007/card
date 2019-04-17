<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>提现到支付宝</title>
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <script src="/card/Public/123/js/jquery-3.1.0.js"></script>
    <style>
        body{
            text-align:center;
            font-size:1.2rem;
            margin-top:1rem;
        }
        input{
            font-size:1.1rem;
            margin-bottom:0.5rem;
            width:14rem;
        }
        #sub{
            font-size:1.2rem;
            border:0;
            background:#ddd;
            padding:0.3rem 1rem;
        }
    </style>
</head>
<body>
    账户  <input type="text" placeholder="支付宝账户/手机号" name="zfb" id='zfb'> </br>
    金额  <input type="text" placeholder="金额不能大于余额" name="money" id='money'></br>
    <input type="hidden" name="userid" id='userid' value="<?php echo ($id); ?>">
    <input type="hidden" name="openid" id='openid' value="<?php echo ($openid); ?>">

    <button id='sub'>提交</button>
</body>
    <script type="text/javascript">
    $("#sub").click(function(){
        var zfb = $("#zfb").val();
        var money = $("#money").val();
        var userid = $("#userid").val();
        var openid = $("#openid").val();
        $.ajax({
            url: "<?php echo U('User/dozfb');?>",
            type:"POST",
            dataType: 'text',
            data:{
                zfb:zfb,
                money:money,
                openid:openid,
                userid:userid
            },
            dataType:"json",
            success: function(data){
                if(data == 1){
                   alert("账户不能为空");
                }else if(data == 2){
                   alert("金额不能为空");
                }else if(data == 3){
                    alert("提现金额不能大于账户余额");
                }else if(data == 4){
                    alert("申请提现成功！");
                    window.location.href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx426451259ba576c6&redirect_uri=http%3a%2f%2f<?php echo C('url1');?>%2fcard%2findex.php%2fHome%2fCard%2fhuiyuanzhongxin&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
                }else{
                    alert("申请提现失败！");
                }
           }
        });
    })
    </script>
</html>