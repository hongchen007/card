<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	
   <title>后台-浏览用户</title>
  
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
		 
  
<form method="get" action="<?php echo U('User/index');?>">
	<div style="margin-top:20px">
		<input type="text" value="<?php echo ($_GET['id']); ?>" name="id" placeholder="搜索用户ID" >
		<input type="text" value="<?php echo ($_GET['name']); ?>" name="name" placeholder="搜索用户名" >
		状态：
			<select class="form-control m-bot15" name="state" >
                  <option value="">--请选择--</option>
                  <option value="1">正常用户</option>
                  <option value="2">禁用用户</option>
            </select>
		<input type="submit" value="查询">
	</div>

</form>

<body>
	<table class="table">
		<tr>
			<td class="th" colspan="20">用户列表</td>
		</tr>
		<tr class="tableTop">
			<th class="tdLittle1">ID</th>
			<th>上级代理ID</th>
			<th>用户名</th>
			<th>用户微信名</th>
			<th>头像</th>
			<th>电话</th>
			<th>地址</th>		
			<th>关注时间</th>
			<th>金币</th>
			<th>等级</th>
			<th>帐号状态</th>
			<th>操作</th>
		</tr>
		
		<?php if(is_array($info)): foreach($info as $key=>$val): ?><tr>
		
			<td><?php echo ($val['id']); ?></td>
			<td><?php echo ($val['pid']); ?></td>
			<td><?php echo ($val['name']); ?></td>
			<td><?php echo ($val['weixin_name']); ?></td>
			<td>
				<?php if(empty($val['weixin_headimgurl']) == true): ?>用户没有上传头像
				<?php else: ?><img src="<?php echo ($val['weixin_headimgurl']); ?>" style="height:100px;"><?php endif; ?>
			</td>
			<td><?php echo ($val['tel']); ?></td>
			<td><?php echo ($val['address']); ?></td>
			<td><?php echo (substr($val['weixin_addtime'],0,10)); ?></td>
			<td><?php echo ($val['money']); ?></td>
			<td>
				<?php if($val['grade'] == 1): ?><span style="color:blue;">银卡会员</span><?php endif; ?>
				<?php if($val['grade'] == 2): ?><span style="color:red">金卡会员</span><?php endif; ?>
			</td>
			<td>
				<?php if($val['state'] == 1): ?><span style="color:blue;">正常</span><?php endif; ?>
				<?php if($val['state'] == 2): ?><span style="color:red">冻结</span><?php endif; ?>
			</td>
			<td>
				<?php if($val['state'] ==1): ?><a href="/card/index.php/Admin/User/edit/id/<?php echo ($val["id"]); ?>">修改</a>|
		            <a href="/card/index.php/Admin/User/stop/id/<?php echo ($val["id"]); ?>">冻结</a>
		        <?php else: ?>
					<a href="/card/index.php/Admin/User/edit/id/<?php echo ($val["id"]); ?>">修改</a> |
		            <!-- <a href="/card/index.php/Admin/User/del/id/<?php echo ($val["id"]); ?>">删除</a><br> -->
		            <a href="/card/index.php/Admin/User/start/id/<?php echo ($val["id"]); ?>">恢复</a><?php endif; ?>
		    </td>
		</tr><?php endforeach; endif; ?>
		<tr class="content">
                <!--<td colspan="3" bgcolor="#FFFFFF">&nbsp;<?php echo ($page); ?></td>-->
                <td colspan="3" bgcolor="#FFFFFF"><div class="pages">
                        <?php echo ($page); ?>
                </div></td>  
            </tr>
	</table>

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