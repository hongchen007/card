<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的二维码</title>
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
	<script src="/card/Public/123/js/jquery-3.1.0.js"></script>
    <style>
        body{
            text-align:center;
        }
    </style>
</head>
<body>
<div>
    <h3><center> 我的最新推广二维码</center></h3>
	<!-- <center><img src="http://qr.liantu.com/api.php?text=http://<?php echo C('const.url1');?>/card/index.php/Home/Login/index?random=<?php echo ($random); ?>"/></center> -->
	<center><img src="/card/Public/123/images/1505097531.jpg" alt="" style="width:16rem;height:16rem"> </center>

	<h3><center> 谁邀请您 </center></h3>
	<h7><center> 输入朋友的邀请码 </center></h7>
	<?php if($selfpid == yes): ?><input type="text" name='random' id='random' value="<?php echo ($userrandom); ?>"  readonly="readonly" />
		<input type="button" id="sub" value="提交" readonly="readonly" /><?php endif; ?>
	<?php if($selfpid == no): ?><input type="text" name='random' id='random' />
		<input type="hidden" name='id' id='id' value="<?php echo ($id); ?>" />
		<input type="button" id="sub1" value="提交" /><?php endif; ?>

	<h3><center> 呼唤朋友一起赚钱 </center></h3>
	您的专属邀请码为：<?php echo ($random); ?>

</div>
</body>
    <script type="text/javascript">
    $("#sub1").click(function(){
    	// alert('111');
        var random = $("#random").val();
        var id = $("#id").val();
        $.ajax({
            url: "<?php echo U('User/invite');?>",
            type:"POST",
            dataType: 'text',
            data:{
                random:random,
                id:id
            },
            dataType:"json",
            success: function(data){
                if(data == 1){
                    alert("操作成功");
                    // window.location.href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx426451259ba576c6&redirect_uri=http%3a%2f%2f<?php echo C('url1');?>%2fcard%2findex.php%2fHome%2fCard%2fhuiyuanzhongxin&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
                }else{
                   alert("操作失败");
                }
           }
        });
    })
    </script>
</html>