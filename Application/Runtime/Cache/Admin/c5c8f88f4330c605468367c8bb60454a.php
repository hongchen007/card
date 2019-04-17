<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	
   <title>后台-修改用户信息</title>
  
	<link rel="stylesheet" href="/card/Public/Admin/Css/admin.css" />
	<link rel="stylesheet" href="/card/Public/Admin/Css/public.css" />
	<link rel="stylesheet" href="/card/Public/Admin/Css/mypage.css" />
	<link rel="stylesheet" href="/card/Public/Admin/Css/add_category.css" />

<!-- 默认打开目标 -->
<base target="iframe"/>
</head>
<body>
<!-- 头部 -->
	<div id="top_box">
		<div id="top">
			<p id="top_font">用户管理系统</p>
			<ul id="menu2" class="menu">
				<li>
					<a href="">前台首页</a>
				</li>
				<li><a href="">查看栏目</a></li> 
				<li><a href="">用户列表</a></li>
				<li><a href="">网站配置</a></li>				
			</ul>
		</div>
		<div class="top_bar">
			<p class="adm">
					欢迎
				<span class="adm_pic">&nbsp&nbsp&nbsp&nbsp</span>
				<?php echo ($_SESSION['info']['name']); ?>
			</p>
			<p class="now_time">
				今天是：<?php echo date("Y-m-d");?> 
					<?php echo ($week); ?>
			</p>
			<p class="out">
				<span class="out_bg">&nbsp&nbsp&nbsp&nbsp</span>&nbsp
				<a href="<?php echo U('Login/loginout');?>" target="_self">退出</a>
			</p>
		</div>
	</div>
<!-- 左侧菜单 -->
		<div id="left_box">
			<p class="use">常用菜单</p>

			<div class="menu_box">
				<h2>用户管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('User/index');?>" class="pos">用户列表</a>
				        </li>
				    </ul>
				    <ul class="con">
				    	<li class="nav_u">
				    		<a href="<?php echo U('User/service');?>" class="pos">客服列表</a>
				    	</li>
				    </ul>
				    <ul class="con">
				    	<li class="nav_u">
				    		<a href="<?php echo U('User/addservice');?>" class="pos">添加客服</a>
				    	</li>
				    </ul>
					<ul class="con">
				    	<li class="nav_u">
				    		<a href="<?php echo U('User/good');?>" class="pos">优秀案例</a>
				    	</li>
				    </ul>

				</div>
			</div>

			<div class="menu_box">
				<h2>资金管理</h2>
				<div class="text">
				    <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('User/payment');?>" class="pos">付款记录</a>
				        </li>
				    </ul>

				    <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('User/tixian');?>" class="pos">提现记录</a>
				        </li>
				    </ul>
				</div>
			</div>

			<div class="menu_box">
				<h2>文章管理</h2>
				<div class="text">

					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Article/cardindex');?>" class="pos">信用卡知识文章</a>
				        </li>
				    </ul>

				    <ul class="con">
				    	<li class="nav_u">
				    		<a href="<?php echo U('Article/finindex');?>" class="pos">金融理财文章</a>
				    	</li>
				    </ul>

				    <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Article/generaindex');?>" class="pos">推广须知</a>
				        </li>
				    </ul>

				</div>
			</div>

			<div class="menu_box">
				<h2>商品管理</h2>
				<div class="text">

					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Goods/index');?>" class="pos">商品列表</a>
				        </li>
				    </ul>

				    <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('Goods/add');?>" class="pos">商品添加 </a>
				        </li>
				    </ul>

				</div>
			</div>

			<div class="menu_box">
				<h2>信用卡链接管理</h2>
				<div class="text">

					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('link/index');?>" class="pos">链接列表</a>
				        </li>
				    </ul>

				    <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('link/add');?>" class="pos">链接添加 </a>
				        </li>
				    </ul>

				</div>
			</div>

			<div class="menu_box">
				<h2>团队管理</h2>
				<div class="text">

					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo U('team/index');?>" class="pos">用户团队</a>
				        </li>
				    </ul>

				</div>
			</div>
			
		</div>
		<!-- 右侧 -->
		<div id="right">
		 
    
<body>
	<form action="<?php echo U('User/doedit');?>" method="post" enctype="multipart/form-data" >
		<table class="table">
			<tr >
				<td class="th" colspan="2" >修改用户信息</td>
			</tr>
<!-- 			<tr>
				<td>修改用户头像：</td>
				<td><input type="file" name="head_pic" onChange="document.getElementsByName('xgpic')[0].value=this.value" /></td>
				<input type="hidden" name="xgpic">
			</tr>
			<tr>
				<td>用户原头像：</td>
				<td>
					<?php if(empty($info['head_pic']) == true): ?>用户没有上传头像
					<?php else: ?><img src="/card/Public/Uploads/<?php echo ($info['head_pic']); ?>" style="height:100px;"><?php endif; ?>
				</td>
			</tr> -->
			<tr>
				<td>修改用户名</td>
				<td><input type="text" name="name" value="<?php echo ($info['name']); ?>" /></td>
				<input class=" form-control" id="id" name="id" type="hidden" value="<?php echo ($info["id"]); ?>" /> 
			</tr>
			<tr>
				<td>修改上级ID</td>
				<td><input type="text" name="pid" value="<?php echo ($info['pid']); ?>" /></td>
			</tr>
<!-- 			<tr>
				<td>是否重置密码为：<span style="color:red;">123456</span></td>
				<td>
					<span style="margin-right:10%;">是<input type="radio" name="pwd" value="2" /> </span>
					否<input type="radio" name="pwd" value="1" checked />
				</td>
			</tr> -->
			<tr>
				<td>修改用户地址：</td>
				<td><input type="text" name="address" value="<?php echo ($info['address']); ?>" /></td>
			</tr>
			<tr>
				<td>修改电话：</td>
				<td><input type="text" name="tel" value="<?php echo ($info['tel']); ?>" /></td>
			</tr>
			<tr>
				<td>修改用户金额：</td>
				<td><input type="text" name="money" value="<?php echo ($info['money']); ?>" /></td>
			</tr>
			<tr>
				<td>修改会员等级：</td>
				<td>
					金卡会员<input type="radio" name="grade" value="2" <?php if($info["grade"] == 2): ?>checked<?php endif; ?> />
					银卡会员<input type="radio" name="grade" value="1" <?php if($info["grade"] == 1): ?>checked<?php endif; ?> />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="修改" class="input_button"/>
					<input type="reset" class="input_button"/>
				</td>
			</tr>
		</table>
	</form>
</body>




  
			<!-- <iframe  frameboder="0" border="0" 	scrolling="yes" name="iframe" src=""></iframe> -->
		</div>
	<!-- 底部 -->
	<div id="foot_box">
		<div class="foot">
			<p>@Copyright © 2013-2013 MZY.com All Rights Reserved. 京ICP备0000000号</p>
		</div>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="./js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('.adm_pic, #left_box .pos, .span_server, .span_people', 'background');
    </script>
<![endif]-->
	<script type="text/javascript" src="/card/Public/Admin/Js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="/card/Public/Admin/Js/admin.js"></script>
	<script type="text/javascript" src="/card/Public/Admin/Js/public.js"></script>
</body>
</html>