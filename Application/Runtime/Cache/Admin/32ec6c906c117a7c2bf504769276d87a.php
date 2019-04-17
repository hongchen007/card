<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="/card/Public/Admin/Css/login.css" />
	<script type="text/javascript" src="/card/Public/Admin/Js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/card/Public/Admin/Js/login.js"></script>

	<title></title>
</head>
<body>
	<div id="divBox">
		<form id="login">
			<input type="text" id="userName" name="userName"/>
			<input type="password" id="psd" name="psd"/>
			<input type="text" id="verify" name="verify"/><img src="/card/index.php/Admin/Login/verify" style="width:70px;height:20px;position: absolute;left:157px;top:159px;" onclick="this.src='/card/index.php/Admin/Login/verify?id='+Math.random();">
			<input type="button" id="sub" value=""/>
		</form>
		<div class="four_bj">
			
			<p class="f_lt"></p>
			<p class="f_rt"></p>
			<p class="f_lb"></p>
			<p class="f_rb"></p>
		</div>

		<ul id="peo">
			
		</ul>
		<ul id="psd">
			
		</ul>
		<ul id="ver">
			
		</ul>
	</div>

    <script type="text/javascript" src="/card/Public/Admin/Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('form','background');
    </script>
</body>

<script type="text/javascript">
    $("#sub").click(function(){

        var name=$("#userName").val();
        var pwd=$("#psd").val();
        var code=$("#verify").val();

       $.ajax({
           url: "<?php echo U('Login/dologin');?>",
           type:"POST",
           dataType: 'text',
           data:{
               name:name,
               pwd:pwd,
               code:code
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
                    window.location.href="/card/index.php/Admin/Index/index";
                }
           }
        });
        
    })
</script>

</html>