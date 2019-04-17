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

    姓名  <input type="text" placeholder="提现人姓名" name="name" id='name'></br>
    卡号  <input type="text" placeholder="提现人储蓄卡号" name="cardnum" id='cardnum'></br>
    金额  <input type="text" placeholder="金额不能大于余额" name="money" id='money'></br>
    <input type="hidden" name="userid" id='userid' value="<?php echo ($id); ?>">
    <button id='sub'>提交</button>
</body>
    <script type="text/javascript">
    $("#sub").click(function(){
        var name = $("#name").val();
        var cardnum = $("#cardnum").val();
        var money = $("#money").val();
        var userid = $("#userid").val();
        var openid = $("#openid").val();
        $.ajax({
            url: "<?php echo U('User/doyhk');?>",
            type:"POST",
            dataType: 'text',
            data:{
                name:name,
                cardnum:cardnum,
                money:money,
                openid:openid,
                userid:userid
            },
            dataType:"json",
            success: function(data){
                if(data == 1){
                   alert("姓名不能为空");
                }else if(data == 2){
                   alert("卡号不能为空");
                }else if(data == 3){
                    alert("金额不能为空");
                }else if(data == 4){
                    alert("提现金额不能大于账户余额");
                }else if(data == 5){
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