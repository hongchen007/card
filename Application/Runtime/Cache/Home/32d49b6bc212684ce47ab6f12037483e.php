<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的二维码</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <link href="/card/Public/123/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet">
    
    <link href="/card/Public/123/css/QR.css" rel="stylesheet">
    <script src="/card/Public/123/js/jquery-3.1.0.js"></script>
	
</head>
<body>
<div class="code">
      <div class="codes">
         <img src="<?php echo ($weixin_user["weixin_headimgurl"]); ?>" class="img">
          <div class="txts">
              <span class="txt">我是<span><?php echo ($weixin_user["weixin_name"]); ?></span><br>向你推荐晓数点
              </span>
          </div>
      </div>
      <!-- http://qr.liantu.com/api.php?text=http://<?php echo C('url1');?>/card/index.php/Home/Login/index?random=<?php echo ($random); ?> -->
       <div id="qr"><img src="/card/Public/123/images/1505097531.jpg"/></div>
       <!-- <div id="qr"><img class="img-responsive" src="/card/Public/123/images/code_11.jpg"></div> -->
       <div class="vip1">仅需<span>88</span>元扫描二维码加加入会员 终生受益</div>
      <div class="particulars">
          <span class="arrow2"><img src="/card/Public/123/images/arrow_03.jpg"><b>推广须知</b>
          </span>
         <div id="detai_list">
              <p><span>1</span>集合提供全网贷款、信用卡办理通道，为会员提供自助申</p>
			  <ul>
				  <li>*请办理平台。<li>
				  <li>*为会员节省筹款时间<li>
				  <li>*为会员节省金融中介相关费用<li>
				  <li>为会员节省购买市面金融一体机费用<li>
              </ul>
             <p><span>2</span>整理适合个人理财、信用卡使用等相关金融知识与会员分享学习。</p>
			   <ul>
			 
				 <li>*帮助会员提高金融理财相关知识<li>
				 <li>*帮助会员提高金融风险防范知识<li>
				 <li>*帮助会员提高个人贷款、信用卡使用知识<li>
				</ul>
             <p><span>3</span>借助互联网发展趋势，为会员提供兼职赚钱机会，实现平台与会员互惠共赢。</p>
			 <ul>
				 <li>*帮助会员提高金融理财相关知识<li>
				 <li>*为会员提供管理规范、客源充足的销售平台<li>
				 <li>*为会员提供货真价实、物美价廉的购物平台<li>
				 <li>*（采用三级分销模式，佣金实行当天 、秒结）<li>
				 <li>1、88元注册银卡会员，推广会员注册得56元推广费用<li>
				 <li>2、388元注册金卡会员，公司赠送0.5%-0.65%移动刷卡软件，一级会员得136元（如银卡会员升级得80元），二级会员得56元，三级会员得96元<li>
				 <li>所有推广返利均是秒结算，剩余费用转入公司账户<li>
				 <li>会员帮助平台提升市场知名度<li>
				 <li>平台帮助会员汇总团队信息提高凝聚力加快发展速度<li>
			 </ul>
         </div>
      </div>
</div>
<!-- <ul class="footer">
    <li><a href="login.html"><img src="/card/Public/123/images/li_33.jpg"><br><br>加入会员</a></li>
    <li><a href="javascript:;"><img src="/card/Public/123/images/li_42.jpg"><br><br>新手帮助</a></li>
    <li><a href="updata.html"><img src="/card/Public/123/images/li_39.jpg"><br><br>我要推广</a></li>
    <li><a href="me.html"><img src="/card/Public/123/images/li_36.jpg"><br><br>个人中心</a></li>
</ul> -->

</body>
</html>
<script>
		var _width = document.documentElement.clientWidth || document.body.clientWidth;
            document.documentElement.style.fontSize = _width /640 * 100 + "px";
        window.onresize = function () {
            var _width = document.documentElement.clientWidth || document.body.clientWidth;
            document.documentElement.style.fontSize = _width /640 * 100 + "px";
        };
	
		var _detail_list=document.getElementById("detai_list");
		var _p=_detail_list.getElementsByTagName("p");
		var _ul=_detail_list.getElementsByTagName("ul");
		
	
		for(var i=0;i<_p.length;i++){
			_p[i].index=i;
			_p[i].off=true;
			_p[i].onclick=function(){
			var _index=this.index;
			
				if(this.off){
					
					$(_ul[_index]).slideDown();

				}else { 
					$(_ul[_index]).css("display","none")
				
				}
				this.off=!this.off;
			}
		}
		
		
		
		
		
		
		
	    
		
	
    
    
</script>