<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>提现</title>
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <style>
        a{
            text-decoration: none;
            text-align:left;
            display: inline-block;
            padding:1rem;
            color:#fff;
            background:#FF8080;
            height:1.5rem;
            line-height:1.5rem;
            width:8rem;
            margin-right:0.6rem;
            text-align: center;
        }
    </style>
</head>
<body>
<div>

    <a href="<?php echo U('User/zhifubao',array('id'=>$id,'openid'=>$openid));?>">提现到支付宝账户</a>
    <a href="<?php echo U('User/yinhangka',array('id'=>$id,'openid'=>$openid));?>">提现到银行卡</a>
</div>
</body>
</html>